<?php
session_start();

if (isset($_POST['soma']) && !empty($_POST['soma'])) {
	$s = addslashes(intval($_POST['soma']));

	if ($_SESSION['r'] == $s) {
		echo "Você é Humano";
	} else {
		echo "Você é Fake";
	}
}
?>
<hr><br>
<a href="index.php">Voltar</a>