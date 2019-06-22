<?php
session_start();
require 'config.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		$dado = $sql->fetch();
		$_SESSION['id'] = $dado['id'];
		echo "Achou o EMAIL!";
		header("Location: index.php");
	}
}
if (isset($_POST['enviar'])) {
	echo "Ops, Login errado!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<div id="box">
		<div id="one">
			<img src="assets/login.svg" height="150" width="150">
			<div>
				<form method="POST">
					<input type="text" name="email" placeholder="E-mail"><br><br>
					<input type="password" name="senha" placeholder="Senha"><br><br>
					<input id="enviar" type="submit" name="enviar">
				</form>
			</div>
		</div>
		<div id="two">
			<div id="back">
				
			</div>
		</div>
	</div>
</body>
</html>
