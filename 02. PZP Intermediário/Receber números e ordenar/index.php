<!DOCTYPE html>
<html>
<head>
	<title>Receber números e ordenar</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Ordenador de números</h1>
	<br>
	<p>Digige os números com espaço:</p>
	<form method="POST">
		<input type="text" name="numeros">
		<input type="submit">
	</form>

	<?php
		if (isset($_POST['numeros']) && !empty($_POST['numeros'])) {
			$numeros = addslashes($_POST['numeros']);

			$go = explode(" ", $numeros);
			sort($go);
			print_r($go);
			echo "<br>";
			foreach ($go as $value => $val) {
				echo $value+1;
				echo "-->";
				echo $val."<br>";
			}
		}
	?>
</body>
</html>