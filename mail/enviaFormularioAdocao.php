<?php
if(!isset($_POST['name'])) die("N&atilde;o recebi nenhum par&acitc;metro. Por favor volte ao formulario.html antes");
 
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente      = strtoupper($_POST['name']);
$profissao       	= strtoupper($_POST['prof']);
$idade       		= strtoupper($_POST['idade']);
$bairro       		= strtoupper($_POST['bairro']);
$cidade       		= strtoupper($_POST['cidade']);
$uf      	 		= strtoupper($_POST['uf']);
$emailremetente     = strtoupper($_POST['email']);
$telefoneremetente  = strtoupper($_POST['phone']);
$face       		= strtoupper($_POST['face']);

if($face == ''){
	$face = '';
}
	else {
		$face =	"<div><p><strong>Facebook: </strong> $face </p></div>";
	}

$moradia       		= strtoupper($_POST['moradia']);
$imovel       		= strtoupper($_POST['imovel']);
$quintal       		= strtoupper($_POST['quintal']);
$possui_animal      = strtoupper($_POST['ja_possui_animal']);

if($possui_animal == 'GATO'){
	$qtd_gatos = $_POST['qtd_gatos'];
	$qtd_gatos = "<div><p><strong>Quantidade de gatos: </strong> $qtd_gatos </p></div>";
	
	$qtd_caes = '';
}
	else if($possui_animal == 'CACHORRO'){
		$qtd_caes = $_POST['qtd_caes'];
		$qtd_caes = "<div><p><strong>Quantidade de cachorros: </strong> $qtd_caes </p></div>";
		
		$qtd_gatos = '';
	}
		else if($possui_animal == 'CACHORRO E GATO'){
			$qtd_caes = $_POST['qtd_caes'];
			$qtd_gatos = $_POST['qtd_gatos'];
			$qtd_caes = "<div><p><strong>Quantidade de cachorros: </strong> $qtd_caes </p></div>";
			$qtd_gatos = "<div><p><strong>Quantidade de gatos: </strong> $qtd_gatos </p></div>";
		}
			else {
				$qtd_gatos = "";
				$qtd_caes = "";
			}

$motivo_adocao      = strtoupper($_POST['motivo_adocao']);
$respons_adotado	= strtoupper($_POST['responsavel_adotado']);
$adotado_sozinho    = strtoupper($_POST['adotado_sozinho']);
$falecimento        = strtoupper($_POST['falecimento']);

if($falecimento == 'SIM'){
	$causa_obito = strtoupper($_POST['causa_obito']);
	$causa_obito = "<div><p><strong>Causa do óbito: </strong> $causa_obito </p></div>";
}
	else{
		$causa_obito = '';
	}


$opiniao_castracao  = strtoupper($_POST['opiniao_castracao']);
$opiniao_despesas   = strtoupper($_POST['opiniao_despesas']);
$deseja_adotar      = strtoupper($_POST['deseja_adotar']);

if($deseja_adotar == 'GATO'){
	$seguranca_imovel = strtoupper($_POST['seguranca_imovel']);
	$seguranca_imovel = "<div><p><strong>Considerando a adoção de gatos, sua residência é segura? (apartamento com janelas e varandas com telas, casas com muros altos e bem fechadas): </strong> $seguranca_imovel </p></div>";
	
	$adotar_quantos_gatos = $_POST['adotar_quantos_gatos'];
	$adotar_quantos_gatos = "<div><p><strong>Quer adotar quantos gatos? </strong> $adotar_quantos_gatos </p></div>";
	
	$porte_cao = "";
	$adotar_quantos_caes = "";
}
	else if($deseja_adotar == 'CACHORRO'){
		$porte_cao = strtoupper($_POST['porte_cao']);
		$porte_cao = "<div><p><strong>Considerando a adoção de cachorros, qual o porte desejado? </strong> $porte_cao </p></div>";
		
		$adotar_quantos_caes = $_POST['adotar_quantos_caes'];
		$adotar_quantos_caes = "<div><p><strong>Quer adotar quantos cachorros? </strong> $adotar_quantos_caes </p></div>";
		
		$seguranca_imovel = "";
		$adotar_quantos_gatos = "";
	}
		else if($deseja_adotar == 'CACHORRO E GATO'){
			$porte_cao = strtoupper($_POST['porte_cao']);
			$porte_cao = "<div><p><strong>Considerando a adoção de cachorros, qual o porte desejado? </strong> $porte_cao </p></div>";
			
			$adotar_quantos_caes = $_POST['adotar_quantos_caes'];
			$adotar_quantos_caes = "<div><p><strong>Quer adotar quantos cachorros? </strong> $adotar_quantos_caes </p></div>";
			
			$seguranca_imovel = strtoupper($_POST['seguranca_imovel']);
			$seguranca_imovel = "<div><p><strong>Considerando a adoção de gatos, sua residência é segura? (apartamento com janelas e varandas com telas, casas com muros altos e bem fechadas): </strong> $seguranca_imovel </p></div>";
			
			$adotar_quantos_gatos = $_POST['adotar_quantos_gatos'];
			$adotar_quantos_gatos = "<div><p><strong>Quer adotar quantos gatos? </strong> $adotar_quantos_gatos </p></div>";
		}
			else {
				$porte_cao = "";
				$adotar_quantos_caes = "";

				$seguranca_imovel = "";
				$adotar_quantos_gatos = "";
			}

