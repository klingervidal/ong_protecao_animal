<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Loja</title>
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
                    <div class="col-md-6 col-md-offset-3 text-center" style="padding-top: 11%;">
						<span style="color: black; font-size: 20px;">
							Em construção <i class="fa fa-building-o"></i>
						</span><br><br>
						<a href="javascript:window.history.go(-1)"><button class="btn btn-md btn-success"><span style="color: white;">Voltar</span></button></a>
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
