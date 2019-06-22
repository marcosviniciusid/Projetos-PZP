<?php

$dsn = "mysql:dbname=caixaeletronico;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
}

?>