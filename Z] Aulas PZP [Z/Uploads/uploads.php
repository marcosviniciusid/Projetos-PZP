<?php

echo('<pre>');
print_r($_FILES);
echo('</pre><br><br>');

if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos'])) {
	
	if (count($_FILES['arquivos']['tmp_name']) > 0) {
		
		$num_max = count($_FILES['arquivos']['tmp_name']);
		$soma = 0;
		for ($n=0; $n < $num_max ; $n++) { 

			if ($_FILES['arquivos']['error'][$n] == 1) {
				$soma = $soma+1;
				$img[] = $n;
			}

			$nomedoarquivo = md5(time().rand(0,999)).$_FILES['arquivos']['name'][$n];
			move_uploaded_file($_FILES['arquivos']['tmp_name'][$n], 'arquivos/'.$nomedoarquivo);
		}
		echo $soma." Arquivos com <strong>erro(s)</strong>. (Verifique o tamanho do arquivo)<br><br>";
		foreach ($img as $value) {
			echo "O arquivo ".$_FILES['arquivos']['name'][$value]." não foi enviado.<br>";
		}
		
		echo "<br>Arquivos enviados!";
	}
}


?>