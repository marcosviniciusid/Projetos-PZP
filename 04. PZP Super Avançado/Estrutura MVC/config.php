<?php

require 'enviroment.php';

$config = array();
if(ENVIROMENT == 'development') {
	define("BASE_URL", "http://localhost/GitHub%20-%20marcosviniciusid/Projetos-PZP/PZP%20Super%20Avan%C3%A7ado/Estrutura%20MVC/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://meusite.com.br");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

global $db;

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}


?>