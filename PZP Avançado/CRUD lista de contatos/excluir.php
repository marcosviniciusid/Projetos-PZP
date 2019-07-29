<?php

include 'contato.class.php';
$contato = new Contato();

if (!empty($_GET['email'])) {
	$email = $_GET['email'];

	$contato->excluir($email);

	echo "--------".$email."--------<br>";
	echo "Contato excluído com sucesso!<br><br>";
	echo "Aguarde ser redirecionado.....";
} 

header("Location: index.php");
	

