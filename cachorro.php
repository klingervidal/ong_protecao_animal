<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Dicas >> Cachorro</title>
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
			<div class="row container-grid nf-col-2" style="background-color: #eda5a5;">
				<div class="nf-item branding coffee spacing" style="width: 70%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #b93a3a; text-align: center; text-transform: uppercase;"><strong>Maneiras de manter seu filhote de cão seguro</strong></div>
						<span style="font-size: 13px; color: #6e2626;">
							<ul>
								<li>Disponibilize brinquedos seguros para cães a fim de manter seu filhote ocupado.</li>
								<li>Utilize lixeiras com tampas em sua casa e em sua garagem.</li>
								<li>Mantenha as bancadas da cozinha limpas e sem alimentos para diminuir a tentação.</li>
								<li>Guarde os produtos químicos e venenos de uso doméstico em um armário trancado.</li>
								<li>Mantenha a tampa do vaso sanitário abaixada para que seu filhote de cão não beba a água e nem caia dentro do vaso.</li>
								<li>Mantenha os fios e cabos elétricos fora da vista ou fixados às paredes.</li>
							</ul>
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 30%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<img src="img/cao/1.png" style="border-radius: 1600px;" />
					</div>
				</div>
			</div>
			<div class="row container-grid nf-col-2" style="background-color: #fce2d8;">
				<div class="nf-item branding coffee spacing" style="width: 70%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #825e4f; text-align: center; text-transform: uppercase;"><strong>Cuidados com a saúde mental do seu cachorro</strong></div>
						<span style="font-size: 13px; color: #825e4f;">
							<ul>
								<li>Passeie com ele pelo menos duas vezes ao dia.</li>
								<li>Aproveite o seu tempo livre e finais de semana para brincar, correr e exercitar bastante o seu animal. Existem vários parques públicos que aceitam a presença de animais.</li>
								<li>Mantenha o cachorro sempre perto da sua família. A interação com humanos é a melhor coisa que podemos fazer pelos nossos peludos.</li>
								<li>Mantenha o treinamento do seu cachorro em dia.</li>
								<li>Ofereça bastante água fresca e mantenha sempre tem um local sombreado para ele tirar uma soneca e abrigar-se do calor.</li>
							</ul>
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 30%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<img src="img/cao/2.png" style="border-radius: 1600px;" />
					</div>
				</div>
			</div>
			<div class="row container-grid nf-col-2" style="background-color: #eda5a5;">
				<div class="nf-item branding coffee spacing" style="width: 70%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #b93a3a; text-align: center; text-transform: uppercase;"><strong>Entenda as mudanças na vida do seu cão idoso</strong></div>
						<span style="font-size: 13px; color: #6e2626;">
							Quanto mais avança a idade, o cachorro vai perdendo aquele
							pique todo de antigamente. Respeite seu ritmo e não force
							quando ele não quiser passear ou brincar. Certamente ele vai
							querer dormir mais tempo do que o habitual e não vai ter
							muita paciência para brincadeiras com crianças e outros filhotes.<br><br>
							
							Vale reforçar: não é a personalidade do cachorro que está
							mudando, mas sim sua disposição. Se ele sempre foi um cão
							dócil e brincalhão, ainda terá o mesmo temperamento, só que
							em um ritmo mais lento.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 30%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<img src="img/cao/3.png" style="border-radius: 1600px;" />
					</div>
				</div>
			</div>
			<div class="row container-grid nf-col-2" style="background-color: #fce2d8;">
				<div class="nf-item branding coffee spacing" style="width: 70%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<div style="color: #825e4f; text-align: center; text-transform: uppercase;"><strong>Cuidados de beleza e higiene e dicas para o banho</strong></div>
						<span style="font-size: 13px; color: #825e4f;">
							Os cães se sujam e não se mantêm naturalmente tão limpos
							quanto gostaríamos para que convivam conosco em nossas
							casas. Como você é o dono, os cuidados de beleza e higiene no
							banho são de sua responsabilidade. Entretanto, há mais cuidados
							para seu cão do que um simples banho. Você ainda tem
							que cuidar das unhas, dentes, olhos e ouvidos. Nesta seção
							trataremos de estratégias para deixar seu totó limpo e todos
							felizes. Também diremos quando é tempo de jogar a toalha e
							procurar ajuda profissional.
						</span>
					</div>
				</div>
				<div class="nf-item branding coffee spacing" style="width: 30%;">
					<div class="item-box" style="background-color: transparent; padding: 20px; min-height: 230px; text-align: justify; font-size: 14px;">
						<img src="img/cao/4.png" style="border-radius: 1600px;" />
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
