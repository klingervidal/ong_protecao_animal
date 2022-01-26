<?php

// Importa classe do google
require_once("gapi.class.php");

class Css {

//Pegando URL acessada (para identificar o index e não a integração com Facebook)
function url() {
	// Identifica a URL atual
	$url = $_SERVER["PHP_SELF"];
	return $url;
}

public $socialLink =
				'
					<div style="position: fixed; top: 75%; left: 0.5%; z-index: 9999">
						<br>
						<div style="z-index: 9999;"
							class="fb-share-button"
							data-href="http://www.brigadaplanetaria.com.br"
							data-layout="button_count"
							data-action="like"
							data-show-faces="false"
							data-share="true">
						</div><br>
						<div style="z-index: 9999;"
							class="fb-like"
							data-href="https://www.facebook.com/brigada.planetaria/?fref=ts"
							data-layout="button_count"
							data-action="like"
							data-show-faces="false"
							data-share="false">
						</div><br>
						<img src="../img/doar.png" onclick="showAbaDoacao2()" style="cursor: pointer;" width="120px" />
					</div>
				';

//Meta datas
public $meta = '
				<meta charset="utf-8" />
				<meta name="description" content="Associação Brigada Vida Planetária em Defesa do Meio Ambiente" />
				<meta name="keywords" content="Brigada Planetária ONG Proteção Animal Minas Gerais" />
				<meta name="author" content="K Web Systems">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />';

//Título da página para concatenação				
public $title = 'Brigada Planetária :: ';

//Ícone da página
public $favIcon = '
					<!-- Favicon -->
					<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
					<link rel="icon" type="image/png" href="img/favicon.png">
					<link rel="apple-touch-icon" href="img/favicon.png">';

public $componentesCssJsInicio =	'	  
									    <!-- CSS -->
										<link href="css/style.css" rel="stylesheet" type="text/css" />
										<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
										<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
										<link href="css/ionicons.css" rel="stylesheet" type="text/css" />
										<link href="css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
										<link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
										<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />

										<!-- SLIDER REVOLUTION CSS SETTINGS -->
										<link href="plugin/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
										<div id="fb-root"></div>
										<script>
										  window.fbAsyncInit = function() {
											FB.init({
											  appId      : "1403248269702847",
											  xfbml      : true,
											  version    : "v2.7"
											});
										  };

										  (function(d, s, id){
											 var js, fjs = d.getElementsByTagName(s)[0];
											 if (d.getElementById(id)) {return;}
											 js = d.createElement(s); js.id = id;
											 js.src = "//connect.facebook.net/pt_BR/sdk.js";
											 fjs.parentNode.insertBefore(js, fjs);
										   }(document, "script", "facebook-jssdk"));
										</script>
										<script>
											function showAbaDoacao2(){
												$("#abadoacao2").show();
											}

											function hideAbaDoacao2(){
												$("#abadoacao2").hide();
											}
										</script>
									';
										
//Formatação da Scroll bar da página
public $scrollBar =	'<style>
						#style-6::-webkit-scrollbar-track
							{
								-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
								background-color: #F5F5F5;
								border-radius: 0px;
							}

							#style-6::-webkit-scrollbar
							{
								width: 7px;
								background-color: #F5F5F5;
							}

