<?php
if(!isset($_POST['name'])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
 
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente      = strtoupper($_POST['name']);
$idade       		= strtoupper($_POST['idade']);
$emailremetente     = strtoupper($_POST['email']);
$telefoneremetente  = strtoupper($_POST['phone']);
$tipovoluntariado   = strtoupper($_POST['tipo_voluntariado']);
$mensagem   		= strtoupper($_POST['message']);
$emaildestinatario   = 'brigadaplanetaria@gmail.com';
$assunto             = 'Formulário de voluntariado - Brigada Planetária';
$emailsender          = 'brigadaplanetaria@brigadaplanetaria.com.br';
$emailsenderName     = 'K Web Systems';

if(!empty($mensagem)){
	$mensagem = '<div><p><strong>Mensagem: </strong>'. $mensagem .'</p></div>';
}
	else { $mensagem = ''; }

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '	<div><p><strong>Olá equipe Brigada Planetária!</strong></p></div>
					<div><strong>'. $nomeremetente .'</strong> visitou nosso site e preencheu o formulário de voluntariado, confira:</div>
					<div><p><strong>Idade: </strong>'. $idade .'</p></div>
					<div><p><strong>Email: </strong>'. $emailremetente .'</p></div>
					<div><p><strong>Telefone: </strong>'. $telefoneremetente .'</p></div>
					<div><p><strong>Tipo de voluntariado: </strong>'. $tipovoluntariado .'</p></div>
					'.$mensagem.'
					<div style="color: gray;"><p><strong>K Web Systems</strong></p></div>
					<div style="color: gray;">Seu negócio na web</div>
					<div style="color: red;"><a href="http://www.kwebsystems.com.br" style="text-decoration: none;">Visite nosso site</a></div>';

/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-Type: text/html; charset=UTF-8".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
 
//Redirecionando para página de confirmação
header("Location: http://www.brigadaplanetaria.com.br/mailsent3.php");


?>