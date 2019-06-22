<?php

$dsn = "mysql:dbname=convite;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = NEW PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "ERRO".$e->getMessage();
}



?>