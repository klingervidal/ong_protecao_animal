<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Home</title>
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

        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- Intro -->
        <section id="intro" class="intro">
            <!--Slider Revolution-->
            <div class="tp-banner-container">
                <div class="intro-RevSlider text-center">
                    <ul>
                        <!-- SLIDE  1 -->
                        <li class="dark-color" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-slide="dark-slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slide/1.png" alt="Brigada Planetária Slide 1" data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">
                        </li>

                        <!-- SLIDE  2 -->
                        <li class="dark-color" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-slide="dark-slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slide/2.png" alt="Brigada Planetária Slide 2" data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat"> 
                        </li>

                        <!-- SLIDE 3 -->
                        <li class="light-color" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-slide="light-slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slide/3.png" alt="Brigada Planetária Slide 3" data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">
                        </li>

                        <!-- SLIDE  -->
                        <li class="dark-color" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-slide="dark-slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slide/4.png" alt="Brigada Planetária Slide 4" data-bgfit="cover" data-bgposition="top center" data-bgrepeat="no-repeat">
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
            <!-- End Slider Revolution-->
        </section>
        <!-- End Intro -->
        
		
		<hr />
        <!-- END CONTENT ---------------------------------------------------------------------------->

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
	
	<?php
		/* 					CAMPANHAS CALENDÁRIO, FESTA JUNINA 					 */
		/**************************************************************************
				INÍCIO CAMPANHA CALENDÁRIO COM DATA DINÂMICA (HOME)
		**************************************************************************/
		$dataAtualCampanhaCalendario = date("Y-m-d");
		
		if($dataAtualCampanhaCalendario <= '2019-04-26'){
			echo '	<div class="search-overlay-menu open" id="style-6" style="background-color: white; opacity: 1; filter: alpha(opacity=100);">
						<span class="search-overlay-close"><button class="btn btn-danger btn-xs">Fechar</button></span>
						<section style="margin-top: 1%; background-image: url(img/calendario/calendario_2019.png); min-height: 1088px;">
							<h2 style="color: black;">Já estão à venda os Calendários 2019 da Brigada Planetária!</h2>
							<div class="container">
								<strong style="color: black; font-size: 16px;">
									Pedidos no contato do site e pelo WhatsApp 31 98561-6123
								</strong>
								<br>
								<span style="color: black; font-size: 13px;">
									<br><br>
									Todos os animais que estampam nosso projeto já estiveram nas ruas e, hoje, são nossas estrelas!!!
									<br><br>
									Em cada página, uma foto especial e um texto ou poema de artistas voluntários que doaram seu talento pra ajudar a lembrar como é lindo o ato de ADOTAR.
									<br><br>
									Nossa gratidão a todos os envolvidos neste projeto incrível!
									<br><br>
									Não compre animais, compre um calendário e ajude um animal carente.
									<br><br>
									<strong>Valor: R$ 20,00</strong> (com um de nossos voluntários, na Escola de Imagem e na Castrapet BH) 		
									<br>
									<strong>Valor: R$25,00</strong> (se adquirido via correios (enviamos para todo Brasil))
									<br><br>
									<strong>Pedidos e compras <a target="_blank" href="https://www.facebook.com/brigada.planetaria/" style="color: #f05472"> por mensagem na página do facebook</a>, <a target="_blank" href="https://instagram.com/brigadaplanetaria?utm_source=ig_profile_share&igshid=1cp0weoki1agn" style="color: #f05472">- Instagram</a> e whatsapp 31 98561-6123.</strong>
									<br><br>
									Todo o valor arrecadado é revertido em prol de cuidados e amparo aos animais errantes e também aos que passam pelos voluntários da Brigada Planetária.
									<br><br>
									Ajude-nos a ajudar! 
									<br><br>
									<strong>#adote | #calendáriobrigadaplanetária2019</strong>
									<br><br>
								</span>
							</div>
						</section>
					</div>';
		}
		
		$dataAtualCampanhaCalendario2018 = date("Y-m-d");
		
		if($dataAtualCampanhaCalendario2018 <= '2018-04-20'){
			echo '	<div class="search-overlay-menu open" id="style-6">
						<span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
						<section style="margin-top: 1%;">
							<h2 style="color: rgb(35, 35, 35, 0.9);">Nosso calendário 2018 já está pronto</h2>
							<div class="container">
								<strong style="color: rgb(35, 35, 35, 0.9); font-size: 16px;">
									Pedidos no contato do site e pelo WhatsApp (31)9 8561 6123
								</strong>
								<span style="color: rgb(35, 35, 35, 0.9);">
									<br>
									Todos os animais que estampam nosso projeto já estiveram nas ruas e, hoje, são nossas estrelas do ano de 2018!
									<br>
									Em cada página, uma carinha sorridente e uma ilustração linda de artistas voluntários que doaram seu talento pra ajudar a lembrar como é bonito o ato de ADOTAR!
									<br>
									Todo o valor arrecadado será revertido em prol de cuidados e amparo aos animais carentes que passam pela Brigada Planetária. Ajude-nos a ajudar!
									<br>
									<strong>Valor: R$ 20,00</strong> (com um de nossos voluntários ou na Escola de Imagem) |
									<strong>Valor: R$25,00</strong> (se adquirido via correios (mandamos para todo Brasil))
									<br>
									<strong>#adote | #calendáriobrigadaplanetária2018</strong>
								</span>
								<div class="row container-grid nf-col-4">
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/8.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/5.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/4.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/9.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/3.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/6.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/7.jpg" class="item-container">
										</div>
									</div>
									<div class="nf-item branding coffee spacing">
										<div class="item-box">
											<img alt="1" src="img/calendario/2.jpg" class="item-container">
										</div>
									<span class="search-overlay-close"><button class="btn btn-danger">Fechar</button></span>
									</div>
								</div>
							</div>
						</section>
					</div>';
		}
		/**************************************************************************
					FIM CAMPANHA CALENDÁRIO COM DATA DINÂMICA (HOME)
		**************************************************************************/
		
		/*#######################################################################*/
		/*#######################################################################*/
		
		/**************************************************************************
				INÍCIO CAMPANHA FESTA JUNINA COM DATA DINÂMICA (HOME)
		**************************************************************************/
		$dataAtualCampanhaFestaJunina = date("Y-m-d");
		
		if($dataAtualCampanhaFestaJunina <= '2018-07-14'){
			echo '	<div class="search-overlay-menu open" id="style-6">
						<span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
						<section style="margin-top: 1%;">
							<div class="container">
								<div class="row container-grid nf-col-12">
									<div class="nf-item branding coffee spacing">
										<img alt="Festa Junina 2018" src="img/festa_junina_2018.png" class="item-container" />
										<span class="search-overlay-close"><button class="btn btn-danger">Fechar</button></span>
									</div>
								</div>
							</div>
						</section>
					</div>';
		}
		/**************************************************************************
				FIM CAMPANHA FESTA JUNINA COM DATA DINÂMICA (HOME)
		**************************************************************************/
	?>
</body>
</html>
