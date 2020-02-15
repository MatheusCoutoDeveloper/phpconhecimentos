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
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
		$ano = isset($_GET["ano"])?$_GET["nome"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo tem $idade anos.";
	?>
	<br/><a href="02exercicio.html" >Voltar</a>
	</div>
</body>
</html>