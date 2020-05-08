<?php
session_start();
require 'config.php';

if (isset($_POST['email']) && !empty($_POST['senha'])) {

	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		$usuario = $sql->fetch();

		$_SESSION['logado'] = $usuario['id'];
		header("Location: index.php");
		exit;
	}



}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>

	<form method="POST">
		<strong>E-mail:</strong><br>
		<input type="email" name="email"><br>
		<strong>Senha:</strong><br>
		<input type="password" name="senha"><br><br>
		<input type="submit"><br><br><br>
	</form>
	<strong><a href="cadastrar.php">Cadastrar</a></strong>

</body>
</html>