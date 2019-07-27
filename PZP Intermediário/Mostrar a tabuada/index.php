<!DOCTYPE html>
<html>
<head>
	<title>Mostrar a tabuada</title>
	<meta charset="utf-8">
</head>
<body>
	<table border='1'>
		<?php
			$arrayNum = array(1,2,3,4,5,6,7,8,9);
			$arrayNumCount = count($arrayNum);
			
			for ($i=1; $i <= $arrayNumCount ; $i++) { 
				echo '<tr>';
					for ($j=1; $j <= $arrayNumCount ; $j++) { 
						
							echo "<td>".$i*$j."</td>";
					}
				echo '</tr>';  	
			}
		?>
	</table>
</body>
</html>