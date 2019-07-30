<?php
	require 'usuarios.php';

	$u = new Usuarios();
	$res = $u->selecionar(1);

	print_r($res);

?>