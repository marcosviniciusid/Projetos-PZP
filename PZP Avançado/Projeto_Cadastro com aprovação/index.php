<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	require 'config.php';

	$pdo->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
	$id = $pdo->lastInsertId();
	$md5 - md5($id);

	$link = "htto://www.b7web.com.br/cadastroconfirma/confrmar.php?h=".$md5;

	$assunto = "Confirme seu cadastro";
	$msg = "Clique no link abaixo para confirmar seu cadastro\n\n".$link;
	$headers = "From: suporte@b7web.com.br"."\n\n".
				"X-Mailer: PHP/".phpversion();

	mail($mail, $assunto, $msg, $headers);

	echo "<h2>OK! Confirme seu cadastro agora!</h2>"
	exit;

}
?>

<form method="POST">
	Nome: <br>
	<input type="text" name="nome"><br><br>
	E-mail: <br>
	<input type="email" name="email"><br><br>
	
	<input type="submit" value="Cadastrar">
</form>