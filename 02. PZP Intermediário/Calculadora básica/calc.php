<?php

if (!empty($_GET['n1']) && !empty($_GET['n1']) && !empty($_GET['op'])) {
	$n1 = addslashes(floatval($_GET['n1']));
	$n2 = addslashes(floatval($_GET['n2']));
	$op = addslashes($_GET['op']);

	$visor = $n1.' '.$op.''.$n2." = ";
	print_r($visor);

	switch ($op) {
		case '+':
			$result = $n1+$n2;
			echo $result;
			break;
		case '-':
			$result = $n1-$n2;
			echo $result;
			break;
		case '/':
			$result = $n1/$n2;
			echo $result;
			break;
		case '*':
			$result = $n1*$n2;
			echo $result;
			break;

		default:
			echo "Verifique os dados preenchidos.";
			break;
	}
}

?>
<br><br>
<a href="index.php">Voltar</a>