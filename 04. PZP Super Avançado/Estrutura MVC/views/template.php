<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
</head>
<body>
	<h1>Este é o topo</h1>
	<a href="<?php echo BASE_URL; ?>">HOME</a>
	<a href="<?php echo BASE_URL; ?>galeria">GALERIA</a>
	<hr>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

</body>
</html>