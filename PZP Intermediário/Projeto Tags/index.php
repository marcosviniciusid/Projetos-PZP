<?php

try {
	$dsn = "mysql:dbname=projetotags;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
	$lista = $sql->fetchAll();



	$carac = array();

	foreach ($lista as $usuario) {
		$palavras = explode(",", $usuario['caracteristicas']);
		foreach ($palavras as $palavra) {
			$palavra = trim($palavra);

			if (isset($carac[$palavra])) {
				$carac[$palavra]++;
			} else {
				$carac[$palavra] = 1;
			}
		}
	}

	// ORDENAR ARRAY DO MAIOR PARA O MENOR
	arsort($carac);

	$palavras = array_keys($carac);
	$contagens = array_values($carac);

	$maior = max($contagens);

	$tamanhos = array(11, 15, 20, 30);

	for ($x=0;$x<count($palavras);$x++) {

		$n = $contagens[$x] / $maior;
		print_r($n);
		$h = ceil($n * count($tamanhos));
		echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]." (".$contagens[$x].")</p>";

	}
}

?>