<?php 

if (isset($_POST['nome'] && !empty($_POST['nome']))) {

 	$nome = addslashes($_POST['nome']);
 	$email = addslashes($_POST['email']);
 	$msg = addslashes($_POST['msg']);

 	$para = "teste@gmail.com";
 	$assunto = "Pergunta do contato";
 	$corpo = "Nome: ".$nome."- E-mail: ".$email."- Mensagem: ".$msg;
 	$cabecalho = "From: suporte@gmail.com.br"."\r\n".
 				  "Reply-To: ".$email."\r\n".
 				  "X-Mailer: PHP/".phpversion();

 	mail($para, $assunto, $corpo, $cabecalho);

 	echo "<h2>E-mail enviado com sucesso!</h2>"
 	exit;
 } 

?>

<form method="POST">
	Nome: <br>
	<input type="text" name="nome">
	E-mail: <br>
	<input type="email" name="email">

	Mensagem: <br>
	<textarea name="msg"></textarea>

	<input type="submit" value="Enviar">
</form>