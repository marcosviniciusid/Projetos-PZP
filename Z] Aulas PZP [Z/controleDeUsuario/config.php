<?php
	// Definindo acesso ao banco de dados
	$dsn = "mysql:dbname=blog;host=localhost";
	// Dados do Acesso ao banco de dados
	$dbuser = "root";
	$dbpass = "";

	// Conexão com o banco de dados
	try {
		$pdo = new PDO ($dsn, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "PDO | Falhou a conexão: ".$e->getMessage();
	}
?>