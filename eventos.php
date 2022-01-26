<?php
	require_once('model/css.class.php');
	$css = new Css();
	
	require_once('system/app/class/db.class.php');
	$db = new DB();
	//Produtos em promoção
	$eventos = $db->pesquisaEventos();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Eventos</title>
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
		<!-- Blog Post Section -->
		<section class="ptb ptb-sm-80">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h3>Eventos</h3>
					</div>
				</div>
				<!-- Post Item -->
				<div class="row container-grid">
							<?php
								foreach($eventos as $evento){
									$date = '';
									$hora_inicio = $evento['hora_evento_inicio'];
									$hora_fim = $evento['hora_evento_fim'];
									if(isset($evento['data_evento']) && !empty($evento['data_evento']) && $evento['data_evento'] != '0000-00-00'){
										$date = new DateTime($evento['data_evento']);
										$date = $date->format('d/m/Y');
										$date = '<strong><span style="text-transform: capitalize;">'.utf8_encode($evento['dia_da_semana']).', </span><span>'.$date.' | '.$hora_inicio.' às '.$hora_fim.'</span></strong>';
									}
									
									$local = '';
									if(isset($evento['local']) && !empty($evento['local'])){
										$local = '<strong><span>'.utf8_encode($evento['local']).'</strong>';
									}
									
									$endereco = '';
									if(isset($evento['endereco']) && !empty($evento['endereco']) && !empty($local)){
										$endereco = '<strong><span> | '.utf8_encode($evento['endereco']).'</strong>';
									}
										else if(isset($evento['endereco']) && !empty($evento['endereco']) && empty($local)){
											$endereco = '<strong><span> '.utf8_encode($evento['endereco']).'</strong>';
										}
									
									$foto = $db->pesquisaFoto($evento['id']);
									
									if(!isset($foto) || empty($foto)){
										$foto = "";
									}
										else {
												$foto = '<div class="post-media">
														<img class="item-container" src="system/img/blogs/'.$foto.'" alt="'.utf8_encode($evento['titulo']).'" style="width: 30%;" />
													</div>';
										}
									
									echo '
											<div class="col-md-12 col-sm-12 col-xs-12 nf-item spacing-grid">
												<div class="blog-post">
													'.$foto.'
													<div class="post-header">
														<span style="text-transform: uppercase; font-size: 16px;"><strong>'.utf8_encode($evento['titulo']).'</strong></span><br>
														'.$date.'<br>
														'.$local.' '.$endereco.'
													</div><br>
													<div class="post-entry" style="text-align: justify">
														<p>'.utf8_encode($evento['texto']).'</p>
													</div>
												</div>
											</div>';
											// <div class="post-meta"><span> Autor: '.utf8_encode($evento['autor']).'</span><br>Publicado: <span>'.$evento['data_hora_criacao'].'</span></div>
								}
							?>
				</div>
				<!-- End Post Item -->
			</div>
		</section>
		<!-- End Blog Post Section -->

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
