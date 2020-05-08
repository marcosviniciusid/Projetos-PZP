<?php
	require 'config.php';

	if (isset($_GET['id']) && !empty($_GET['id'])){
		$id = addslashes($_GET['id']);

		$sql = "DELETE FROM usuarios WHERE id = '$id'";
		$pdo->query($sql);

		echo "Usuário deletado com sucesso!";
		header("Refresh: 1, index.php");
	} else {
		header("Location: index.php");
	}
?>