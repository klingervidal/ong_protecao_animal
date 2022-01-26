<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Projetos</title>
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
					<li><a class="categories" href="#projetos" style="font-size: 23px; color: #323232;">Projetos direcionados a animais domésticos</a></li>
				</ul>
				<div class="nf-item branding coffee spacing" style="width: 100%; margin-top: 3%;">
					<div class="item-box" style="background-color: #fce2d8; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center; color: #825e4f;"><strong>MUTIRÕES DE CASTRAÇÃO</strong></div>
						<span style="font-size: 13px; color: #825e4f;">
							Proporcionamos mutirões de esterilização (castração) a baixo custo para pessoas que resgatam e tem animais sob sua responsabilidade, que adotaram e não possuem recursos para castração particular e terceiros após avaliação financeira.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #d4e5db; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center;"><strong>CAMPANHAS DE ADOÇÃO</strong></div>
						Realizamos campanhas (feiras) mensais com o objetivo de intermediar o contato entre quem (protetores independentes, Associações, voluntários) resgata animais e quem quer adotar. O encaminhamento destes para adoção é feito através das Campanhas de Adoção (feiras) realizadas em parcerias com Pet Shops, Empresas, Shopping, Praças Públicas, Escolas, Clinicas e outros estabelecimentos da cidade.  As divulgações das Campanhas são feitas através de e-mail, panfletagem, faixas, facebook, blog, instagram e pelo site da Brigada Planetária.
						<br>
						Realizamos também campanhas com animais considerados “Especiais”, são os com alguma deficiência (cegueira, cadeirantes, etc), que fazem uso de medicamentos de uso continuo, idosos, etc.
						<br>
						Os animais são de responsabilidade de quem resgata, antes, durante e depois do evento. Na campanha ficam acomodados nas gaiolas e cercados, também sob a responsabilidade de quem resgatou durante todo o evento.
						<br>
						Geralmente, a equipe da Brigada Planetária é que se responsabiliza e responde por toda a organização da campanha (feira) junto ao estabelecimento. 
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #6ea384; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center; color: white;"><strong>PROTETOR/ACUMULADOR</strong></div>
						<span style="font-size: 13px; color: white;">
							Apoiamos o protetor quando este está sobrecarregado de resgates e que tem dificuldade de buscar adoção. Geralmente atendemos a 1 (um) caso por vez, salvo algumas exceções.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #fce2d8; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="color: #825e4f; text-align: center;"><strong>BRIGADA NA COMUNIDADE</strong></div>
						<span style="font-size: 13px; color: #825e4f;">
							O projeto “Brigada na Comunidade”, tem como objetivo trabalhar os animais (cães e gatos) domiciliados, semi domiciliados e os de rua da Comunidade.
							A primeira está sendo realizada no Bairro São Cristóvão/Santo André (Pedreira Prado Lopes).
							Iniciamos reunindo com representantes da Comunidade e traçamos uma linha de ação e firmamos parceria de apoio. 
							Providenciamos a esterilização (castrações), vermifugação, exames, vacinas e encaminhar para adoção os possíveis e que estiverem aptos.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #d4e5db; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center;"><strong>BRIGADA DE GATINHOS</strong></div>
						<span style="font-size: 13px;">
							Com este projeto atuamos em locais com grande volume de gatos (colônias), atualmente estamos fazendo um trabalho com os gatos do Parque da Lagoa do Nado.
							O objetivo é equilibrar a população de gatos retirando e evitando mais abandono e suas consequências como maus tratos, doenças e agravos à saúde deles e a humana;
							Promover a conscientização através de campanhas educativas da população em geral sobre a importância da guarda responsável e o respeito à vida animal;
							Estruturar e efetuar a prática de esterilização, tratamento quando for o caso, vacinação, vermifugação e adoção dos possíveis e aptos.						
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
