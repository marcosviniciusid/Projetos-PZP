<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "PDO | Conexão falhou".$e->getMessage();
}