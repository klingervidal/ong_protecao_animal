<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Formulário para adoção</title>
	<?php echo $css->favIcon; ?>
	<?php echo $css->componentesCssJsInicio; ?>
</head>

<?php echo $css->scrollBar; ?>

<body id="style-6">
<?php include_once("analyticstracking.php") ?>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->
	
	<?php echo $css->abaDoacao; ?>
	<?php echo $css->abaDoacao2; ?>

    <!-- Site Wraper -->
    <div class="wrapper">
	<?php echo $css->headerMenuDesktop; ?>

	 <!-- Adoção Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Formulário para adoção</h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- Adoção FORM -->
                        <form class="contact-form" action="mail/enviaFormularioAdocao.php" method="post" role="form">
                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="name" type="text" name="name" autofocus placeholder="NOME*" required style="text-transform: uppercase;" >
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="prof" type="text" name="prof" placeholder="PROFISSÃO*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="idade" type="number" name="idade" placeholder="IDADE*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="bairro" type="text" name="bairro" placeholder="BAIRRO*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="cidade" type="text" name="cidade" placeholder="CIDADE*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="uf" type="text" name="uf" placeholder="UF*" maxlength="2" required style="text-transform: uppercase;">
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="email" type="email" name="email" placeholder="EMAIL*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="phone" type="text" name="phone" placeholder="TELEFONE (DDD) 9 0000 0000*" required style="text-transform: uppercase;">
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="face" type="text" name="face" placeholder="FACEBOOK (URL)" style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">MORA EM*</label>
                                    <select id="moradia" class="form-control" name="moradia" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" disabled selected>SELECIONE</option>
                                        <option value="CASA">CASA</option>
                                        <option value="APARTAMENTO">APARTAMENTO</option>
                                        <option value="SÍTIO">SÍTIO</option>
                                        <option value="FAZENDA">FAZENDA</option>
                                        <option value="CHÁCARA">CHÁCARA</option>
                                        <option value="OUTRO">OUTRO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">IMÓVEL*</label>
                                    <select id="imovel" class="form-control" name="imovel" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="ALUGADO">ALUGADO</option>
                                        <option value="PRÓPRIO">PRÓPRIO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">POSSUI QUINTAL?*</label>
                                    <select id="quintal" class="form-control" name="quintal" style="color: #0c699f; text-transform: uppercase;" required>
										<option value="" selected disabled>SELECIONE</option>
                                        <option value="NÃO">NÃO</option>
                                        <option value="SIM">SIM</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">JÁ POSSUI GATO OU CACHORRO?*</label>
                                    <select id="ja_possui_animal" class="form-control" name="ja_possui_animal" style="color: #0c699f; text-transform: uppercase;" onchange="showHideQtdAnimais()" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="GATO">SIM, GATO</option>
                                        <option value="CACHORRO">SIM, CACHORRO</option>
                                        <option value="CACHORRO E GATO">SIM, CACHORRO E GATO</option>
                                        <option value="NÃO POSSUO">NÃO POSSUO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper" id="div_qtd_animais" hidden>
                                <label for="topic">QUANTOS SÃO?*</label>
                                    <input class="input-sm form-full" id="qtd_gatos" type="hidden" name="qtd_gatos" placeholder="GATOS" style="text-transform: uppercase;">
                                    <input class="input-sm form-full" id="qtd_caes" type="hidden" name="qtd_caes" placeholder="CACHORROS" style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <textarea rows="5" class="input-sm form-full" id="motivo_adocao" type="text" name="motivo_adocao" placeholder="Por que quer adotar um bichinho?*" required style="text-transform: uppercase;"></textarea>
                            </div>
							
							<div class="form-field-wrapper">
                                <textarea rows="2" class="input-sm form-full" id="responsavel_adotado" type="text" name="responsavel_adotado" placeholder="Quem será responsável pelo adotado?*" required style="text-transform: uppercase;"></textarea>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">O ADOTADO FICARÁ SOZINHO EM CASA?*</label>
                                    <select id="adotado_sozinho" class="form-control" name="adotado_sozinho" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">HOUVE FALECIMENTO DE ANIMAL NA SUA CASA NOS ÚLTIMOS MESES?*</label>
                                    <select id="falecimento" class="form-control" name="falecimento" style="color: #0c699f; text-transform: uppercase;" onchange="showHideCausaObito()" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper" id="div_causa_obito" hidden>
                                <textarea rows="2" class="input-sm form-full" id="causa_obito" type="hidden" name="causa_obito" placeholder="DESCREVA A CAUSA*" style="text-transform: uppercase;"></textarea>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">VOCÊ É A FAVOR DA ESTERILIZAÇÃO (CASTRAÇÃO)?*</label>
                                    <select id="opiniao_castracao" class="form-control" name="opiniao_castracao" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">ESTÁ PREPARADO PARA AS DESPESAS QUE TERÁ COM O ADOTADO, COMO BOA RAÇÃO, VACINAS, VERMÍFUGOS, VISITAS AO VETERINÁRIO SEMPRE QUE NECESSÁRIO?*</label>
                                    <select id="opiniao_despesas" class="form-control" name="opiniao_despesas" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">DESEJA ADOTAR*</label>
                                    <select id="deseja_adotar" class="form-control" name="deseja_adotar" style="color: #0c699f; text-transform: uppercase;" onchange="showHideTipoAdocao()" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="GATO">GATO</option>
                                        <option value="CACHORRO">CACHORRO</option>
                                        <option value="CACHORRO E GATO">CACHORRO E GATO</option>
                                    </select>
                            </div>

							<div class="form-field-wrapper" id="div_seguranca_imovel" hidden>
                                <label for="topic">CONSIDERANDO A ADOÇÃO DE GATOS, SUA RESIDÊNCIA É SEGURA? (APARTAMENTO COM JANELAS E VARANDAS COM TELAS, CASAS COM MUROS ALTOS E BEM FECHADAS)*</label>
                                    <select id="seguranca_imovel" class="form-control" name="seguranca_imovel" style="color: #0c699f; text-transform: uppercase;">
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="adotar_quantos_gatos" type="hidden" name="adotar_quantos_gatos" placeholder="QUER ADOTAR QUANTOS GATOS?" style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper" id="div_porte_cao" hidden>
                                <label for="topic">CONSIDERANDO A ADOÇÃO DE CACHORROS, QUAL O PORTE DESEJADO?*</label>
                                    <select id="porte_cao" class="form-control" name="porte_cao" style="color: #0c699f; text-transform: uppercase;">
                                        <option value="" selected disabled>SELECIONE</option>
										<option value="INDIFERENTE">INDIFERENTE</option>
                                        <option value="GRANDE">GRANDE</option>
                                        <option value="MÉDIO">MÉDIO</option>
                                        <option value="PEQUENO">PEQUENO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="adotar_quantos_caes" type="hidden" name="adotar_quantos_caes" placeholder="QUER ADOTAR QUANTOS CACHORROS?" style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">PREFERÊNCIA DE IDADE?*</label>
                                    <select id="preferencia_idade" class="form-control" name="preferencia_idade" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="INDIFERENTE">INDIFERENTE</option>
                                        <option value="ADULTO">ADULTO</option>
                                        <option value="IDOSO">IDOSO</option>
                                        <option value="FILHOTE">FILHOTE</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">PREFERÊNCIA POR ANIMAIS CASTRADOS?*</label>
                                    <select id="preferencia_castrado" class="form-control" name="preferencia_castrado" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="INDIFERENTE">INDIFERENTE</option>
                                        <option value="SIM">SIM</option>
                                        <option value="NÃO">NÃO</option>
                                    </select>
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">PREFERÊNCIA DE SEXO?*</label>
                                    <select id="preferencia_sexo" class="form-control" name="preferencia_sexo" style="color: #0c699f; text-transform: uppercase;" required>
                                        <option value="" selected disabled>SELECIONE</option>
                                        <option value="INDIFERENTE">INDIFERENTE</option>
                                        <option value="MACHO">MACHO</option>
                                        <option value="FÊMEA">FÊMEA</option>
                                    </select>
									<span style="color: red; font-size: 10px;">*Campos obrigatórios.</span>
                            </div>
                            <button class="btn btn-md btn-success form-full" type="submit" id="form-submit" name="submit">Enviar</button>
                        </form>
                        <!-- END Adoção FORM -->
						
						<strong>Período de adaptação:</strong> O cão ou gato pode chorar ou miar, ficar agitado ou prostrado, fazer as necessidades fisiológicas em locais não adequados, estragar, comer ou pegar objetos, tentar fugir , etc.
						<br><br>
						<strong>Paciência e compreensão</strong> são fundamentais para o sucesso da adaptação no novo lar. Um cão/gato pode levar em média 20 dias para se adaptar ao local, à nova alimentação, etc.
                    </div>
                </div>
            </div>
        </section>
        <!-- Adoção Section -->

        <!-- FOOTER -->
			<?php echo $css->footerStart; ?>
			<?php echo date("Y"); ?>
			<?php echo $css->footerMiddle; ?>
			<?php echo $css->visit(); ?>
			<?php echo $css->footerEnd; ?>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->
	<?php
		$url = $css->url();
		if($url != '/index.php'){
			echo $css->socialLink;
		}
	?>

    <!-- JS -->
	<?php echo $css->componentesCssJsFim; ?>
	
