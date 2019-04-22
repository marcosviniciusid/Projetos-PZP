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

<form method="post">
	<input type="submit" name="deslogar" value="Deslogar">
</form>