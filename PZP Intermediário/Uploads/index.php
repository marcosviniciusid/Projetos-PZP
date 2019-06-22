<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data" action="uploads.php">
		<input type="file" multiple name="arquivos[]"><br><br>
		<input type="submit" value="Enviar arquivos">
	</form>

</body>
</html>