</body>

<script>
function showHideQtdAnimais(){
	var QtdAnimais = $('select[name="ja_possui_animal"]').val();

	if(QtdAnimais == 'NÃO POSSUO'){
		$("#div_qtd_animais").fadeOut();
		
		$("#qtd_gatos").prop("type", "hidden");
		$("#qtd_gatos").prop("value", "");
		$("#qtd_gatos").prop('required',false);
		
		$("#qtd_caes").prop("type", "hidden");
		$("#qtd_caes").prop("value", "");
		$("#qtd_caes").prop('required',false);
	}
		else if(QtdAnimais == 'GATO') {
			$("#div_qtd_animais").fadeIn();
			
			$("#qtd_gatos").prop("type", "number");
			$("#qtd_gatos").prop("value", "");
			$("#qtd_gatos").prop('required',true);
			
			$("#qtd_caes").prop("type", "hidden");
			$("#qtd_caes").prop("value", "");
			$("#qtd_caes").prop('required',false);
		}
			else if(QtdAnimais == 'CACHORRO') {
				$("#div_qtd_animais").fadeIn();
				
				$("#qtd_caes").prop("type", "number");
				$("#qtd_caes").prop("value", "");
				$("#qtd_caes").prop('required',true);
				
				$("#qtd_gatos").prop("type", "hidden");
				$("#qtd_gatos").prop("value", "");
				$("#qtd_gatos").prop('required',false);
			}
				else if(QtdAnimais == 'CACHORRO E GATO') {
					$("#div_qtd_animais").fadeIn();
					
					$("#qtd_gatos").prop("type", "number");
					$("#qtd_gatos").prop("value", "");
					$("#qtd_gatos").prop('required',true);
					
					$("#qtd_caes").prop("type", "number");
					$("#qtd_caes").prop("value", "");
					$("qtd_caes").prop('required',true);
				}
}

