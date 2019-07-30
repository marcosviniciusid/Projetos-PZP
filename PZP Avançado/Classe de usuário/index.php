<?php

	require 'usuario.php';

	$usuario = new Usuario(5);
	$usuario->delete();

	/*
	echo "Meu nome é: ".$usuario->getNome();

	$usuario->setEmail("novoemail@gmail.com");
	$usuario->setSenha("12300");
	$usuario->setNome("NOVO Teste");
	$usuario->salvar();

	echo "Usuário alterado com sucesso!";
	*/

?>