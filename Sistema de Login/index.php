<?php
session_start();

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
	echo "Área restrita...";
} else {
	header("Location: login.php");
}
if (isset($_POST['deslogar'])) {
	unset($_SESSION['id']);
	echo "Voltando para página de Login";
	header("refresh: 2, login.php");
}

?>

<form method="post" style="float: left;">
	<input type="submit" name="deslogar" value="Deslogar" style="margin-right: 10px;">
</form>
<hr>
<h3>Envio de arquivos pelo form</h3>

<form method="post" enctype="multipart/form-data" action="recebedor.php">
	<input type="file" name="arquivo">
	<input type="submit" name="">
</form>

<h3>Envio de arquivos multiplos pelo form</h3>
<form method="post" enctype="multipart/form-data" action="recebedor.php">
	<input type="file" multiple name="archive[]">
	<input type="submit" name="">
</form>





