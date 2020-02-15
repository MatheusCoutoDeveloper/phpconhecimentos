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
		
		/*$a = 3;
		$b = $a;
		$b += 5;
		echo " A variavel vale $a";
		echo "</br> B variavel vale $b";
		
A está valendo 3 e B = 8		
		*/
		
		$a = 3;
		$b = &$a;
		$b += 5;
		echo " A variavel vale $a";
		echo "</br> B variavel vale $b";
		
	?>
	</div>
</body>
</html>