							#style-6::-webkit-scrollbar-thumb
							{
								border-radius: 8px;
								background-image: -webkit-gradient(linear,
																   left bottom,
																   left top,
																   color-stop(0.50, gray),
																   color-stop(1, lightgray),
																   color-stop(0.50, gray));
							}
					</style>';
								
public $abaDoacao = '<script>
						function setCodigoPlanoDoacao(formulario){
							var valorDoacao = document.getElementById("valor").value;
							var valorDoacao2 = document.getElementById("valor2").value;
							var periodicidade = document.getElementById("periodicidade").value;
							var periodicidade2 = document.getElementById("periodicidade2").value;
							var codPlanoDoacao;
							var url;
							var formulario = formulario;
							
							if(formulario == 1){
								switch (valorDoacao){
									case "5": // R$ 5,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "53AF6F83D3D381E664249F8B2A402E56";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "0E1DDB6316165910049E0FBCF3DBC9E5";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "FD4360BCAFAF9FBDD41CBFBEABE108E1";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "4BF6011990902D6114692F9F52B787F3";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "743C804B9393295FF4A90F8AB5B79F38";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "BF76BCCC67671A611444CFA37CA792B0";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "094E22B4BABA0CDBB4C0EF9DE397674C";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "10": // R$ 10,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "19E652B95959DBA554DEBFAB17339CDC";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F9DAFB4EFCFC2F8114FD6F84DC44E9A2";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "2920A596D6D6997CC4A15F846D25DA18";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "59379C64BCBC285EE4693F9BE731932F";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "940951D58585052CC43CDFB59165566B";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "D2B4ECE72424B88CC460CFBCD379D4C1";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "2A2616F9CDCD706774860FAC7DCA553F";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "20": // R$ 20,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "77987E372525B1E554739FA42896B30D";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "07D1ACF037371832240B4F9F3F497068";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "342CAD948080B737745C2FBEBD9593E2";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7023BF22C0C045CDD49F4F9A5B4A1BC1";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "9D1D3D011616B5077471FF927FA52632";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "C6C2DA95D4D4EB56647BEFBA8220E8D2";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "F47DC4314141ECF554D68F87C95F56B2";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "50": // R$ 50,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "F8C9E9D3C2C2669444ACBFAEADE01696";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F1C2631BB5B5E8B774105FAD1A9565EE";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "29F30516D9D97F84447C7FBEF6848F8D";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "6A509E0C0B0BA8AAA4759F9F9440D31E";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "8F6B10443D3DA272247B2FBE68960300";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "E38A7A5CF6F660B334AB6F8C7541085F";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "168852360101FB7BB42CCF8E4BFBC60B";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "100": // R$ 100,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "95A8D6DB6D6DFBD884BA2F88555559C0";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "FB37588F4D4DBA7884DF6F846D20471A";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "4DDAF32FB9B9237554163FA0FB807948";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "88FB44E8C9C95AB444EA0FA6340CBED1";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "B79C441A9797B7C114351F96D7DBD56A";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "FDC01F05636369F444E2BF88EE2E9369";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "7C77EB119999B1CBB4A8CF963B91E69E";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "500": // R$ 500,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "EDAB6AB2C8C86C9884D58F968FC8A26A";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "1602777C9494EB41140FDF929447A71A";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "45F23BCDCDCD78FFF404BF8A13EF6E31";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7F41748873732F722487EFAE0B08A5B8";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "CE92BDB8181804A5541FBF94F3A7B323";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "057272579D9D9AA664A0BF9BE2954DE6";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "36233E312121563AA4143F85E8BA2EBB";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "1000": // R$ 1.000,00
										if(periodicidade == 0){ // Não repetir
											codPlanoDoacao = "35F6CBD8EEEEDA199484BF97D38075E1";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F7A9A86D7171492CC4918FB36121B7E6";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade == 2){ // Repetir por 6 meses
													codPlanoDoacao = "2957FD84484896644419CFB163C06FDA";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7D1A637FF7F79E6BB4436FBA20DCD3A5";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade == 4){ // Repetir por 2 anos
															codPlanoDoacao = "B1F37D241616A9A994040FBB219D04C5";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade == 5){ // Repetir por 5 anos
																codPlanoDoacao = "2522975BECEC13D9946D9FAA6515C256";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "6C99CE2E44445D2BB4C11F870C5A4953";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									default:
										codPlanoDoacao = "77987E372525B1E554739FA42896B30D";
										url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										break;
								}
								document.getElementById("code").value = codPlanoDoacao;
								document.fps.action = url;
							}
								else if(formulario == 2){
									switch (valorDoacao2){
										case "5": // R$ 5,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "53AF6F83D3D381E664249F8B2A402E56";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "0E1DDB6316165910049E0FBCF3DBC9E5";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "FD4360BCAFAF9FBDD41CBFBEABE108E1";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "4BF6011990902D6114692F9F52B787F3";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "743C804B9393295FF4A90F8AB5B79F38";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "BF76BCCC67671A611444CFA37CA792B0";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "094E22B4BABA0CDBB4C0EF9DE397674C";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "10": // R$ 10,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "19E652B95959DBA554DEBFAB17339CDC";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F9DAFB4EFCFC2F8114FD6F84DC44E9A2";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "2920A596D6D6997CC4A15F846D25DA18";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "59379C64BCBC285EE4693F9BE731932F";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "940951D58585052CC43CDFB59165566B";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "D2B4ECE72424B88CC460CFBCD379D4C1";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "2A2616F9CDCD706774860FAC7DCA553F";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "20": // R$ 20,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "77987E372525B1E554739FA42896B30D";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "07D1ACF037371832240B4F9F3F497068";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "342CAD948080B737745C2FBEBD9593E2";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7023BF22C0C045CDD49F4F9A5B4A1BC1";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "9D1D3D011616B5077471FF927FA52632";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "C6C2DA95D4D4EB56647BEFBA8220E8D2";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "F47DC4314141ECF554D68F87C95F56B2";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "50": // R$ 50,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "F8C9E9D3C2C2669444ACBFAEADE01696";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F1C2631BB5B5E8B774105FAD1A9565EE";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "29F30516D9D97F84447C7FBEF6848F8D";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "6A509E0C0B0BA8AAA4759F9F9440D31E";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "8F6B10443D3DA272247B2FBE68960300";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "E38A7A5CF6F660B334AB6F8C7541085F";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "168852360101FB7BB42CCF8E4BFBC60B";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									
									case "100": // R$ 100,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "95A8D6DB6D6DFBD884BA2F88555559C0";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "FB37588F4D4DBA7884DF6F846D20471A";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "4DDAF32FB9B9237554163FA0FB807948";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "88FB44E8C9C95AB444EA0FA6340CBED1";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "B79C441A9797B7C114351F96D7DBD56A";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "FDC01F05636369F444E2BF88EE2E9369";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "7C77EB119999B1CBB4A8CF963B91E69E";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "500": // R$ 500,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "EDAB6AB2C8C86C9884D58F968FC8A26A";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "1602777C9494EB41140FDF929447A71A";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "45F23BCDCDCD78FFF404BF8A13EF6E31";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7F41748873732F722487EFAE0B08A5B8";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "CE92BDB8181804A5541FBF94F3A7B323";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "057272579D9D9AA664A0BF9BE2954DE6";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "36233E312121563AA4143F85E8BA2EBB";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
																	
									case "1000": // R$ 1.000,00
										if(periodicidade2 == 0){ // Não repetir
											codPlanoDoacao = "35F6CBD8EEEEDA199484BF97D38075E1";
											url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										}
											else if(periodicidade2 == 1){ // Repetir por 3 meses
												codPlanoDoacao = "F7A9A86D7171492CC4918FB36121B7E6";
												url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
											}
												else if(periodicidade2 == 2){ // Repetir por 6 meses
													codPlanoDoacao = "2957FD84484896644419CFB163C06FDA";
													url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
												}
													else if(periodicidade2 == 3){ // Repetir por 1 ano
														codPlanoDoacao = "7D1A637FF7F79E6BB4436FBA20DCD3A5";
														url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
													}
														else if(periodicidade2 == 4){ // Repetir por 2 anos
															codPlanoDoacao = "B1F37D241616A9A994040FBB219D04C5";
															url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
														}
															else if(periodicidade2 == 5){ // Repetir por 5 anos
																codPlanoDoacao = "2522975BECEC13D9946D9FAA6515C256";
																url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
															}
																else if(periodicidade2 == 10){ // Repetir por 10 anos
																	codPlanoDoacao = "6C99CE2E44445D2BB4C11F870C5A4953";
																	url = "https://pagseguro.uol.com.br/v2/pre-approvals/request.html";
																}
																	break;
									default:
										codPlanoDoacao = "77987E372525B1E554739FA42896B30D";
										url = "https://pagseguro.uol.com.br/checkout/v2/payment.html";
										break;
									}
									document.getElementById("code2").value = codPlanoDoacao;
									document.fps2.action = url;
								}
						}
					</script>
					
					<!-- Sidemenu -->
					<section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
						<a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>
						<h5 class="white"><strong>Doar</strong></h5>
						
						<label for="valor">
							<strong style="color: white;">Valor</strong>
							<select onChange="setCodigoPlanoDoacao(1)" id="valor" name="valor" class="input-md form-full">
								<option value="5">R$ 5,00</option>
								<option value="10">R$ 10,00</option>
								<option value="20" selected	>R$ 20,00</option>
								<option value="50">R$ 50,00</option>
								<option value="100">R$ 100,00</option>
								<option value="500">R$ 500,00</option>
								<option value="1000">R$ 1.000,00</option>
							</select>
						</label>
						
						<label for="periodicidade">
							<strong style="color: white;">Repetir mensalmente</strong>
							<select onChange="setCodigoPlanoDoacao(1)" id="periodicidade" name="periodicidade" class="input-md form-full">
								<option value="0" selected>Não repetir</option>
								<option value="1">Por 3 meses</option>
								<option value="2">Por 6 meses</option>
								<option value="3">Por 1 ano</option>
								<option value="4">Por 2 anos</option>
								<option value="5">Por 5 anos</option>
								<option value="10">Por 10 anos</option>
							</select>
						</label>
						
						<form name="fps" target="pagseguro" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
							<input type="hidden" name="code" id="code" value="77987E372525B1E554739FA42896B30D">
							<p align="center">
							<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/180x25-doar-azul.gif" name="I1" alt="Pague com PagSeguro - é rápido, grátis e seguro!" width="180" height="25">
							</p>
						</form>
					</section>
					<!--End Sidemenu -->';
					
public $abaDoacao2 = '
					<!-- Sidemenu -->
					<section id="abadoacao2" class="pushmenu pushmenu-right side-menu" style="position: fixed; right: 0px;" hidden>
						<a class="menu-close" onclick="hideAbaDoacao2()"><i class="ion ion-android-close"></i></a>
						
						<h5 class="white"><strong>Doar</strong></h5>
						
						<label for="valor">
							<strong style="color: white;">Valor</strong>
							<select onChange="setCodigoPlanoDoacao(2)" id="valor2" name="valor2" class="input-md form-full">
								<option value="5">R$ 5,00</option>
								<option value="10">R$ 10,00</option>
								<option value="20" selected	>R$ 20,00</option>
								<option value="50">R$ 50,00</option>
								<option value="100">R$ 100,00</option>
								<option value="500">R$ 500,00</option>
								<option value="1000">R$ 1.000,00</option>
							</select>
						</label>
						
						<label for="periodicidade">
							<strong style="color: white;">Repetir mensalmente</strong>
							<select onChange="setCodigoPlanoDoacao(2)" id="periodicidade2" name="periodicidade2" class="input-md form-full">
								<option value="0" selected>Não repetir</option>
								<option value="1">Por 3 meses</option>
								<option value="2">Por 6 meses</option>
								<option value="3">Por 1 ano</option>
								<option value="4">Por 2 anos</option>
								<option value="5">Por 5 anos</option>
								<option value="10">Por 10 anos</option>
							</select>
						</label>
						
						<form name="fps2" target="pagseguro" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
							<input type="hidden" name="code" id="code2" value="77987E372525B1E554739FA42896B30D">
							<p align="center">
							<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/180x25-doar-azul.gif" name="I1" alt="Pague com PagSeguro - é rápido, grátis e seguro!" width="180" height="25">
							</p>
						</form>
						
					</section>
					<!--End Sidemenu -->';

public $headerMenuDesktop = '
							<!-- Header -->
							<header id="header" class="header header-light">
							<div class="container header-inner">

								<!-- Logo -->
								<div class="logo">
									<a href="#">
										<img class="logo-light" src="img/logo-white.png" alt="Brigada Planetária" />
										<img class="logo-dark" src="img/logo-black.png" alt="Brigada Planetária" />
									</a>
								</div>
								<!-- End Logo -->

								<!-- Rightside Menu (Search, Cart, Bart icon) -->
								<div class="side-menu-btn">
									<ul>
										<!--Sidebar Menu Icon-->
										<li>
											<a id="menu-sidebar-list-icon" class="nav-bar-icon"><span></span></a>
										</li>
										<!-- End Sidebar Menu Icon-->
									</ul>
								</div>
								<!-- End Rightside Menu -->

								<!-- Mobile Navbar Icon -->
								<div class="nav-mobile nav-bar-icon">
									<span></span>
								</div>
								<!-- End Mobile Navbar Icon -->

								<!-- Navbar Navigation -->
								<div class="nav-menu">
									<ul class="nav-menu-inner">
										<li><a href="index.php"><i class="fa fa-home"></i></a></li>
										<li>
											<a class="menu-has-sub" href="#">QUEM SOMOS <i class="fa fa-angle-down"></i></a>
											<!-- Dropdown -->
											<ul class="sub-dropdown dropdown">
												<li><a href="historia.php">História</a></li>
												<li><a href="prestacaoConta.php">Prestação de conta</a></li>
											</ul>
											<!-- End Dropdown -->
										</li>
										<li>
											<a class="menu-has-sub" href="#">AÇÕES <i class="fa fa-angle-down"></i></a>
											<!-- Dropdown -->
											<ul class="sub-dropdown dropdown">
												<li>
													<a class="menu-has-sub" href="#">Adoção <i class="fa fa-angle-right"></i></a>
													<ul class="sub-dropdown">
														<li><a target="_blank" href="https://www.instagram.com/brigadaplanetaria/">Adotar</a></li>
														<li><a href="comoAdotar.php">Como adotar</a></li>
														<li><a href="formularioAdocao.php">Formulário para adoção</a></li>
														<li><a href="finalFeliz.php">Final Feliz</a></li>
													</ul>
												</li>
												<li><a href="eventos.php">Eventos</a></li>
												<li>
													<a class="menu-has-sub" href="#">Como Ajudar <i class="fa fa-angle-right"></i></a>
													<ul class="sub-dropdown">
														<li><a href="querajudar.php">Quer ajudar?</a></li>
														<li><a href="formularioVoluntariado.php">Formulário para voluntariado</a></li>
													</ul>
												</li>
												<li><a href="projetos.php">Projetos</a></li>
												<li><a href="subsidio.php">Subsídio</a></li>
											</ul>
											<!-- End Dropdown -->
										</li>
										<li>
											<a class="menu-has-sub" href="#">DICAS <i class="fa fa-angle-down"></i></a>
											<!-- Dropdown -->
											<ul class="sub-dropdown dropdown">
												<li><a href="educacional.php">Educacional</a></li>
												<li><a href="cachorro.php">Cachorro</a></li>
												<li><a href="gato.php">Gato</a></li>
												<li><a href="suporteLegal.php">Suporte legal</a></li>
											</ul>
											<!-- End Dropdown -->
										</li>
										<li><a href="loja.php">LOJA</a></li>
										<li><a href="contato.php">CONTATO</a></li>
										<li><a href="system"><i class="fa fa-lock"></i></a></li>
									</ul>
								</div>
								<!-- End Navbar Navigation -->
							</div>
						</header>
						<!-- End Header -->';

public function visit(){
	// Autenticação
	$ga = new gapi('913141185968-compute@developer.gserviceaccount.com', 'brigadaplanetaria-fd879e19f48e.p12');

	$ga->requestAccountData();

	// 126900019 refere-se ao ID da vista da propriedade da conta "Todos os dados
	// do Web Site", no menu "Visualizar Configurações", do Google Analytics
	$ga->requestReportData(138251495,array('browser','browserVersion'),array('pageviews','visits'));

	$visit = $ga->getVisits();
	
return $visit;
	
}
			
public $componentesCssJsFim =	'
									<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
									<script src="js/jquery-ui.min.js" type="text/javascript"></script>
									<script src="js/bootstrap.min.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
									<script src="js/plugin/wow.min.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
									<script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
									<!-- SLIDER REVOLUTION SCRIPTS  -->
									<script src="plugin/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
									<script src="plugin/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
									<!-- End SLIDER REVOLUTION SCRIPTS  -->
									<script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
									<script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
									<script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
									<script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
									<script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
									<script src="js/plugin/mediaelement-and-player.min.js"></script>
									<script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
									<script src="js/revolution-slider.js" type="text/javascript"></script>
									<script src="js/theme.js" type="text/javascript"></script>
									<script src="js/navigation.js" type="text/javascript"></script>
									<script src="js/contact-form.js" type="text/javascript"></script>';
									
public $footerStart = '
						<!-- FOOTER -->
						<footer class="footer pt-0">
							<!-- Copyright Bar -->
							<section class="copyright ptb-15" style="background-color: white;">
								<div class="col-md-12 col-sm-12">
									<ul class="social">
										<li class="social-icon-twitter"><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icon-insta"><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
										<li class="social-icon-face"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
								<br>
								<br>
								<div class="container">
									<p class="" style="color: #7b5343;">
										<b>© ';
										
public $footerMiddle =	' <a>Brigada Planetária</b></a> | <a target="_blank" href="http://www.kwebsystems.com.br/"><b>K Web Systems</b></a> | <span style="color: #00b7b5"><strong>';

public $footerEnd = '
						 visitas</strong></span>
									</p>
									<img src="img/logo.png" />
								</div>
								<br>
								<p class="" style="color: #7b5343; padding-top: 1.5%;"><strong>PARCEIROS</strong></p>
								<div class="container" style="padding-top: 1%; padding-bottom: 2%;">
									<div class="owl-carousel client-carousel nf-carousel-theme ">
										<div class="item">
											<a target="_blank" title="Farmácia Solidária" href="http://www.farmaciasolidaria.com.br/">
												<div class="client-logo">
													<img src="img/parceiros/3.png" alt="Farmácia Solidária" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Animal Center BH" href="https://www.facebook.com/pages/Cl%C3%ADnica-Veterin%C3%A1ria-Animal-Center/141688035909740">
												<div class="client-logo">
													<img src="img/parceiros/4.png" alt="Animal Center BH" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="O Lobo Alfa" href="http://oloboalfa.com.br/?regiao=mg">
												<div class="client-logo">
													<img src="img/parceiros/6.png" alt="O Lobo Alfa" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="SMPA - Sociedade Mineira Protetora dos Animais" href="https://www.facebook.com/smpabh/?fref=ts">
												<div class="client-logo">
													<img src="img/parceiros/1.png" alt="SMPA - Sociedade Mineira Protetora dos Animais" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="K Web Systems" href="http://www.kwebsystems.com.br/">
												<div class="client-logo">
													<img src="img/parceiros/5.png" alt="K Web Systems" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="SORRIA - A arte de fazer o bem" href="https://www.facebook.com/expedicaosorria/">
												<div class="client-logo">
													<img src="img/parceiros/0.png" alt="SORRIA - A arte de fazer o bem" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Castra Pet BH" href="https://www.facebook.com/Castrapet-BH-267351386933600/">
												<div class="client-logo">
													<img src="img/parceiros/2.png" alt="Castra Pet BH" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Escola de Imagem" href="http://www.escoladeimagem.com.br/">
												<div class="client-logo">
													<img src="img/parceiros/7.png" alt="Escola de Imagem" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="ARCA conceito" href="https://www.arcaconceito.com.br/">
												<div class="client-logo">
													<img src="img/parceiros/10.png" alt="ARCA conceito" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Sarau Tropeiro" href="http://sarautropeiro.blogspot.com.br/">
												<div class="client-logo">
													<img src="img/parceiros/8.png" alt="Sarau Tropeiro" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Bela Adestradora" href="https://www.facebook.com/belaadestradora/">
												<div class="client-logo">
													<img src="img/parceiros/9.png" alt="Bela Adestradora" />
												</div>
											</a>
										</div>
										<div class="item">
											<a target="_blank" title="Fondation Brigitte Bardot" href="https://www.fondationbrigittebardot.fr/">
												<div class="client-logo">
													<img src="img/parceiros/11.png" alt="Fondation Brigitte Bardot" />
												</div>
											</a>
										</div>
									</div>
								</div>
							</section>
							<!-- End Copyright Bar -->
							<!-- Client Logos Section -->
						<!-- End Client Logos Section -->
						</footer>
						<!-- END FOOTER -->';
}