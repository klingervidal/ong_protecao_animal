<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Formulário para voluntariado</title>
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

	 <!-- Voluntariado Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Formulário para voluntariado</h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- Voluntariado FORM -->
                        <form class="contact-form" action="mail/enviaFormularioVoluntariado.php" method="post" role="form">
                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="name" type="text" name="name" autofocus placeholder="NOME*" required style="text-transform: uppercase;" >
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="idade" type="number" name="idade" placeholder="IDADE*" required style="text-transform: uppercase;">
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="email" type="email" name="email" placeholder="EMAIL*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <input class="input-sm form-full" id="phone" type="text" name="phone" placeholder="TELEFONE (DDD) 9 0000 0000*" required style="text-transform: uppercase;">
                            </div>
							
							<div class="form-field-wrapper">
                                <label for="topic">TIPO DE VOLUNTARIADO*</label>
								<select id="tipo_voluntariado" class="form-control" name="tipo_voluntariado" style="color: #0c699f; text-transform: uppercase;" required>
									<option value="" disabled selected>SELECIONE</option>
									<option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
									<option value="CAMPANHAS DE ADOÇÃO">CAMPANHAS DE ADOÇÃO</option>
									<option value="DISPONIBILIZAÇÃO DE LAR TEMPORÁRIO (LT)">DISPONIBILIZAÇÃO DE LAR TEMPORÁRIO (LT)</option>
									<option value="DIVULGAÇÃO EM REDES SOCIAIS">DIVULGAÇÃO EM REDES SOCIAIS</option>
									<option value="DOAÇÃO DE PRODUTOS PARA OS ANIMAIS">DOAÇÃO DE PRODUTOS PARA OS ANIMAIS</option>
									<option value="DOAÇÃO DE PRODUTOS PARA NOSSA LOJA">DOAÇÃO DE PRODUTOS PARA NOSSA LOJA</option>
									<option value="PARCERIA / DOAÇÃO FINANCEIRA">PARCERIA / DOAÇÃO FINANCEIRA</option>
									<option value="PROJETOS">PROJETOS</option>
									<option value="OUTRO">OUTRO</option>
								</select>
                            </div>
							
							<div class="form-field-wrapper">
                                <textarea class="form-full" id="message" rows="7" name="message" placeholder="MENSAGEM (OPCIONAL)" style="text-transform: uppercase;"></textarea>
								<span style="color: red; font-size: 10px;">*Campos obrigatórios.</span><br>
								<span style="color: red; font-size: 10px;"><strong>Obs:</strong> Menores de 18 anos somente poderão voluntariar com a presença do responsável legal.</span>
                            </div>
							
                            <button class="btn btn-md btn-success form-full" type="submit" id="form-submit" name="submit">Enviar</button>
                        </form>
                        <!-- END Voluntariado FORM -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Voluntariado Section -->

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
</html>
