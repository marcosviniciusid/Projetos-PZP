<?php


try {
	$pdo = new PDO("mysql:dbname=esqueci_senha;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
}