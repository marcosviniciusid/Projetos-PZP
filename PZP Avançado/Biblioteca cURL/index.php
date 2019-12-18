<?php

// função? uma das principais junto com a GD
// fazer requisição pra outros sites externos.
// Integração com outros webservers
// é muito boa em Requisições hosts

// Iniciar biblioteca

$ch = curl_init();

// Indicar a URL que vai ser feita a requisição

curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Bonieky&idade=90&sexo=masculino");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);

curl_close($ch);

print_r($resposta);

?>