function showHideTipoAdocao(){
	var DesejaAdotar = $('select[name="deseja_adotar"]').val();

	if(DesejaAdotar == 'GATO'){
		$('#seguranca_imovel').val('');
		
		$('#adotar_quantos_gatos').prop("type", "number");
		$('#adotar_quantos_gatos').prop("value", "");
		$("#adotar_quantos_gatos").prop('required',true);
		
		$('#adotar_quantos_caes').prop("type", "hidden");
		$('#adotar_quantos_caes').prop("value", "");
		$("#adotar_quantos_caes").prop('required',false);
		
		$('#porte_cao').val('');
		
		$("#div_porte_cao").fadeOut();
		$("#div_seguranca_imovel").fadeIn();
	
	}
		else if(DesejaAdotar == 'CACHORRO'){
			$('#seguranca_imovel').val('');
			$('#porte_cao').val('');
			
			$('#adotar_quantos_gatos').prop("type", "hidden");
			$('#adotar_quantos_gatos').prop("value", "");
			$("#adotar_quantos_gatos").prop('required',false);
			
			$('#adotar_quantos_caes').prop("type", "number");
			$('#adotar_quantos_caes').prop("value", "");
			$("#adotar_quantos_caes").prop('required',true);
			
			$("#div_seguranca_imovel").fadeOut();
			$("#div_porte_cao").fadeIn();
		}
			else if(DesejaAdotar == 'CACHORRO E GATO'){
				$('#seguranca_imovel').val('');
				$('#porte_cao').val('');
				
				$('#adotar_quantos_gatos').prop("type", "number");
				$('#adotar_quantos_gatos').prop("value", "");
				$("#adotar_quantos_gatos").prop('required',true);
				
				$('#adotar_quantos_caes').prop("type", "number");
				$('#adotar_quantos_caes').prop("value", "");
				$("#adotar_quantos_caes").prop('required',true);
				
				$("#div_seguranca_imovel").fadeIn();
				$("#div_porte_cao").fadeIn();
			}
				else {
					$('#seguranca_imovel').val('');
					$('#porte_cao').val('');
					
					$('#adotar_quantos_gatos').prop("type", "hidden");
					$('#adotar_quantos_gatos').prop("value", "");
					$("#adotar_quantos_gatos").prop('required',false);
					
					$('#adotar_quantos_caes').prop("type", "hidden");
					$('#adotar_quantos_caes').prop("value", "");
					$("#adotar_quantos_caes").prop('required',false);
					
					$("#div_seguranca_imovel").fadeOut();
					$("#div_porte_cao").fadeOut();
				}
}

function showHideCausaObito(){
	var HouveObito = $('select[name="falecimento"]').val();
	if(HouveObito == 'SIM'){
		$("#causa_obito").prop("type", "text");
		$("#causa_obito").prop("value", "");
		$("#causa_obito").prop('required',true);
		$("#div_causa_obito").fadeIn();
	}
		else {
			$("#div_causa_obito").fadeOut();
			$("#causa_obito").prop("type", "hidden");
			$("#causa_obito").prop("value", "");
			$("#causa_obito").prop('required',false);
		}
}
</script>

</html>
