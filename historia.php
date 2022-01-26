<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> História</title>
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
				<div class="nf-item branding coffee spacing" style="width: 33%;">
					<div class="item-box" style="background-color: #eda5a5; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #b93a3a; text-align: center;"><strong>VALORES</strong></div>
						<span style="font-size: 13px; color: #6e2626;">
							Para atingir nossos objetivos e nortear nossos trabalhos, nos baseamos no respeito à vida; <b>humana e não humana</b>, através do convívio em harmonia com o meio ambiente!
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 33%;">
					<div class="item-box" style="background-color: #6ea384; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: white; text-align: center;"><strong>VISÃO</strong></div>
						<span style="font-size: 13px; color: white;">
							Ser uma organização geradora de ações para disseminar ideias e projetos que contribuam para inspirar e criar indivíduos protetores do planeta e do universo, para que possamos desfrutar de uma vida saudável e ainda preservar para as futuras gerações.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 33%;">
					<div class="item-box" style="background-color: #d4e5db; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="text-align: center;"><strong>MISSÃO</strong></div>
						<span style="font-size: 13px;">
							Contribuir na conscientização da população em relação ao respeito e cuidados com o meio ambiente. Difundindo conceitos de uso responsável e ético dos recursos naturais e da valorização da vida.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #fce2d8; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center; color: #825e4f;"><strong>COMO SURGIU</strong></div>
						<span style="font-size: 13px; color: #825e4f">
							A necessidade de criar um veículo que pudesse viabilizar a atuação na causa ambiental, do desejo de estar contribuindo de uma forma mais direta e efetiva.
							<br>
							A omissão das autoridades e a impunidade são fatores que possibilitam cada dia mais o aumento da degradação, extinção de animais, desmatamento, poluição das águas, abandono de cães, gatos e cavalos nas ruas das cidades, uso indiscriminado das reservas, etc.
							<br>
							Daí a necessidade de ter um veículo para facilitar a atuação na prática; para contribuir na esfera política e diretamente nas demandas. 						
						</span>
					</div>
				</div>
			</div>
			<div class="row container-grid nf-col-4">
				<div class="nf-item branding coffee spacing" style="width: 100%;">
					<div class="item-box" style="background-color: #d4e5db; padding: 20px; text-align: justify; font-size: 14px;">
						<div style="text-align: center;"><strong>ATUAÇÃO - COM ANIMAIS DOMÉSTICOS</strong></div>
						<span style="font-size: 13px;">
							<ul>
								<li>Animais domesticados ou não, todos têm o direito de viver em um ambiente salubre, confortável, seguro e com amor.  </li>
								<li>Apoiamos quem resgata animais em situação de risco ou quem já tem muitos sob sua responsabilidade a se organizarem para atenderem melhor seus protegidos até o encaminhamento para lares responsáveis.</li>
								<li>Conscientização da população: da importância do controle populacional (esterilização) dos animais domésticos, vacinação, prevenção de doenças e maus tratos. </li>
								<li>Procuramos representar, quando necessário, os animais e outras questões relacionadas ao meio ambiente na esfera política, com participação em movimentos, na elaboração de projetos de lei, audiências públicas, encontros com políticos dentre outros. </li>
								<li>Estimulando e sugerindo o aperfeiçoamento e o cumprimento das legislações vigentes.</li>
							</ul>
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
