<?php
 
$arquivo = "imagem.jpeg"; //Guardando o nome da imagem

// Definindo o valor máximo de cada item

$largura = 200;
$altura = 200;

// pegar os valores originais da imagem

list($largura_original, $altura_original) = getimagesize($arquivo);

// proporção pra imagem.
// calcular o tamanho da imagem pra ficar dentro do parametro 

$ratio = $largura_original / $altura_original;

if($largura/$altura > $ratio) {
	$largura = $altura * $ratio;
} else {
	$altura = $largura / $ratio;
}

echo "L ORIGINAL: ".$largura_original." - "."A ORIGINAL: ".$altura_original."<br>";
echo "LARGURA: ".$largura." - ALTURA: ".$altura;

// Criando nova imagem
// Criando uma imagem, um novo documento
$imagem_final = imagecreatetruecolor($largura, $altura);
//Pegando a imagem mesmo. Imagem carregada
$imagem_original = imagecreatefromjpeg($arquivo);

// pegando a imagem e jogando dentro do documento


//imagecopyresized(); // redimensionada. vai somente diminuir. mt provavel do pixel se juntar um pouco e ficar pixalizada

imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original); // aqui não. Ele vai diminuir a proporção e reduzir os pixels tbm. Use esse

header("Content-Type: image/jpeg");

imagejpeg($imagem_final, "mini_imagem.jpeg", 70);


imagejpeg($imagem_final, null, 70);

// =================================================================

// 

?>