<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo dico</title>
</head>
<body>
	<h1>
		<?php  
		$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
		$dico = explode("\n", $string);

		echo count($dico);  // exo 1  Nombre de mots dans le dico //
		?>
	</h1>
	<h1><?php 
	echo substr_compare($string, $string, 15); // exo 2 nombre de mort avec 15 caractere //

 ?></h1>
 <br>
 <h1><?php 
	echo substr_count($string, 'w'); // exo 3 nombre de mort avec la lettre w //

 ?></h1>
	
</body>
</html>