<!DOCTYPE html>
<html>
<head>
	<title>Remover itens duplicados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$array = array(1, 2, 3, 4, 5, 3, 4,9,18,16);
		$arrayCount = count($array);

		for ($i=1; $i <= $arrayCount; $i++) { 

			print_r($array[$i-1]."\n");
			echo "<br>";
		}

		$arrayNew = array_unique($array);
		print_r(implode(",", $arrayNew));
		echo "<br> Primeira forma de fazer";
		echo "<br><br> ================================= <br><br>";

		$new = array();
		foreach ($array as $value) {
			if (empty(in_array($value, $new))) {
				$new[] = $value; 
			}
		}
		echo '<hr>';
		echo "Segunda forma de fazer ".implode(',', $new);
	?>

</body>
</html>