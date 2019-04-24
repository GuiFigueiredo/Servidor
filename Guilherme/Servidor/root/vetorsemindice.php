<html>
<head>
	<title></title>
</head>
<body>
	<?php
 	
	// Adicionando novos elementos
	$carros[12]="Mitsubishi";
	$carros[4]='Clio';
	$carros[11]='Versa';
	$carros[]="Sandero";
	
	echo $carros[4]."<br>"; // resultado Clio
	echo $carros[12]."<br>"; // Mitsubishi resultado
	echo $carros[11]."<br>"; // resultado Versa
	echo $carros[13]."<br>";
	
	  ?>

</body>
</html>