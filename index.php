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

		echo count($dico);

		?>
	</h1>
	
</body>
</html>