<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Como adotar</title>
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

	<section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left" style="padding-top: 5%;">
						<h4>REQUISITOS PARA ADOÇÃO</h4>
						<ul>
							<li>Morar em casa ou apartamento que ofereça segurança</li>
							<li>Ter 18 anos de idade ou mais</li>
							<li>Apresentar CPF, RG e comprovante de residência</li>
							<li>Ter condições financeiras para arcar com ração de boa qualidade e veterinário em caso de necessidade</li>
							<li>Assinar termo de responsabilidade declarando-se o encarregado do animal</li>
							<li>Efetuar pagamento de taxa de adoção (R$ 40,00) - Taxa destinada à cobrir parte dos custos com tratamentos, vacinas e vemífugos dados aos animais.</li>
							<br>
							<form action="adote.php" method="post">
								<button class="btn btn-success" style="padding: 10px;">
									Conheça alguns dos animais que esperam por um lar
								</button>
							</form>
						</ul>
                    </div>
                </div>
			</div>
	</section>

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
