<?php
	try {
		$pdo = new PDO("mysql:dbname=sistema_comentarios;host=localhost", "root", "");
	} catch (PDOException $e) {
		echo "ERRO na conexão.".$e->getMessage();
		exit;
	}

	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = $_POST['nome'];
		$msg = $_POST['msg'];

		$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":msg", $msg);
		$sql->execute();
	}
?>

<fieldset>
	<form method="POST">
		Nome:<br>
		<input type="text" name="nome"><br><br>

		Mensagem:<br>
		<textarea name="msg"></textarea><br><br>

		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<br><br>

<strong>Nome da pessoa</strong>
A mensagem fica aqui
<hr>

<?php

	$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $mensagem):
			?>
			<strong><?php echo $mensagem['nome']; ?></strong><br>
			<?php echo $mensagem['msg']; ?>
			<hr>
			<?php
		endforeach;
	}
	else {
		echo "Não há mensagens.";
	}
	
?>