$preferencia_idade  = strtoupper($_POST['preferencia_idade']);
$pref_castrado		= strtoupper($_POST['preferencia_castrado']);
$pref_sexo       	= strtoupper($_POST['preferencia_sexo']);
$emaildestinatario   = 'brigadaplanetaria@gmail.com';
$assunto             = 'Formulário de adoção - Brigada Planetária';
$emailsender          = 'brigadaplanetaria@brigadaplanetaria.com.br';
$emailsenderName     = 'K Web Systems';
 

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '	<div><p><strong>Olá equipe Brigada Planetária!</strong></p></div>
					<div><strong>'. $nomeremetente .'</strong> visitou nosso site e preencheu o formulário de adoção, confira:</div>
					<div><p><strong>Profissão: </strong>'. $profissao .'</p></div>
					<div><p><strong>Idade: </strong>'. $idade .'</p></div>
					<div><p><strong>Bairro: </strong>'. $bairro .'</p></div>
					<div><p><strong>Cidade: </strong>'. $cidade .'</p></div>
					<div><p><strong>UF: </strong>'. $uf .'</p></div>
					<div><p><strong>Email: </strong>'. $emailremetente .'</p></div>
					<div><p><strong>Telefone: </strong>'. $telefoneremetente .'</p></div>
					'.$face.'
					<div><p><strong>Mora em: </strong>'. $moradia .'</p></div>
					<div><p><strong>Imóvel: </strong>'. $imovel .'</p></div>
					<div><p><strong>Possui quintal? </strong>'. $quintal .'</p></div>
					<div><p><strong>Já possui gato ou cachorro? </strong>'. $possui_animal .'</p></div>
					'.$qtd_gatos.'
					'.$qtd_caes.'
					<div><p><strong>Por que quer adotar um bichinho? </strong>'. $motivo_adocao .'</p></div>
					<div><p><strong>Quem será responsável pelo adotado? </strong>'. $respons_adotado .'</p></div>
					<div><p><strong>O adotado ficará sozinho em casa? </strong>'. $adotado_sozinho .'</p></div>
					<div><p><strong>Houve falecimento na casa nos últimos meses? </strong>'. $falecimento .'</p></div>
					'.$causa_obito.'
					<div><p><strong>Você é a favor da esterilização (castração)? </strong>'. $opiniao_castracao .'</p></div>
					<div><p><strong>Está preparado para as despesas que terá com o adotado, como boa ração, vacinas, vermífugos, visitas ao veterinário sempre que necessário? </strong>'. $opiniao_despesas .'</p></div>
					'.$seguranca_imovel.'
					'.$adotar_quantos_gatos.'
					'.$porte_cao.'
					'.$adotar_quantos_caes.'
					<div><p><strong>Preferência de idade? </strong>'. $preferencia_idade .'</p></div>
					<div><p><strong>Preferência por animais castrados? </strong>'. $pref_castrado .'</p></div>
					<div><p><strong>Preferência de sexo? </strong>'. $pref_sexo .'</p></div><br>
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
header("Location: http://www.brigadaplanetaria.com.br/mailsent2.php");


?>