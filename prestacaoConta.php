<?php
	require_once('model/css.class.php');
	$css = new Css();
	
	require_once('system/app/class/db.class.php');
	$db = new DB();
	//Contas
	$movimentacaoAnos = $db->pesquisaMovimentacaoAnos();
	$movimentacaoEntradas = $db->pesquisaMovimentacaoEntradas();
	$movimentacaoSaidas = $db->pesquisaMovimentacaoSaidas();
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $css->meta; ?>
	<title><?php echo$css->title;?> Prestação de contas</title>
	<?php echo $css->favIcon; ?>
	<?php echo $css->componentesCssJsInicio; ?>
</head>

<?php echo $css->scrollBar; ?>

<body id="style-6">
<?php include_once("analyticstracking.php") ?>

    <!-- Preloader 
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

	<section class="ptb ptb-sm-80">
            <div class="container">
				<div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Prestação de Contas</h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-left">
						<?php
							if(isset($movimentacaoAnos) && !empty($movimentacaoAnos)){
								foreach($movimentacaoAnos as $key){
									$anos[] = array('ano'=>$key['ano']);
								}
							}
							
							if(isset($anos) && !empty($anos)){
								foreach($anos as $ano){
									$movimentacaoMes = $db->pesquisaMovimentacaoMeses($ano['ano']);
									foreach($movimentacaoMes as $mes){
										if($mes['ano'] == $ano['ano']){
											$meses[] = array(array('ano'=>$ano['ano'], 'mes'=>$mes['mes']));
										}
									}
								}
							}
							
							if(!isset($anos) || empty($anos)){
								echo '
										Nenhuma informação lançada.
									';
							}
							
								else {
									$totalTodosAnos = 0;
									foreach($anos as $ano){
										$totalAno = 0;
										$totalEntradas = 0;
										$totalSaidas = 0;
										echo '	
												<table style="border-top: solid 1px black; width: 100%; border-left: solid 1px black; border-right: solid 1px black;">
													<thead style="font-size: 20px; background-color: #00b9b7; color: white; padding-left: 80px; border-bottom: solid 1px black;">
														<th style=" padding: 10px;">'.$ano['ano'].'</th>
													</thead>
													<tbody>
														<tr>
															<td>';
										foreach($meses as $mes){
											if($mes[0]['ano'] === $ano['ano']){
												echo '
														<table style="width: 100%;">
															<thead style="font-size: 16px; background-color: #00b7b5; color: white; border-bottom: solid 1px black;">
																<th style=" padding-left: 10px; padding-bottom: 8px; padding-top: 8px;">'.utf8_encode($mes[0]['mes']).'</th>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<table style="width: 100%;">
																			<thead style="font-size: 13px; background-color: #b8f9ec; color: black;">
																				<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-right: solid 1px black; width: 25%;">Entradas</th>
																				<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-right: solid 1px black; width: 65%;">Descrição</th>
																				<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width: 10%;">Valor</th>
																			</thead>
																			<tbody>';
																	
															$i = 0;
															if(isset($movimentacaoEntradas) && !empty($movimentacaoEntradas)){
																foreach($movimentacaoEntradas as $entrada){
																	if($entrada['ano'] == $ano['ano'] && $entrada['mes'] == $mes[0]['mes']){
																		if(empty($entrada['valor_movimentacao'])){
																			$entrada['valor_movimentacao'] = 0;
																		}
																		if(empty($entrada['detalhe_movimentacao'])){
																			$entrada['detalhe_movimentacao'] = utf8_decode('Nenhuma descrição foi informada.');
																		}
																		echo '
																		<tr>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">'
																				.utf8_encode($entrada['recurso_movimentado']).
																			'</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">'
																				.utf8_encode($entrada['detalhe_movimentacao']).
																			'</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">R$ '
																				.$entrada['valor_movimentacao'].
																			',00</td>
																		</tr>';
																		$mesEntradas = utf8_encode($entrada['mes']);
																		$anoEntradas = utf8_encode($entrada['ano']);
																		$totalEntradas = $totalEntradas + $entrada['valor_movimentacao'];
																		$i++;
																	}
																}
															}
															
															if($i == 0){
																	echo '
																		<tr>
																			<td colspan="2" style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-bottom: solid 1px black; border-right: solid 1px black; border-top: solid 1px black;">Nenhuma entrada neste mês.</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-bottom: solid 1px black; border-top: solid 1px black;">R$ 0,00</td>
																		</tr>';
																	$totalEntradas = 0;
															}
															
															echo
													'
																<table style="width: 100%;">
																	<thead style="font-size: 13px; background-color: #b8f9ec; color: black;">
																		<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-right: solid 1px black; width: 25%;">Saídas</th>
																		<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-right: solid 1px black; width: 65%;">Descrição</th>
																		<th style=" padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width: 10%;">Valor</th>
																	</thead>
																	<tbody>';
																	
															$i = 0;
															if(isset($movimentacaoSaidas) && !empty($movimentacaoSaidas)){
																foreach($movimentacaoSaidas as $saida){
																	if($saida['ano'] == $ano['ano'] && $saida['mes'] == $mes[0]['mes']){
																		if(empty($saida['valor_movimentacao'])){
																			$saida['valor_movimentacao'] = 0;
																		}
																		if(empty($saida['detalhe_movimentacao'])){
																			$saida['detalhe_movimentacao'] = utf8_decode('Nenhuma descrição foi informada.');
																		}
																		echo '
																		<tr>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">'
																				.utf8_encode($saida['recurso_movimentado']).
																			'</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">'
																				.utf8_encode($saida['detalhe_movimentacao']).
																			'</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black;">R$ '
																				.$saida['valor_movimentacao'].
																			',00</td>
																		</tr>';
																		$mesSaidas = utf8_encode($saida['mes']);
																		$anoSaidas = utf8_encode($saida['ano']);
																		$totalSaidas = $totalSaidas + $saida['valor_movimentacao'];
																		$i++;
																	}
																}
															}
															
															if($i == 0){
																	echo '
																		<tr>
																			<td colspan="2" style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-bottom: solid 1px black; border-right: solid 1px black; border-top: solid 1px black;">Nenhuma saída neste mês.</td>
																			<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black;">R$ 0,00</td>
																		</tr>';
																	$totalSaidas = 0;
															}

															echo '<tr>
																		<td colspan="2" style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; background-color: #0d79ab; color: white;">Total entradas '.utf8_encode($mes[0]['mes']).' de '.$ano['ano'].':</td>
																		<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; color: #0d79ab;"><strong>R$ '.$totalEntradas.',00</strong></td>
																	</tr>';
																	
															echo '<tr>
																		<td colspan="2" style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; background-color: #de0a4b; color: white;">Total de saídas '.utf8_encode($mes[0]['mes']).' de '.$ano['ano'].':</td>
																		<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; color: #de0a4b;"><strong>R$ '.$totalSaidas.',00</strong></td>
																	</tr>';
																	
															if(($totalEntradas - $totalSaidas) >= 0){
																$cor = '#0d79ab';
															}
																else {
																		$cor = '#de0a4b';
																}
																	
															echo '<tr>
																		<td colspan="2" style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; background-color: #31282b; color: white;">Saldo total '.utf8_encode($mes[0]['mes']).' de '.$ano['ano'].'	:</td>
																		<td style="padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; color: '.$cor.';"><strong>R$ '.($totalEntradas - $totalSaidas).',00</strong></td>
																	</tr>';
																	
															$totalAno = ($totalAno + ($totalEntradas - $totalSaidas));

															$totalTodosAnos = $totalTodosAnos + $totalEntradas;
															$totalTodosAnos = $totalTodosAnos - $totalSaidas;
															$totalEntradas = 0;
															$totalSaidas = 0;
															
													echo '
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>';
																
											}
													
										}
												if(($totalAno) >= 0){
																$cor = 'white';
															}
																else {
																		$cor = '#de0a4b';
																}
																	
															echo '
																	<table style="width: 100%;">
																		<thead>
																		</thead>
																		<tbody>
																			<tr>
																				<td style="font-size: 16px; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border-bottom: solid 1px black; background-color: #00b9b7; color: white;"><strong>Saldo total anual '.$ano['ano'].': <span style="color: '.$cor.';">R$ '.$totalAno.',00</span></strong></td>
																			</tr>
																		</tbody>
																	</table>';
																	
											echo '
														</td>
													</tr>
												</tbody>
											</table>
											<br><br>';								
									}
									
									if(($totalTodosAnos) >= 0){
										$cor = 'white';
									}
										else {
												$cor = '#de0a4b';
										}
											
									echo '
											<table style="width: 100%;">
												<thead>
												</thead>
												<tbody>
													<tr>
														<td style="font-size: 20px; padding-left: 10px; padding-bottom: 8px; padding-top: 8px; border: solid 1px black; background-color: #00b9b7; color: white;"><strong>Saldo total geral: <span style="color: '.$cor.';">R$ '.$totalTodosAnos.',00</span></strong></td>
													</tr>
												</tbody>
											</table>';
								}
						?>
                    </div>
                </div>
			</div>
	</section>

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
