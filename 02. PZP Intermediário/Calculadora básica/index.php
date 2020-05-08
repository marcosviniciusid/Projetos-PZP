<!DOCTYPE html>
<html>
<head>
	<title>Calculadora Básica</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="GET" action="calc.php">
		<input type="number" name="n1" step="0.001">
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">/</option>
			<option value="*">*</option>
		</select>
		<input type="number" name="n2" step="0.001">
		<input type="submit" name="Calcular">
	</form>
</body>
</html>