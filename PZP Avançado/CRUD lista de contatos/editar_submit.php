<?php
	include 'contato.class.php';
	$contato = new Contato();

	if (!empty($_POST['email'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];

		$contato->editar($nome, $email);

		echo "--- Alterado com sucesso! ---";

		header("Refresh: 2, index.php");
	}
