<?php
	require_once('model/css.class.php');
	$css = new Css();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Educacional</title>
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
			<div class="accordion">
				<div class="accordion-section" style="border: solid 1px gray;">
					<h6 class="accordion-title">Cerrado Brasileiro</h6>
					<div class="accordion-content">
						<div>
							<table>
								<tr><td colspan="2"><h3>O Cerrado Brasileiro</h3></td></tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%;" valign="top">
										<p>
											Considerado o segundo maior bioma do país e a savana mais biodiversa do mundo, o Cerrado possui cerca de 12 mil espécies de plantas e mais de 320 mil espécies animais, sendo que em ambos os grupos existe uma grande quantidade de espécies endêmicas, ou seja, que só podem ser encontradas naquela região. Um dos motivos para sua grande biodiversidade e sua importância biológica está no fato que o Cerrado funciona como elo entre outros biomas, estando em contato com a Amazônia, a Mata Atlântica, o Pantanal e a Caatinga, compartilhando espécies com esses biomas em suas transições.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/1.png" title="Seriema - Cariama Cristata | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/1.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Seriema - <i>Cariama Cristata</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											O Cerrado pode ser reconhecido por possuir poucas arvores de baixa estatura, que possuem troncos e galhos retorcidos e folhas grossas e seu terreno é predominado por arbustos e vegetação rasteira, que cresce sobre um solo raso, rochoso, acido e pobre em nutrientes. Esse bioma ocupa uma área de clima tropical, com uma estação seca e outra chuvosa. Apesar de sempre imaginarmos que os biomas possuem uma aparência geral, ainda existem dentro de cada bioma diferentes fitosionomias, que são definidas por fatores como o clima, os recursos hídricos e o tipo de solo, por isso, a vegetação do cerrado engloba formações florestais, savânicas e campestres.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/2.png" title="Área de Cerrado | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/2.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Área de Cerrado
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											Uma característica importante do Cerrado é o fogo, que, apesar de muitas vezes ser causado por interferência humana e causar danos, é na verdade um fator natural e importante desse bioma, sendo responsável pela germinação de sementes, que precisam do calor do fogo para completarem o seu ciclo. Esse fogo pode é causado por fatores naturais, que vão desde raios ate o atrito do pelo de animais com a mata seca. Apesar de parecer agressivo, o fogo não afeta o Cerrado como afetaria outros biomas, já que suas plantas e seus animais são adaptados e se recuperam rapidamente dos danos causados.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/3.png" title="Paepalanthus Speciosus | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/3.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Paepalanthus Speciosus<br>
															Sempre Viva – Possui alta resistência a queimadas.
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											Como podemos ver no mapa abaixo, o Cerrado ocupa a maior parte de importantes estados brasileiros, sendo predominante em alguns deles. Suas características permitem um grande uso, desde a exploração de sua fauna e flora e de seus recursos hídricos, como a utilização para agricultura e pecuária.  Algumas técnicas agropecuárias permitem a correção da acidez do solo e da falta de nutrientes do mesmo, o que torna possível o agronegócio, o que apesar de ser bom para suprir a demanda por alimentos, causou o desmatamento de grande parte deste bioma. Além disso, parte do Cerrado foi também destruído pela ocupação humana, que transformou suas matas nativas em cidades.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/4.png" title="Representação da área ocupada pelo Cerrado no Brasil | Foto: Cerratinga">
												<img class="item-container" src="img/educacional/4.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Representação da área ocupada pelo Cerrado no Brasil
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Fonte: </strong>Cerratinga</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											Com todo esse impacto, o cerrado se tornou um dos biomas mais ameaçados do mundo, tendo aproximadamente metade de seu território desmatado e muitas espécies animais e vegetais ameaçadas de extinção. Estima-se que pelo menos 137 espécies de animais nativas do Cerrado encontram-se ameaçadas de extinção, como a arara-azul, a onça-pintada, o tamanduá-bandeira e o lobo-guará.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/5.png" title="Arara-Azul - Anodorhynchus Hyacinthinus | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/5.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															<strong>Arara-Azul</strong> – <i>Anodorhynchus Hyacinthinus</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											A cada metro perdido em um ecossistema tão rico como o Cerrado, perdemos mais do que apenas a natureza, já que nesse bioma há diversas possibilidades do uso sustentável de recursos naturais, como, por exemplo, a grande quantidade de frutos nativos e ate mesmo plantas medicinais, como a famosa arnica, além daquelas que talvez ainda não tenham sido reveladas. Alem do uso do Cerrado, devemos considerar as espécies que dependem desse ambiente para sobreviver e das quais o próprio bioma depende para se manter estável, já que, como todo ecossistema, o equilíbrio natural entre todas as espécies é o que as mantém vivas e saudáveis, sendo que toda perda causa um dano irreparável.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/6.png" title="Onça Pintada - Panthera Onca | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/6.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															<strong>Onça Pintada</strong> – <i>Panthera Onca</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr><td colspan="2" style="text-align: right;"><strong>Texto: </strong>Anna Laura Vargas da Cruz – CrBio: 80390/04</td></tr>
								<tr>
									<td colspan="2" style="text-align: right;"><strong>Fontes: </strong>
										<a target="_blank" href="www.mma.gov.br">Ministério do Meio Ambiente</a> | 
										<a target="_blank" href="www.cerratinga.org.br">Cerratinga</a>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="accordion-section" style="border: solid 1px gray;">
					<h6 class="accordion-title">Doméstico, Silvestre ou Exótico?</h6>
					<div class="accordion-content">
						<div>
							<table>
								<tr><td colspan="3"><h3>QUAL A DIFERENÇA ENTRE OS ANIMAIS DOMÉSTICO, SILVESTRE E EXÓTICO?</h3></td></tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/7.png" title="Cão - Animal doméstico | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/7.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Cão - <i>Animal doméstico</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/8.png" title="Chimpanzé - Animal exótico | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/8.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Chimpanzé - <i>Animal exótico</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/9.png" title="Mico Estrela - Animal silvestre | Foto: Anna Vargas">
												<img class="item-container" src="img/educacional/9.png" alt="1" />
												<div class="item-mask">
													<div class="item-caption">
														<p class="white">
															Mico Estrela - <i>Animal silvestre</i>
														</p>
													</div>
												</div>
											</a>
										</div>	
										<div style="text-align: right;"><strong>Foto: </strong>Anna Vargas</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											Quem nunca conheceu alguém que tivesse um papagaio de estimação e ficou morrendo de vontade de ter um também? Isso é muito comum, mas o que quase ninguém pensa é que nem sempre esse papagaio poderia ser criado como um pet.<br><br>
											
											Existem três tipos de animais de estimação: os domésticos, os silvestres e os exóticos. Você sabe qual é a diferença entre eles e qual deles você pode ter em casa?<br><br>
											
											Se você sonha com um animal de estimação como um cachorro ou um gato, então pode ficar tranquilo. Estes estão liberados, desde que você seja responsável e o trate muito bem! São considerados animais domésticos todos aqueles que passaram anos convivendo e se adaptando aos seres humanos, se tornando, inclusive, dependentes de seus donos e, muitas vezes, apresentando características físicas e comportamentais muito diferentes de seus ancestrais. Alguns animais domésticos são considerados pets, sendo que, os mais comuns são os cães e gatos. Outros são usados para a produção, como vacas, porcos e galinhas.<br><br>
											
											Já um silvestre nativo é aquele que pertence à fauna brasileira, ou seja, vivem nas nossas matas, nossos rios e oceanos. O papagaio verdadeiro, a arara Canindé e o mico estrela são alguns famosos integrantes desse grupo enorme e diverso. Basicamente, quase todos os animais que vemos vivendo livres na natureza – e isso inclui alguns nas cidades – são os silvestres. Assim como eles, os exóticos possuem vida selvagem e são integrados a um ecossistema natural. Muitos acreditam que a palavra “exótico” serve para definir aqueles animais diferentes ou estranhos, mas, na verdade, um exótico é aquele que pertence a fauna de outro país. São muitos, mas, para exemplificar, podemos citar os leões, os tigres, os ferrets e as cacatuas.<br><br>
											
											Um animal doméstico pode ter origem silvestre ou exótica. O que o diferencia dos outros é mesmo a domesticação pela qual passou, o que o afastou da sua vida natural e o tornou ideal para o convívio humano, já que os domésticos precisam de nós tanto quanto precisamos deles. Não basta tirar um animal dos seus pais ainda jovem e criá-lo no nosso convívio, isso não o torna domesticado. A domesticação a qual nos referimos levou muito tempo – as vezes milhares de anos – de uma convivência estreita entre estes e os humanos. Este animal tanto tempo afastado de sua relação original com a natureza, transformando e adaptando seu estilo de vida para a convivência humana, que a sua reintegração à natureza se torna quase impossível. Geralmente prejudicial ao meio ambiente, já que este não está mais adaptado a presença deste animal.<br><br>
											
											Para quem tem dúvida sobre os animais pertencentes à fauna, pode parecer muito difícil diferenciar os domesticados dos selvagens, mas há uma dica simples, os animais domésticos tem comercialização liberada, enquanto os silvestres  e exóticos tem sua posse e comercialização controlada, seja para servir de animal de estimação ou para outros fins. Isso significa que ninguém pode ter um desses animais sem a devida autorização dos órgãos ambientais, que permitem, sob alguns critérios, a posse de algumas espécies e proíbem, sob qualquer condição, a aquisição de algumas outras, dependendo do status e do risco que aquela espécie representa.<br><br>
											
											Agora, conhecendo e entendendo melhor a diferença entre esses animais fica ainda mais fácil escolher o animal de estimação ideal para você!
										</p>
									</td>
								</tr>
								<tr><td colspan="3" style="text-align: right;"><strong>Texto: </strong>Anna Laura Vargas da Cruz – CrBio: 80390/04</td></tr>
							</table>
						</div>
					</div>
				</div>
				<div class="accordion-section" style="border: solid 1px gray;">
					<h6 class="accordion-title">Medicamento para leishmaniose é proibido no Brasil</h6>
					<div class="accordion-content">
						<div>
							<table>
								<tr><td colspan="2"><h4>Enquanto na Europa os cães infectados são cuidados com um remédio específico, por aqui, os donos de animais de estimação são proibidos de importar o produto, e acabam com o bichinho sacrificado</h4></td></tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%;" colspan="2" valign="top">
										<p>
											Apesar de o tratamento para a leishmaniose visceral canina ser permitido na Europa e em vários outros país do mundo, no Brasil, a discussão é antiga, e provoca polêmicas. Segundo a liminar Nº 677, expedida em outubro de 2013, pelo Supremo Tribunal Federal, os proprietários de cães infectados pela doença têm o direito de tratá-los. No entanto, uma portaria do Ministério da Agricultura, Pecuária e Abastecimento (MAPA), diz que o procedimento não pode ser feito com medicamento humano, nem com produto importado. Essas são as únicas formas de cuidar do animal doente.  “Esses medicamentos não estão disponíveis no país. E não podem ser importados por não serem registrados no MAPA. Portanto, a portaria é totalmente contraditória”, explica o advogado Arildo Carneiro Junior, da ACJ dvocacia e Consultoria Jurídica.<br><br>
											
											Saiba mais…<br>
											
											<ul>
												<li><a target="_blank" href="http://sites.uai.com.br/app/noticia/encontrobh/atualidades/2014/04/22/noticia_atualidades,148394/projeto-de-lei-quer-proibir-animais-em-jaulas-irregulares-no-comercio.shtml">Projeto de lei quer proibir animais em jaulas irregulares no comércio</a></li>
												<li><a target="_blank" href="http://sites.uai.com.br/app/noticia/encontrobh/atualidades/2014/01/30/noticia_atualidades,147387/tratamento-com-celulas-tronco-ja-e-realidade-para-animais-de-estimacao.shtml">Tratamento com células-tronco já é realidade para animais de estimação</a></li>
												<li><a target="_blank" href="http://sites.uai.com.br/app/noticia/encontrobh/atualidades/2014/01/29/noticia_atualidades,147373/ministerio-publico-de-minas-gerais-inicia-campanha-educativa-de-defesa.shtml">Ministério Público de Minas inicia campanha em defesa dos animais</a></li>
												<li><a target="_blank" href="http://sites.uai.com.br/app/noticia/encontrobh/atualidades/2013/11/25/noticia_atualidades,146541/viajar-com-animais-fica-mais-seguro.shtml">Viajar com animais fica mais seguro</a></li>
												<li><a target="_blank" href="http://sites.uai.com.br/app/noticia/encontrobh/atualidades/2013/11/12/noticia_atualidades,146405/voce-sabia-que-seu-animalzinho-tambem-tem-alergia.shtml">Você sabia que seu animalzinho pode ter alergia?</a></li>
											</ul><br><br>
											
											Diante de tantas controvérsias, em janeiro de 2013, o Tribunal Regional Federal da 3ª Região negou a vigência da portaria do MAPA, em resposta a uma ação movida pela ONG Abrigo dos Bichos, do Mato Grosso do Sul. “Com esse entendimento do tribunal, o tratamento pode ser feito através de autorização judicial, já que há precedentes”, explica o advogado. Segundo ele, a maior conquista, no entanto, é que os animais contaminados não podem mais ser recolhidos e sacrificados pelos centros de controle de zoonoses das cidades. “Desde que o proprietário tenha interesse em tratar o animal, ele tem o direito de buscar todos os recursos para fazê-lo”.<br>
											O que muitos desconhecem é que os verdadeiros vilões da doença, que afeta tanto humanos quanto animais, não são os cães, mas sim, o mosquito-palha. De difícil combate, ele se reproduz em locais onde existe abundância de material orgânico, como folhas, frutos, fezes de animais, entulhos e lixo. Além disso, ele é hemofágico, e se alimenta do sangue de humanos e animais, incluindo galinha, porco e cavalo. A doença também é transmitida de humano para humano. Para isto, basta que o mosquito infecte alguém e, em seguida, pique outra pessoa.
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/10.png">
												<img class="item-container" src="img/educacional/10.png" alt="1" />
											</a>
										</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/11.png">
												<img class="item-container" src="img/educacional/11.png" alt="1" />
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" colspan="2" valign="top">
										<p>
											Proibido no Brasil, o medicamento Glucantime, produzido na França, traz impresso em seu verso a informação de que é destinado ao tratamento de leishmaniose canina.<br><br>

											No Brasil, a grande discussão, no entanto, gira em torno do sacrífico dos cães infectados e não exatamente do combate efetivo ao vetor. “Os cães são o reservatório para que a infecção se perpetue e, mesmo após o tratamento, continuam sendo fonte de transmissão”, diz o médico epidemiologista Unaí Tupinambás. Em contrapartida, a eutanásia é contestada por especialistas que garantem que a matança de cães não diminui o índice de contágio da leishmaniose. E afirmam que, dos 88 países do mundo onde a doença é endêmica, o Brasil é o único que utiliza a morte dos cães como instrumento de saúde pública.
											“A leishmaniose visceral tem controle, tem tratamento eficaz e, portanto, não é necessário fazer a eutanásia do animal, exceto em casos específicos”, explica o veterinário Leonardo Maciel, da clínica Animal Center. Precursor do tratamento da leishmaniose visceral canina em Belo Horizonte, há 20 anos o médico estuda a enfermidade e garante que a campanha feita pelo poder público incentivando o sacrifício dos cães contaminados, como forma de controlar a endemia, surtiu efeito contrário. “O tiro saiu pela culatra. A campanha foi totalmente ineficaz e provocou pânico na população. Hoje, nossa cidade é uma das que mais sofrem com a doença no Brasil. Isso porque inúmeros animais foram abandonados nas ruas, sendo contaminados e se tornando transmissores, e, ao mesmo tempo, se reproduzindo”.
											Como o vetor da doença permanece presente nos ambientes não dedetizados, os novos cães adquiridos para suprir a falta dos que foram perdidos acabam sendo contaminados, e, consequentemente sacrificados ou abandonados. “Definitivamente, o problema da leishmaniose não é o cão, e sim o mosquito”, afirma Maciel.
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											A empresária Márcia Resende Carvalho enfrentou as autoridades para tratar um animal, que viveu mais tempo que o previsto.<br><br>

											Enquanto a importação de medicamentos veterinários como o Glucantime – indicado para o tratamento da leishmaniose canina – não é liberada, os proprietários seguem fazendo de tudo para salvar seus animais de estimação.  “A doença é um tabu que precisa ser quebrado. Se é para combater algo, vamos combater sua origem, que é o mosquito-palha”, diz a empresária Márcia Resende Carvalho. Em 2003, a empresária comprou uma briga com o poder público para poder tratar o poodle Nicolau. “Lutei muito para que ele não fosse sacrificado, e consegui. Ele viveu bem por muitos anos até falecer por outros motivos. Temos o direito de tratar nossos animais”.
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/12.png">
												<img class="item-container" src="img/educacional/12.png" alt="1" />
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											<strong>Fique por dentro</strong><br><br>

											<ul>
												<li>
													<strong>Leishmaniose</strong> – também conhecida como calazar, a contaminação em seres humanos e animais ocorre através da      picada da fêmea do mosquito Lutzomyialongipalpis, mais conhecido como mosquito-palha ou birigui.
												</li>
												<li>
													<strong>Sintomas no ser humano</strong> – febre prolongada, perda de peso, falta de apetite e aumento do fígado e baço. Se não tratada a tempo, a leishmaniose visceral tem alto índice de mortalidade em pacientes imunodeficientes portadores de doenças crônicas.
												</li>
													<strong>Sintomas no cão – lesões de pele, perda de peso, descamações, crescimento exagerado das unhas e dificuldade de locomoção.  No estágio avançado, o mal atinge fígado, baço e rins, levando o animal ao óbito.
												</li>
											</ul>
										</p>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" valign="top">
										<p>
											<strong>Prevenção</strong><br><br>

											<ul>
												<li>
													Fazer a retirada de qualquer tipo de material orgânico como folhas, fezes de animais, entulhos e lixo, onde o mosquito possa se reproduzir. A borrifação química é fundamental em áreas endêmicas.
												</li>
												<li>
													Uso de repelentes, coleira própria contra a leishmaniose, vacina específica, higienização do animal e do ambiente.
												</li>
													A vacina Leishmune, aliada a outros métodos preventivos, reduz a chance de contaminação do animal e enfraquece o protozoário em cães já contaminados, diminuindo a chance de transmissão.
												</li>
											</ul>
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 50%; padding-top: 1.5%;" colspan="2" valign="top">
										<p>
											<strong>Tratamento</strong><br><br>
											
											O custo médio do tratamento é de R$ 1 mil, variando de acordo com o peso do animal. Inclui sessões de quimioterapia, feita por meio de medicação venal aplicada através de soro, e medicação oral. Exige o comprometimento do proprietário em seguir as orientações veterinárias à risca, com realização de checape periódico e manutenção de alimentação específica com baixo teor de proteína.
										</p>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: right;"><br><br><strong>Fontes: </strong>
										Especialistas consultados | Matéria da revista Encontro | Daniela Costa Publicação: 08/05/2014 18:54 - Atualização:09/05/2014 10:53
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="accordion-section" style="border: solid 1px gray;">
					<h6 class="accordion-title">Cuidados com seu cão</h6>
					<div class="accordion-content">
						<div>
							<table>
								<tr><td colspan="3"><h3>CUIDADOS COM O SEU CÃO – Necessários e imprescindíveis para sua saúde</h3></td></tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/13.png">
												<img class="item-container" src="img/educacional/13.png" alt="1" />
											</a>
										</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/14.png">
												<img class="item-container" src="img/educacional/14.png" alt="1" />
											</a>
										</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/15.png">
												<img class="item-container" src="img/educacional/15.png" alt="1" />
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											<b>1. LEISHMANIOSE</b>
											<br><br>
											Partindo do princípio que a prevenção é o melhor remédio e apesar de não termos dados de pesquisas que
											confirmem a eficácia de todos os itens descritos abaixo, as evidências do uso demonstram que essas ações
											associadas protegem, e muito, nossos peludos desta terrível e eminente doença.
											<br><br>
											Ressaltamos que não temos nenhum interesse ou incentivo para divulgação de marcas, mas a situação
											endêmica desta doença nos faz divulgar os métodos de proteção que tem sido praticados por veterinários sérios e
											atualizados, e que se preocupam em dar opções aos cães, ao contrário de muitos que tem a oferecer
											uma única opção, o Sacrifício, medida que apesar de ser a mais comum é sem dúvida a menos eficaz.
											<br><br>
											Não é o cão que transmite a doença para outros cães e o homem: É O MOSQUITO!
											<br><br>
											Sem o mosquito não haveria o ciclo de contaminação!
											As ações de combate verdadeiro são: Combate ao mosquito e ações de prevenção para que o cão NÃO seja contaminado.
											<br><br>
											
											<b>1.1. Ambiente limpo</b>
											<br><br>
											Deixar o quintal limpo, principalmente ao redor da casa e do local onde cão fica, evita que os mosquitos fiquem
											por perto.
											Combate direto ao mosquito: O combate ao mosquito é realizado através do uso de produtos inseticidas no
											ambiente (Produtos a base de citronela) e repelentes nos cães (Coleiras e ampolas).
											O mosquito gosta de matéria orgânica (lixo, folhagem úmida, restos de comida ou jardim com matos ou plantas
											sem poda). Ele prefere lugares escuros e é mais ativo ao entardecer e à noite.
											<br><br>
											
											<b>1.2. Coleira Scalibor</b>
											<br><br>
											A coleira Scalibor® é o primeiro produto que consegue proteger o seu cão contra flebótomos (mosquitos que
											transmite leishmaniose), moscas e carrapatos com alta eficácia. Imediatamente após a sua colocação no pescoço
											do cão, começa a liberação do seu princípio ativo, a Deltametrina. Este se distribui de forma rápida e uniforme
											pela pele do cão até atingir todo o corpo. Ao contrário do que ocorre com outras coleiras tradicionais, a liberação
											do princípio ativo da coleira Scalibor® não se faz por evaporação, evitando-se assim perdas do princípio ativo e
											<br><br>
											Tempo de proteção: A coleira foi desenvolvida para promover uma lenta liberação do princípio ativo. Ao se colocar
											a coleira, nas primeiras 2-3 semanas, ocorrerá uma lenta diminuição
											odores desagradáveis, além, é claro, de conferir maior eficácia.
											<br><br>
											Resistente à água: A coleira Scalibor é igualmente eficaz quando o cão está molhado. Assim, não é necessário
											retirar a coleira quando o seu cão anda na chuva ou brinca na água.
											das infestações, com aumento da eficácia após esse período, auxiliando
											no controle de carrapatos e pulgas e prevenindo contra moscas
											e mosquitos por até 4 meses.
											<br><br>
											Ao colocar a coleira Scalibor® no cão, deixe um espaço (folga) de 2 dedos entre o pescoço e a coleira, conforme figura. Para uma máxima eficácia, limpar a coleira com ou pano úmido, pelo menos uma vez ao mês.
											<br><br>
											<b>Dica:</b> Em cães pequenos ou médios pode-se partir ao meio a apresentação de 65 cm e utilizar cada metade
											de uma vez, o que promove economia, uma vez que com uma coleira, você pode proteger o cão por 8 meses
											(uma metade é utilizada 4 meses e outra metade mais 4 meses).
											Onde Comprar? Pets Shop´s, Lojas de Produtos para fazendas ou Drogarias que tem produtos veterinários.
											<br><br>
											A coleira Scalibor® possui duas apresentações:
											<br>Para cães grandes: 65 cm
											<br>Para cães pequenos: 48 cm
											<br><br>
											*Normalmente o valor das duas apresentações é o mesmo, em média R$50,00.
											<br><br>
											<b>1.3. Pulvex Pour-On</b>
											<br><br>
											Foi utilizado em ensaios clínicos que demonstraram ação repelente contra o flebótomos (mosquitos que
											transmite leishmaniose). Ele deve ser usado exclusivamente em cães, é venenoso para gatos. É uma ampola que
											após ser agitada deve ser aplicada no dorso do cão uma vez por mês, tomando-se o cuidado de afastar o pelo.
											Se o cão tiver menos de 15 kg pode ser aplicados 1 ampola. Cães mais de 15 Kg devem ser usados duas
											ampolas: uma no dorso e uma na base da cauda. Cães de raças gigantes, acima de 50Kg, podem receber
											três ampolas: no dorso, no meio das costas e na base da cauda. Da mesma forma que cães de raças muito
											pequenas, abaixo dos 3Kg, podem ser tratados apenas com meia ampola .
											<br><br>
											Onde Comprar e preço médio? Pets Shop, Lojas de Produtos para fazendas ou Drogarias que tem produtos
											veterinários. O valor médio é R$ 12,00 cada ampola.
											<br><br>
											*Existem outras marcas que repelentes, mas esta marca é que tem o melhor custo benefício, por isso foi a divulgada.
											<br><br>
											
											<b>1.4. Planta Citronela</b>
											<br><br>
											A citronela é um tipo de arbusto bastante reconhecido por seus efeitos repelentes, principalmente
											contra mosquitos (que transmitem dengue, LEISHMANIOSE e outras doenças) e borrachudos.
											Ela tem formato de touceira densa, com folhas longas, e bordas levemente cortantes.
											É visualmente muito parecida com o capim-limão. O aroma da citronela é bem forte, e contém
											grandes quantidades de óleo essencial Citronela, que é o principal produto ativo de alguns repelentes.
											Pode ser plantada em vasos e jardineiras ou canteiros. O cultivo deve ser a pleno sol, em solo fértil, bem drenável
											e enriquecido com matéria orgânica para uma boa produção. Seu crescimento é bastante rápido. Multiplica-se
											facilmente pela divisão das touceiras, dessa forma ao comprar algumas mudas, você pode distribuir a outras
											Coloque as plantas ao redor da casa e tenha sempre um vaso próximo ao local que o cão dorme e também.
											pessoas que possuem animais, ajudando na proteção de vários peludos.
											<br><br>
											
											<b>1.5. Vacinação</b>
											<br><br>
											Atualmente, já existem vacinas disponíveis que protege os cães, evitando o desenvolvimento da doença.
											O programa vacinal deve ser associado às demais medidas de controle da enfermidade descritas acima. O programa
											indicado é o uso da vacina em cães sadios e soronegativos para Leishmaniose Visceral Canina, a partir dos 4 meses
											O protocolo completo de vacinação é composto por três doses, respeitando um intervalo de 21 dias entre as
											de idade.
											aplicações. Vários estudos realizados em cães de áreas de grande
											incidência da doença demonstraram que a vacina confere proteção
											de 92 a 95%. A revacinação deverá ser feita um ano após a primeira dose
											e repetida anualmente, proporcionando a manutenção da resposta
											imune, principalmente celular.
											<br><br>

											<b>1.6. Cuidados com o banho</b>
											<br><br>
											Banhos com sabão muitos freqüentes diminuem a eficácia dos produtos, pois eles dependem da oleosidade
											da pele do cão para funcionarem. A diminuição dos banhos ou substituição por escovações, ou ainda o uso de
											menos sabão é recomendado.
											<br><br>

											<b>1.7. Passeio sob a luz do sol</b>
											<br><br>
											Evitar passeios entre 17 e 7 horas, período de mais intensa atividade dos Flebótomos, minimiza as chances de seu
											protegido ter contato com o vetor da doença.
											<br><br>
											
											<b>Fonte informações técnicas:</b><br>
											<a target="_blank" href="http://www.scalibor.com.br">www.scalibor.com.br</a> | 
											<a target="_blank" href="http://www.proanima.org.br">www.proanima.org.br</a> | 
											<a target="_blank" href="http://www.revistavigor.com.br">www.revistavigor.com.br</a> | 
											<a target="_blank" href="http://www.leishmune.com.br">www.leishmune.com.br</a> | 
											<a target="_blank" href="http://www.proanima.org.br">www.proanima.org.br</a> | 
											<a target="_blank" href="http://www.petcare.com.br">www.petcare.com.br</a>
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											<b>2. VACINAÇÕES</b>
											<br><br>
											
											Nossa recomendação é que o protocolo de vacinação para filhotes de cães sadios tenha início em 6 a 8 semanas de idade.
											<br><br>
											
											<b>2.1. Primeiras vacinas</b>
											<br><br>
											<b>Raiva (Dose única, repetição anual):</b> Prevenção da Raiva, deve ser dada após 4 meses de idade.
											
											<br><br>
											<b>V8 ou V10:</b> (Três doses com intervalo de 3 a 4 semanas, repetição de uma dose anualmente): Auxiliam na
											prevenção de Cinomose, Hepatite Infecciosa Canina, Adenovírus Canino Tipo 2, Coronavírus Canino, Parainfluenza
											Canina, Parvovírus Canino e Leptospirose canina.
											
											<br><br>
											Em média o valor total deste primeiro esquema de vacinação em clínicas veterinárias é de R$ 120,00.
											
											<br><br>
											A resposta adequada à vacinação é diretamente ligada à competência imunológica de cada cão. Por isso antes
											de iniciar o esquema de vacinação, principalmente em filhotes, o veterinário deve fazer uma avaliação.
											
											<br><br>
											Depois de constatado estar em boa saúde, poderá recomendar um exame de fezes (parasitológico), e após o resultado
											de exames, iniciar o protocolo de vacinação, que se estenderá pelos próximos três meses de vida.											
											
											<br><br>
											<b>2.2. Vacinas adicionais mais recomendadas</b>
											<br><br>
											Devem ser indicadas por um veterinário após avaliação.
											Vacina contra a "gripe canina": (Adenovírus Canino Tipo 2, Parainfluenza Canina e Bordetella bronchiseptica – uma dose).<br>
											Vacina contra giardíase (duas doses).<br>
											Vacina contra leishmaniose: Explicação completa no item 1.5.
											
											<br><br>
											<b>2.3. Animais adultos onde não se tem certeza da vacinação</b>
											<br><br>
											Nossa recomendação é que seguir o mesmo protocolo de filhotes, pois não se tem certeza se o cão recebeu as dosagens necessárias.
											
											<br><br>
											Seguir então o mesmo esquema:<br>
											Raiva (Dose única, repetição anual) + V8 ou V10: (Três doses com intervalo de
											3 a 4 semanas, repetição de uma dose anualmente).
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											<b>3. VERMIFUGAÇÕES</b>
											<br><br>
											
											Seguir rigorosamente as instruções do médico veterinário, vermifugando ao mesmo tempo todos os animais que convivem no mesmo ambiente. Lembrar que para cada idade existe um programa básico de vermifugação.

											<br><br>
											<b>Filhotes:</b> Durante a amamentação e após o desmame.<br>

											<b>Jovens:</b> A cada 3 meses.<br>

											<b>Adultos:</b> Continuamente a cada 3 ou 6 meses.<br>

											<b>Fêmeas em reprodução:</b> Antes do acasalamento e 10 dias antes da data provável do parto.
											
											<br><br>
											<b>Fonte informações técnicas:</b><br>
											<a target="_blank" href="http://www.petcare.com.br">http://www.petcare.com.br</a>
										</p>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											<b>3. CASTRAÇÃO </b>
											<br><br>
											
											Algumas pessoas se ressentem ou até se escandalizam quando os veterinários aconselham que castrem seus cães, mas pense um pouco:

											<br><br>
											– Você já parou para olhar a quantidade de cães de rua que a cidade que você mora possui?
											<br>
											– Você já parou para pensar na quantidade de doenças (as chamadas zoonoses) que eles podem abrigar e posteriormente transmitir aos seres humanos?

											<br><br>
											O problema real é o aumento desta população que é determinado não somente pela reprodução destes cães de rua, mas também pelo acasalamento indesejado dos que possuem donos.

											<br><br>
											Alguns "proprietários" não tem conhecimento e nem condição de lidar com as constantes proles (ninhadas) nascidas em sua casa, e muitos destes animais acabam indo parar nas ruas.
											
											<br><br>
											Segundo a WSPA (Sociedade Mundial de Proteção Animal), uma única cadela, com uma vida reprodutiva de
											6 anos, pode gerar 100 (cem) descendentes, enquanto uma gata em apenas 2 anos pode deixar 200(duzentos)
											descendentes.
											
											<br><br>
											São números realmente assustadores e desconhecidos pela maioria das pessoas. Mas estes números provam que
											tentarmos reduzir a população com abandono, apreensão e eutanásia é, no mínimo, falho, além de ser um crime.

											<br><br>
											A solução real para estes problemas seria a castração: É bom para saúde do cão e evita o aumento na
											população de animais, reduzindo as chances de serem abandonados ou negligenciados.
											
											<br><br>
											A CASTRAÇÃO É UMA OPERAÇÃO REALIZADA SOB ANESTESIA (O CÃO NÃO SENTE NENHUM DESCONFORTO OU DOR).<br>
											É UM PROCEDIMENTO SEGURO E SEM COMPLICAÇÕES NA MAIORIA DOS CASOS. OS ANIMAIS, GERALMENTE, SE
											RECUPERAM DA CASTRAÇÃO EM APROXIMADAMENTE UMA SEMANA, COM DESCONFORTO MÍNIMO.
											
											<br><br>
											<b>4.1. Animais castrados são mais saudáveis</b>
											
											<br><br>
											Tanto machos como fêmeas castrados têm menos chances de desenvolver problemas de tumores e infecções nos
											órgãos reprodutivos (testículos, mama, útero, próstata).
											
											<br><br>
											<b>4.2. Passeios controlados</b>

											<br><br>
											Um macho que sente por perto uma fêmea no cio pode demolir portas, saltar cercas e ficar vagando pelo o bairro a
											procura da cadela. Cães castrados fogem menos e, com isso, levam uma vida mais segura, sem os perigos da
											vida na rua.<br>
											Diminui também as brigas com outros cães, risco de danos, infecções e atropelamentos.
											
											<br><br>
											<b>4.3. Mudança de comportamento</b>
											
											<br><br>
											Cães castrados são mais contentes e comportados. A castração não transformará seu cachorro em um “frouxo”,
											e ele nunca saberá o que está perdendo, mesmo que já tenha cruzado alguma vez. Ele não sabe bem o que
											é prazer, tem vontade sim, mas por um simples mecanismo hormonal; logo se tirarmos seus testículos, este
											estímulo hormonal desaparece, e ele não sente mais vontade de cruzar.
											
											<br><br>
											É diferente do caso do ser humano, que se fosse castrado, sentiria a vontade, mas não conseguiria; no caso do
											animal, esta vontade não existe após a castração. Alguns proprietários acham que por ser um cão de guarda ele
											não deve ser castrado. Mas a castração não afeta os instintos naturais de um cachorro para proteger sua casa e
											família.
											
											<br><br>
											<b>4.4. Melhor convivência em casa</b>
											
											<br><br>
											A castração resulta em uma fêmea mais limpa em casa, pois não existe o incômodo o sangramento que ocorre no
											cio (aproximadamente dez dias, duas vezes ao ano).

											<br><br>
											Castração precoce também ajudará ao treinamento para urinar no local certo, diminuindo a incidência de urina "nos cantinhos" que o macho faz por razões territoriais.
											
											<br><br>
											LEMBRE-SE: "CASTRAÇÃO NÃO DOI, ABANDONO SIM"

											<br><br>
											ESPERAMOS QUE VOCÊ SEJA UM MULTIPLICADOR DE TODO ESSE
											CONHECIMENTO. SEJA UM AGENTE ATIVO DA CONSCIENTIZAÇÃO.<br>
											AJUDE-NOS A CRIAR UM MUNDO COM HARMONIA ENTRE SERES
											HUMANOS E ANIMAIS.
											
											<br><br>
											<b>Fonte informações técnicas:</b><br>
											<a target="_blank" href="http://www.saudeanimal.com.br/artigo83.htm">http://www.saudeanimal.com.br/artigo83.htm</a>
										</p>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="accordion-section" style="border: solid 1px gray;">
					<h6 class="accordion-title">Abandono e maus tratos é crime</h6>
					<div class="accordion-content">
						<div>
							<table>
								<tr><td colspan="3"><h3>Abandono e maus tratos é crime</h3></td></tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/16.png">
												<img class="item-container" src="img/educacional/16.png" alt="1" />
											</a>
										</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/17.png">
												<img class="item-container" src="img/educacional/17.png" alt="1" />
											</a>
										</div>
									</td>
									<td style="padding-left: 1%; padding-right: 1%; width: 33%;" valign="top" align="center">
										<div class="item-box">
											<a class="cbox-gallary1" href="img/educacional/18.png">
												<img class="item-container" src="img/educacional/18.png" alt="1" />
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding-left: 1%; padding-right: 1%; width: 100%; padding-top: 1.5%;" valign="top" colspan="3">
										<p>
											Caso você veja ou saiba de maus-tratos cometidos contra qualquer tipo de animal, não pense duas vezes, vá à Delegacia de Polícia mais próxima para lavrar Boletim de Ocorrência. Abandono e maus tratos à animais é crime. A denúncia de maus-tratos é legitimada pelo Art. 32, da Lei Federal nº. 9.605 de 1998 (Lei de Crimes Ambientais) e o Art. 164 do Código Penal, prevê o crime de abandono de animais para aqueles que introduzirem ou deixarem animais em propriedade alheia, sem consentimento de quem de direito, desde que o fato resulte prejuízo:
											
											<br><br>
											A pena prevista pelo <b>Art. 32 da Lei de Crime Ambientais</b> é de detenção de 3 meses a 1 ano e multa.
											<br>A pena prevista pelo <b>Art. 164 do Código Penal</b> é de detenção, de 15 (quinze) dias a 6 (seis) meses, ou multa.
											
											<br><br>
											É importante levar com você uma cópia do número da Lei (no caso, a 9.605/98) e do Art. 32 porque, em geral, as autoridades policiais nem tem conhecimento dessa lei. Leve também o Art. 319 do Código Penal, caso a autoridade se recuse a abrir o Boletim de Ocorrência. Afinal de contas estamos no Brasil, e se os próprios cidadãos deste País sofrem com o descaso de muitas autoridades, imagine os animais!
											
											<br><br>
											<b><i>Texto da Lei</i></b>
											
											<br><br>
											<b>Artigo 32 da Lei Federal nº. 9.605/98</b>

											<br><br>
											É considerado crime praticar ato de abuso, maus-tratos, ferir ou mutilar animais silvestres, doméstico ou domesticados, nativos ou exóticos.
											<br><br>
											Pena - Detenção de 3 (três) meses a 1 (um) ano e multa.
											<br><br>
											<b>Parágrafo 1°</b>. - Incorre nas mesmas Penas quem realiza experiência dolorosa ou cruel em animais vivos, ainda que para fins didáticos ou científicos, quando existirem recursos alternativos.
											<br><br>
											<b>Parágrafo 2°</b>. - A Pena é aumentada de 1 (um) terço a 1(um) sexto, se ocorrer a morte do(s) animal(s)."
											
											<br><br>
											Os atos de maus-tratos e crueldades mais comuns são:
											
											<br><br>
											<ul>
												<li>abandono;</li>
												<li>manter animal preso por muito tempo sem comida e contato com seus donos/responsáveis;</li>
												<li>deixar animal em lugar impróprio e anti-higiênico;</li>
												<li>envenenamento;</li>
												<li>agressão física, covarde e exagerada;</li>
												<li>mutilação;</li>
												<li>utilizar animal em shows, apresentações ou trabalho que possa lhe causar pânico e sofrimento;</li>
												<li>não procurar um veterinário se o animal estiver doente;</li>
											</ul>
											
											<br>
											Isto serve para os animais domésticos mais comuns como cães, gatos e pássaros, também cavalos usados em trabalho de tração, além de animais criados e domesticados em sítios, chácaras e fazendas. Animais silvestres estão inclusos nessa Lei, possuindo também Leis e Portarias próprias criadas pelo IBAMA.
											<br><br>
											Assim que o Policial ou Escrivão ouvir seu relato sobre o crime, cabe a ele cumprir a instauração de Inquérito Policial. Se ele se negar a fazê-lo, sob qualquer motivo, lembre-o que ele pode ser responsabilizado por crime de prevaricação e negligência, previsto no Art. 319 do Código Penal que diz: "
											<br><br>
											É crime retardar ou deixar de praticar indevidamente ato de ofício, ou praticá-lo contra disposição expressa da lei, para satisfazer interesse ou sentimento pessoal." Exija falar com o Delegado responsável, que tem o dever de lhe atender e de fazer cumprir a Lei. Faça valer seus direitos e o daqueles que não podem falar e sofrem em silêncio!
											<br><br>
											Caso ainda assim não consiga atendimento satisfatório, denuncie ao Ministério Público.
											<br><br>
											Para tanto, anote o nome e a patente de quem o atendeu, o endereço e número da Delegacia, o horário, data e faça um relato em duas vias, pedindo para protocolar uma delas. Se você estiver acompanhado de alguém, este poderá ser sua prova testemunhal para o encaminhamento de queixa ao Ministério Público. Tudo o que você conseguir como fatos e provas devem ser anexados junto à ocorrência para auxiliar no seu B.O. Relatos de testemunhas, fotografias, laudo veterinário, placa do carro que abandonou o animal, etc.
											<br><br>
											É algo comum as pessoas terem medo de denunciar, pois pensam que  isso poderá causar problemas para elas e para as testemunhas, como ameaças, agressões, etc.
											
											<br><br>							
											<b><i>Sobre isso, leia abaixo</i></b>
											
											<br><br>										
											<b>VOCÊ NÃO SERÁ O AUTOR DO PROCESSO JUDICIAL QUE PORVENTURA SEJA ABERTO A PEDIDO DO DELEGADO.</b>
											
											<br><br>
											O Decreto 24.645/34 diz, em seu artigo 1° e 2º (parágrafo 3°):

											<br><br>
											1. "Todos os animais existentes no País são tutelados pelo Estado";<br>
											2. "Os animais serão assistidos em juízo pelos representantes do Ministério Publico, seus substitutos legais e pelos membros das Sociedades Protetoras dos Animais"
											<br><br>
											Portanto, na verdade, não é você quem abrirá um processo judicial e sim o Estado. Uma vez concluído o inquérito para apuração do crime, o Delegado o encaminhará ao Juízo para abertura de ação, onde o Autor será o Estado.
											<br><br>
											Agora você saberá como agir, pois somente o conhecimento traz a verdadeira segurança. Se estamos certos e sabemos o que fazer, não temos o que temer.
										</p>
									</td>
								</tr>
							</table>
						</div>
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
		$url = $css->url();
		if($url != '/index.php'){
			echo $css->socialLink;
		}
	?>

    <!-- JS -->
	<?php echo $css->componentesCssJsFim; ?>
	
</body>
</html>
