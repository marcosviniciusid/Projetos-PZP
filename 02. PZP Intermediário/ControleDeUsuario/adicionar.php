<?php
require 'config.php';

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
	<h1>Controle de usuários</h1>
</header>
<div class="voltar">
	<a href="index.php">Voltar</a>
</div>
<div class="form">
	<form method="POST">
		Nome:<br>
		<input type="text" name="nome"><br><br>
		Email: <br>
		<input type="text" name="email"><br><br>
		Senha: <br>
		<input type="password" name="senha"><br><br>

		<input id="enviar" type="submit" value="Cadastrar">
	</form>
</div>