
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de impostos</title>
</head>
<body>
	<h1>Calculadora de impostos</h1>

	<form method="POST">
		Valor do Produto: <br>
		<input type="number" name="vp"><br><br>
		Taxa de imposto (em %): <br>
		<input type="number" name="taxa"><br><br>
		<input type="submit" value="Calcular">
	</form> <br><br>
	<?php 

	if (!empty($_POST['vp']) && !empty($_POST['taxa'])) {
		$vp = $_POST['vp'];
		$taxa = $_POST['taxa'];

		$imp = $vp * ($taxa/100);
		$pd = $vp - $imp;

		echo "Valor do produto: ".$vp;
		echo "<br> Taxa de imposto: ".$taxa."% <br><hr>";
		echo "Imposto: ".$imp;
		echo "<br> Produto: ".$pd;
	}
	?>

</body>
</html>