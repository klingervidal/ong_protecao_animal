<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Como ajudar</title>
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
			<div class="row container-grid nf-col-4" id="projetos">
			<ul class="container-filter categories-filter">
				<li><a class="categories" href="#projetos" style="font-size: 23px; color: #323232;">Quer ajudar?</a></li>
			</ul>
				<div class="nf-item branding coffee spacing" style="width: 100%; margin-top: 1.5%;">
					<div class="item-box" style="background-color: #6ea384; padding: 20px; text-align: justify; font-size: 14px;">
						<span style="font-size: 13px; color: white;">
							<strong>Você pode nos ajudar:</strong><br>
							<ul>
								<li><a target="_blank" href="formularioVoluntariado.php" style="font-size: 13px; color: white;">Sendo um voluntário nas campanhas de adoção, projetos, administrativos, etc;</a></li>
								<li><a target="_blank" href="formularioVoluntariado.php" style="font-size: 13px; color: white;">Curtindo nossas páginas e compartilhando os casos divulgados;</a></li>
								<li><a target="_blank" href="formularioVoluntariado.php" style="font-size: 13px; color: white;">Doando produtos para os animais;</a></li>
								<li><a target="_blank" href="formularioVoluntariado.php" style="font-size: 13px; color: white;">Doando produtos para serem comercializados;</a></li>
								<li><a target="_blank" href="formularioVoluntariado.php" style="font-size: 13px; color: white;">Dando Lar Temporário;</a></li>
								<li>Doação financeira;
									<ul>
										<li>
											<strong>Caixa Econômica Federal</strong><br>
											<strong>Agência:</strong> 0091<br>
											<strong>Operação:</strong> 013<br>
											<strong>Conta:</strong> 27432-0<br>
											<strong>Favorecido:</strong> Associação Brigada Vida Planetária em Defesa do Meio Ambiente<br>
											<strong>CNPJ:</strong> 15.282.371/0001-80
										</li>
									</ul>
								</li>
								<li ><a href="#" style="font-size: 13px; color: white;" onclick="showAbaDoacao2()">Doação pelo PagSeguro;</a></li>
							</ul>
						</span>
						<footer class="footer pt-0">
							<section class="copyright ptb-15" style="background-color: #6ea384;">
								<div class="col-md-12 col-sm-12">
									<ul class="social">
										<li class="social-icon-twitter2"><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter" style="color: #6ea384;"></i></a></li>
										<li class="social-icon-insta2"><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram" style="color: #6ea384;"></i></a></li>
										<li class="social-icon-face2"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" style="color: #6ea384;"></i></a></li>
									</ul>
								</div>
							</section>
						</footer>
					</div>
				</div>
				
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #b6d1c1; padding: 20px; text-align: justify; font-size: 14px;">
						<span style="font-size: 13px; color: black;">
							<strong>Doação de produtos:</strong><br>
							Se você preferir fazer sua doação pessoalmente na forma de Produtos, entregue sua doação (ração, medicamentos, potes para água e ração, roupas, brinquedos etc) no endereço listado abaixo:
							<br>
							Rua Balduíno Taques, 289, Pampulha, Belo Horizonte/MG
							<br><br>
							Se preferir, por favor nos envie uma mensagem no facebook ou clicando <a target="_blank" href="contato.php" style="color: blue;">aqui</a>, nos informando sobre sua intenção em doar para que possamos enviar instruções.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #e26f6f; padding: 20px; text-align: justify; font-size: 14px;">
						<span style="font-size: 13px; color: white;">
							<strong>
								AGRADECEMOS IMENSAMENTE A TODOS POR QUALQUER QUANTIA DOADA!<br>
								NOSSOS AMIGUINHOS FICARÃO MUITO FELIZES!
							</strong>
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
