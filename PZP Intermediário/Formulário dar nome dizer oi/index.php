<!DOCTYPE html>
<html>
<head>
	<title>Exercício</title>
</head>
<body>
	<form method="POST">
		<h3>Qual seu nome?</h3>
		<input type="text" name="nome">
		<input type="submit">
	</form><br>
	<?php	
		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = $_POST['nome'];
			echo "Olá, ".$nome."!";
		}
	?>
</body>
</html>