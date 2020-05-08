<!DOCTYPE html>
<html>
<head>
	<title>Achar o maior número</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$max = 15;
		for ($i=0; $i < $max ; $i++) { 
			$num = rand(0, 99);
			$numbers[$i] = $num;
		}
		print_r($numbers);
		printf("Nº: ".max($numbers));
	?>
</body>
</html>