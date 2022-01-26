<?php

// Importa classe do google
require_once("gapi.class.php");

	// Autenticação
	$ga = new gapi('913141185968-compute@developer.gserviceaccount.com', 'brigadaplanetaria-fd879e19f48e.p12');

	$ga->requestAccountData();
	var_dump($ga); exit;
	// 126900019 refere-se ao ID da vista da propriedade da conta "Todos os dados
	// do Web Site", no menu "Visualizar Configurações", do Google Analytics
	$ga->requestReportData(138251495,array('browser','browserVersion'),array('pageviews','visits'));

	$visit = $ga->getVisits();

	$ok = '<div class="footer" style="padding-top: 20px; background-color: #36548f;">
						<div class="container">
							<div class="row">
								<div class="col-sm-4 text-left">
									<a href="http://www.kwebsystems.com.br" target="_blank" style="text-decoration: none;">
										<p class="copy-right" style="color: white; font-size: 10px;">Desenvolvido por K Web Systems</p>
									</a>
								</div>
								<div class="col-sm-4 text-center">
									<p class="copy-right" style="color: white; font-size: 10px;">
										<span class="glyphicon-copyright-mark glyphicon"></span>&nbsp;
											<?php echo date("Y"); ?>&nbsp;
										<a href="javascript:void(0);" class="copy-right-to" title="Filhotes OnLine">
											Filhotes OnLine
										</a>. Todos os direitos reservados
										<br> '.$visit.' visitas
									</p>
								</div>

								<div class="col-sm-4 text-right" style="color: blue;">
									<ul class="list-unstyled list-inline $css->footer()()-social-icons">
										<li>
											<a href="https://twitter.com/FilhotesOnLine" target="_blank" title="">
												<i class="fa fa-twitter"></i>
											</a>
										</li>

										<li>
											<a href="https://www.youtube.com/user/denardy" target="_blank" title="">
												<i class="fa fa-youtube"></i>
											</a>
										</li>

										<li>
											<a href="https://www.facebook.com/Filhotes-On-Line-BH-240757005944117" target="_blank" title="">
												<i class="fa fa-facebook"></i>
											</a>
										</li>

										<li>
											<a href="https://www.instagram.com/filhotesonline" target="_blank" title="">
												<i class="fa fa-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
							</div><!-- /.row -->
						</div><!-- /.container -->
					</div>';
echo $visit;
	




?>