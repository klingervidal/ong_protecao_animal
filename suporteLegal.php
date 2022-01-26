<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Suporte Legal</title>
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

	<!-- Work Detail Section -->
	<section class="ptb ptb-sm-80">
		<div class="container" style="margin-top: 4%;">
			<div class="row container-grid nf-col-3">
				<div class="nf-item branding coffee spacing" style="width: 50%;">
					<div class="item-box" style="background-color: #aacbb8; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #476845; text-align: center;"><strong>ONDE DENUNCIAR</strong></div>
						<span style="font-size: 13px; color: #476845;">
							2123-1600 - Denúncias da Companhia de Meio Ambiente <br>
							2123-1614 - Despacho de Viaturas <br>
							2123-1613 - Primeiro Pelotão, responsável pelo policiamento da RMBH <br>
							181 - Disque Denúncia. Ideal para casos que necessitam de investigação mais profunda.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 50%;">
					<div class="item-box" style="background-color: #eda5a5; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #b93a3a; text-align: center;"><strong>LEIS ESTADUAIS</strong></div>
						<span style="font-size: 13px; color: #6e2626;">
							– Minas Gerais<br>
							Lei nº 14.940, de 29 de dezembro de 2003<br>
							– Institui o Cadastro Técnico Estadual de Atividades
							Potencialmente Poluidoras ou Utilizadoras de Recursos
							Ambientais e a Taxa de Controle e Fiscalização
							Ambiental do Estado de Minas Gerais TFAMG – MG.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #fce2d8; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center; color: #825e4f;"><strong>LEIS FEDERAIS</strong></div>
						<span style="font-size: 13px; color: #825e4f;">
							Lei nº 11.105, de 24 de março de 2005<br>
							– Dispõe sobre atividades que envolvam organismos geneticamente modificados – OGM e seus derivados.<br><br>
							Lei nº 10.165, de 27 de dezembro de 2000<br>
							– Dispõe sobre a Taxa de Controle e Fiscalização Ambiental e
							Relatório Anual de Atividades.<br><br>
							Lei nº 9.960, de 28 de janeiro de 2000<br>
							– Institui a Taxa de Serviços Administrativos – TSA, em favor da
							Superintendência da Zona Franca de Manaus – Suframa.<br><br>
							Lei nº 9.605, de 12 de fevereiro de 1998<br>
							– Dispõe sobre as sanções penais e administrativas derivadas de
							condutas e atividades lesivas ao meio ambiente.<br><br>
							Lei nº 9.393, de 19 de dezembro de 1996<br>
							– Dispõe sobre o Imposto sobre a Propriedade Territorial Rural –
							ITR, sobre pagamento da dívida representada por Títulos da
							Dívida Agrária e dá outras providências.<br><br>
							Lei nº 9.059, de 13 de junho de 1995<br>
							– Dispõe sobre proteção e estímulo à pesca.<br><br>
							Lei nº 7.804, de 18 de julho de 1989<br>
							– Dispõe sobre o Cadastro Técnico Federal, entre outras alterações
							da Política Nacional do Meio Ambiente.<br><br>
							Lei nº 7.802, de 11 de julho de 1989<br>
							– Dispõe sobre o controle, a inspeção e a fiscalização de agrotóxicos,
							seus componentes e afins.<br><br>
							Lei nº 7.803, de 18 de julho de 1989<br>
							– Dispõe sobre a Política Nacional para utilização de rios e nascente
							e corpos dàgua.<br><br>
							Lei nº 7.679, de 23 de novembro de 1988<br>
							– Dispõe sobre a proibição da pesca de espécies em períodos de
							reprodução.<br><br>
							Lei nº 6.938, de 31 de agosto de 1981<br>
							– Dispõe sobre a Política Nacional do Meio Ambiente.<br><br>
							Lei nº 4.771, de 15 de setembro de 1965<br>
							– Dispõe sobre o Novo Código Florestal Brasileiro.						
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Detail Section -->

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
		$url = $css->url;
		if($url != '/index.php'){
			echo $css->socialLink;
		}
	?>

    <!-- JS -->
	<?php echo $css->componentesCssJsFim; ?>
	
</body>
</html>
