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
		$nota1 = $_GET["n1"];
		$nota2 = $_GET["n2"];
		$m = ($nota1+$nota2)/2;
		echo "A média entre $nota1 e $nota2 é $m. </br>";
		echo "A situação do aluno é " .(($m<6)?"Reprovado":"Aprovado");
		/*
		OU
		$sit = ($m<6)?"Reprovado":"Aprovado";
		echo " A situação do aluno é $sit";		 
		 */
		
	?>
	</div>
</body>
</html>