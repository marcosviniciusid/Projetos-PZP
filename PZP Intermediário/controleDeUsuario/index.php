<?php 
	// Importando as configurações da conexão com o banco de dados
	require 'config.php';
?>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
	<h1>Controle de usuários</h1>
</header>
<section class="sessao_options">
	<a href="adicionar.php">Adicionar Novo Usuário</a>
</section>


<table border="0" width="100%">
	<thead id="nao">
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</thead>
	<tbody>
		<?php
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
			// Sempre fazer essa verificação. Verificando se tem mais de 0 registros (linhas)
			//
			if ($sql->rowCount() > 0) {
				// fetchAll pegando todos os resultados e passando pra variavel usuarios
				foreach ($sql->fetchAll() as $usuario) {
					echo "<tr class='tr'>";
						echo "<td>".$usuario['nome']."</td>";
						echo "<td>".$usuario['email']."</td>";
						echo "<td><a href='editar.php?id=".$usuario['id']."'>Editar</a> - <a href='excluir.php?id=".$usuario['id']."'>Excluir</a></td>";
					echo "</tr>";
				}
			} else {
				echo "Algo errado";
			}
		?>
	</tbody>
</table>