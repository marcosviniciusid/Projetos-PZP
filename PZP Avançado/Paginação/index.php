<?php

try {
	$dns = "mysql:dbname=paginacao;host=localhost", "root", "";
	$dbuser = "root";
	$dbpass = "";
	$pdo = new PDO($dns, $dbuser, $dbpass);

} catch (PDOException $e) {
	die($e->getMessage());
}
/*
	1. Calcular a quantidade total de páginas
	2. Definir o $p.
	3. Fazer a query com LIMIT
*/

$qt_por_pagina = 10;


$total = 0;
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];
$paginas = $total / $qt_por_pagina;


$pg = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
 	$pg = addslashes($_GET['p']);
} 
$p = ($pg - 1) * $qt_por_pagina;

$sql = "SELECT * FROM posts LIMIT $p, $qt_por_pagina";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $item) {
		echo $item['id'].' - '.$item['titulo'].'<br>';
	}
}

echo "<hr>";
echo "TOTAL DE PAGINAS: ".$paginas;

for ($q=0; $q < $paginas ; $q++) { 
	echo '<a href="./?p='.($sql+1).'">[ '.($sql+1).' ]</a>';
}


?>