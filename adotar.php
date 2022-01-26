<?php
	require_once('model/css.class.php');
	$css = new Css();
	
	require_once('system/app/class/db.class.php');
	$db = new DB();
	//Animais para adoção
	$adocao = $db->pesquisaAnimaisAdocao();
	
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Adotar</title>
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

	<section id="work" class="wow fadeInUp ptb ptb-sm-80 text-center">
		<!-- Work Gallary -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h3>Adoção</h3>
				</div>
			</div>
			<br>
			
			<div class="row container-grid nf-col-3">
				<?php
					if(!isset($adocao) || empty($adocao)){
						echo "Nenhum animal disponível para adoção.";
					}
						elseif(isset($adocao) && !empty($adocao)){
							foreach($adocao as $key){
								echo
									'
									<div class="nf-item branding design coffee spacing">
										<div class="item-box">
											<a class="cbox-gallary1" href="system/img/produtos/'.$key['foto'].'" title="'.utf8_encode($key['nome']).' - '.utf8_encode($key['flg_sexo']).' - '.$key['data_nascimento'].'">
												<img class="item-container" src="system/img/produtos/'.$key['foto'].'" alt="'.utf8_encode($key['nome']).'" />
												<div class="item-mask">
													<div class="item-caption">
														<h5 class="white">'.utf8_encode($key['flg_sexo']).'</h5>
														<p class="white">'.$key['data_nascimento'].'</p>
													</div>
												</div>
											</a>
										</div>
										<div style="text-align: justify;">
											<span style="font-size: 13px; color: black;"><strong>'.utf8_encode($key['nome']).'</strong></span><br>
											<span style="color: black;">'.utf8_encode($key['detalhes']).'</span>
										</div>
				</div>
									';
							}
						}
					?>
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
