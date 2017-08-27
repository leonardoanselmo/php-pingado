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
		echo "<h2> Valores recebidos de: $v1 e $v2</h2>";
		echo "O valor absoluto de $v2 é: ".abs($v2);

	?>
	
</body>
</html>