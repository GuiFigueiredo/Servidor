<html>

	<head>
		<title>Formulario</title>
		<meta charset ="utf-8"/>
		<style><link rel="stylesheet" type="text/css" href="agradecimentos.css"></style>
	</head>
		<body>
		<?php 
		$nome = $_GET['nome'];
		$endereco = $_GET['endereco'];
		$numero= $_GET['numero'];
		$cep= $_GET['cep'];
		$telefone= $_GET['telefone'];
		$uf= $_GET['uf'];
		$pais= $_GET['pais'];
		$email=  $_GET['email'];
		$rg= $_GET['rg'];
		$cpf= $_GET['cpf'];
		$time= $_GET['time'];
		
		echo "Obrigado por se inscrever<br> ";
		echo "Verfique seus dados abaixo:<br><br>";
		
		echo ">Nome: $nome<br>";
		echo ">endereco: $endereco<br>";
		echo ">numero: $numero<br>";
		echo ">cep: $cep<br>";
		echo ">telefone: $telefone<br>";
		echo ">uf: $uf<br>";
		echo ">pais: $pais<br>";
		echo ">email: $email<br>";
		echo ">rg: $rg<br>";
		echo ">cpf: $cpf<br>";
		echo ">time: $time<br>";
		
		
		
		
		
		?>
		</body>

</html>