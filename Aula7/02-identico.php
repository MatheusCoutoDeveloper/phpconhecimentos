<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
	<title> Curso PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
	<div>
	<?php
		$a = 3;
		$b = "3";
		$r = $a == $b ? "SIM":"NÃO";
		echo "As variaveis A e B são iguais ? $r </br>";
		$x = 3;
		$y = "3";
		$re = $x === $y ? "SIM":"NÃO";
		echo "As variaveis X e Y são iguais ? $re";
	?>
	</div>
</body>
</html>