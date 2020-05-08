<?php
	session_start();

	$n1 = rand(0,10);
	$n2 = rand(0,10);

	$_SESSION['r'] = $n1+$n2;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verificador de Humanos</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Verificador de Humanos</h1>

	<form method="POST" action="verificador.php">
		<?php echo $n1.'+'.$n2 ?>
		<input type="number" name="soma">
		<input type="submit" value="Verificar">
	</form>

</body>
</html>