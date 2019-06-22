<?php  

try {
	$pdo = new PDO("mysql:dbname=ordenar_resultados;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Falhou a conexão".$e->getMessage();
	exit;
}

		if (isset($_GET['ordem']) && !empty($_GET['ordem']) ) {
			$ordem = addslashes($_GET['ordem']);

			$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
		} else {
			$ordem = '';
			$sql = "SELECT * FROM usuarios";
		}

?>
<form method="GET">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo ($ordem=="nome")?'selected=selected':''; ?>>Pelo nome</option>
		<option value="idade" <?php echo ($ordem=="idade")?'selected=selected':''; ?>>Pela Idade</option>
	</select>
</form>
<table border="1">
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php

		$sql = $pdo->query($sql);

		if ($sql->rowCount() > 0 ){
			foreach($sql->fetchAll() as $usuarios):
			?>
				<tr>
					<td> <?php echo $usuarios['nome']; ?></td>
					<td> <?php echo $usuarios['idade']; ?></td>
				</tr>
			<?php
			endforeach;
		}
	?>
	
</table>