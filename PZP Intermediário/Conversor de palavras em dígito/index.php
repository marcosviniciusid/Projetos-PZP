<!DOCTYPE html>
<html>
<head>
	<title>Conversor de palavras</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Conversor Palavra em Dígito</h3>
	<p>Exemplo: Dois,quatro,cinco</p>
	<form method="POST">
		<input type="text" name="palavras">
		<input type="submit" value="Converter">
	</form>
	<br><hr><br>
	<?php
	if (!empty($_POST['palavras'])) {
		$palavras = $_POST['palavras'];
		// Explode, pega a variavel e separa tudo após a virgula e monta uma array.
		$palav = explode(",", $palavras);

		// Fazendo um loop, pegando cada palavra do array e jogando em itens.
		foreach ($palav as $itens) {
			// Cada vez que roda, com o trim limpo os espaços que tem em itens, quando há.
			// Exemplo: Passou a primeira vez, $itens é igual a um
			// Se tiver espaço, ele limpa e vai para o switch
			$itens = trim($itens);
			// Escolha o um. Caso iten seja um, entra na condição
			switch ($itens) {
				case 'um':
				// adiciono o 1 no array iten. $iten[0] = 1
					$iten[] = 1;
					break;
				case 'dois':
					$iten[] = 2;
					break;
				case 'três':
					$iten[] = 3;
					break;
				case 'quatro':
					$iten[] = 4;
					break;
				case 'cinco':
					$iten[] = 5;
					break;
				case 'seis':
					$iten[] = 6;
					break;
				case 'sete':
					$iten[] = 7;
					break;
				case 'oito':
					$iten[] = 8;
					break;
				case 'nove':
					$iten[] = 9;
					break;
				case 'dez':
					$iten[] = 10;
					break;
				default:
					$iten[] = " Digite a palavra com virgula e sem espaço.";
					break;
			}
		}
		echo $palavras."<br>";
		if (count($iten) < 1) {
			print_r($iten[0]);
		} else {
			echo implode(",", $iten);
		}
		
	}
?>
	
</body>
</html>