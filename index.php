<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones en php</title>
</head>

<body>
	<?php
	function mostrartitulo($men)
	{
		echo"<h1 style=\"text-aling:center\">";
		echo $men;
		echo "</h1>";
	}
	mostrartitulo("Primer titulo");
	echo"<br>";
	mostrartitulo("Segundo Titulo")
		?>
</body>
</html>