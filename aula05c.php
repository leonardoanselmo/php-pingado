<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Funcoes aritméticas</title>
	<style>
		h2 {
			font: 15pt Verdana;
			color: #171559;
			font-weight: bold;
		}
	</style>
</head>
<body>
	

	<?php 
		$v1 = $_GET['a'];
		$v2 = $_GET['b'];
		echo "<h2> Valores recebidos são: $v1 e $v2</h2>";
		echo "O valor absoluto de $v2 é: ".abs($v2)."</br>";
		echo "O valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2)."</br>";
		echo "A raiz quadrada de $v1 é: ".sqrt($v1);

	?>
	
</body>
</html>