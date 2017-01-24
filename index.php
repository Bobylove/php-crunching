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
	<h1>
		<?php 
	echo substr_compare($string, $string, 15); // exo 2 nombres de mots avec 15 caracteres //

	?>

</h1>
<br>
<h1>
	<?php 
	echo substr_count($string, 'w'); // exo 3 nombres de mots avec la lettre w //

	?>

</h1>
<br>
<h1>
	<?php 
	echo stripos($string, "q"); // exo 4 nombres de mots avec la lettre q en dernière position //

	?>

</h1>

</body>
</html>