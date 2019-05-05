<?php  

// No caso de arquivos, independente se é GET ou POS, recebe-se assim
$arquivo = $_FILES['arquivo'];

// Verificando se existe.
//print_r($arquivo)."<br><br>";  //Pra achar o tmp_name, onde esta sendo salvo temporariamente
if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

	//print_r(time());

	// gerando nome aleatorio da aula
	$nomedoarquivo = md5(time().rand(0,99)).$arquivo['name'];
	// meu jeito
	//$nomedoarquivo = time().$arquivo['name'];

	move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomedoarquivo);
	echo "Arquivo enviado com sucesso";
} else {
	echo "Arquivo muito grande";
}

?>
<div><img src="arquivos/<?php echo $nomedoarquivo; ?>" width="auto" height="auto"> </div>

<?php

	if (isset($_FILES['archive'])) {

		/*
		// Envio de 1 único arquivo
		$nome = $_FILES['arquivo']['name']; // arquivo.jpg

		// Envio de múltiplos arquivos
		$nome = $_FILES['arquivo']['name']; // Array */

		if (count($_FILES['archive']['tmp_name']) > 0) {
			for ($q=0;$q < count($_FILES['archive']['tmp_name']);$q++){
				
				$nomedoarchive = md5($_FILES['archive']['name'][$q].time().rand(0,999)).'.jpg';

				move_uploaded_file($_FILES['archive']['tmp_name'][$q], 'arquivos/'.$nomedoarchive);

				
			} echo "Enviado";
		}
	}

?>



























