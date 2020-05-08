<?php

include 'contato.class.php';
$contato = new Contato();

if (!empty($_GET['email'])) {
	$email = $_GET['email'];

	$info = $contato->getNome($email);

} else {
	header("Location: index.php");
	exit;
}

?>

<h1>Editar</h1>

<form method="POST" action="editar_submit.php">

	<input type="hidden" name="email" value="<?php echo $info['email']; ?>">

	Nome: <br>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>"><br><br>

	E-mail: <br>
	<?php echo $info['email']; ?><br><br>

	<input type="submit" value="Salvar">

</form>