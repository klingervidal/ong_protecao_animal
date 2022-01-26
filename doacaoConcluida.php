<?php

require_once('model/css.class.php');
$css = new Css();

require_once('system/app/class/db.class.php');
$db = new DB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Doação Concluída</title>
	<?php echo $css->favIcon; ?>
	<?php echo $css->componentesCssJsInicio; ?>
</head>

	<?php echo $css->scrollBar; ?>
	
<body onLoad="startCountdown()">
<?php include_once("analyticstracking.php") ?>
	<!-- Seta url do pagamento -->
	<input id="url" hidden value="index.php" />

		<table style="border: none; margin-top: 15%; width: 100%;">
			<tr>
				<td style="width: 33%;"></td>
				<td style="width: 33%; text-align: center;">
					<table style="border: none;">
						<tr>
							<td style="text-align: center; font-size: 20px; color: gray;">
								Doação enviada com sucesso!
							</td>
						</tr>
						<tr>
							<td style="text-align: center; font-size: 20px; color: gray;">
								Agradecemos pela confiança<br>e por apoiar esta causa.
							</td>
						</tr>
						<tr><td></td></tr>
						<tr style="background-color: transparent; font-size: 16px; color: green;">
							<td style="padding-top: 20px; font-weight: bold; text-align: center;">
								Redirecionando em <span style="color: red;" id="sessao"></span> segundos
							</td>
						</tr>
						<tr style="font-size: 16px; color: green;">
							<td style="padding-top: 20px; font-weight: bold; text-align: center;">
								<a href="index.php">
									<button class="btn btn-success" style="padding: 17px;">
										Clique aqui para retornar ao site
									</button>
								</a>
							</td>
						</tr>
					</table>
				</td>
				<td style="width: 33%;"></td>
			</tr>
		</table>
</body>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
var tempo = new Number();
// Tempo em segundos
tempo = 15;

function startCountdown(){
	var url = document.getElementById('url').value;
	
	// Se o tempo não for zerado
	if((tempo - 1) >= 0){

		// Calcula os segundos restantes
		var seg = tempo%60;

		// Cria a variável para formatar no estilo hora/cronômetro
		horaImprimivel = seg;
		//JQuery pra setar o valor
		$("#sessao").html(horaImprimivel);

		// Define que a função será executada novamente em 1000ms = 1 segundo
		setTimeout('startCountdown()',1000);

		// diminui o tempo
		tempo--;

	// Quando o contador chegar a zero faz esta ação
	} else {
		window.open(url, '_self');
	}

}

</script>