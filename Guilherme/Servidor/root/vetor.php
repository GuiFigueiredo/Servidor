<html>
<head>
	<title> Aula épica</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
 	
	// Criação do Array
		$carros = array('Palio'=>"anderson",'Corsa','Gol',"Siena"=>"davi é um cara legal, davi é um gênio");
		
		echo "o carro é do ". $carros['Palio']."<br>"; // Resultado Corsa
		echo $carros["Siena"]."<br>"; //Resultado Siena
		
		// fazendo exemplo do w3Schools
		
		echo "<h1>Exemplo: w3Schools</h1>";
		echo '<p>Quantos anos tem  Peter Davi Anderson Gian Francisca Guilherme ?</p>';
		
		$age = array("Peter"=>"35","Davi"=>"17","Anderson"=>"23","Gian"=>"22","Francisca"=>"19","Guilherme"=>"21");
		
		echo 'Peter tem ' . $age["Peter"]. ' anos <br>';
		echo 'Anderson tem '. $age['Anderson']. 'anos <br>';
		echo 'Gian tem ' .$age['Gian']. 'anos <br>';
		echo 'Davi tem ' .$age['Davi']. 'anos <br>';
		echo 'Francisca tem ' .$age['Francisca']. 'anos <br>';
		echo 'Guilherme tem ' .$age['Guilherme']. 'anos <br>';
		

	  ?>

</body>
</html>