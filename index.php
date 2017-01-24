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

		echo "Nombre de mot dans le dico : " . count($dico);  // exo 1  Nombre de mots dans le dico //
		?>
	</h1>
	<h1>
		<?php 
	echo "Nombre de mot avec 15 caracteres " . substr_compare($string, $string, 15); // exo 2 nombres de mots avec 15 caracteres //

	?>

</h1>
<br>
<h1>
	<?php 
	echo "Nombre de mot avec la lettre w : " . substr_count($string, 'w'); // exo 3 nombres de mots avec la lettre w //

	?>

</h1>
<br>
<h1>
	<?php 
	echo "Nombre de mot avec la lettre q en dernière position :   " . stripos($string, "q"); // exo 4 nombres de mots avec la lettre q en dernière position //

	?>

</h1>
<br>
<h1> Top 10 des films : 
	<?php 
	$string1 = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
	$brut = json_decode($string1, true);
	$top = $brut["feed"]["entry"];
	
	foreach ($top as $key => $value) {
		if ($key < 10) {
			
			echo "<li>" . $value["im:name"]['label'] . "</li>";
		}else{
			
		}
	}

 // exo 5 top 10 des films 
	?>
</h1>
<br>
<h1>
	<?php



 
	?>
</h1>





</body>
</html>