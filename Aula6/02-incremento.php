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
		$atual = $_GET["aa"]; // ou # Essa linha vai pegar o ano na url
		echo "O ano atual é $atual e o ano anterior e " . --$atual;
		# Se usar o -- na frente vai tirar 1 se usar o ++ soma 1
	?>
	</div>
</body>
</html>