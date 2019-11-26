<!--?php 
ini_set('display_errors', 'off');
 ?-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro do Usuário</title>
	<meta charset="utf-8">
</head>
<body>

    <H1>Cadastro do Usuário</H1>
	
	<?php 

	if($_POST['ok'] == ""){
	?>	
		<form method="post" action="cadastrousuario.php">

			<label for="nome">Digite seu nome:</label>
			<input type="text" name="nome">
			
			<label for="rg">Digite seu RG:</label>
			<input type="text" name="rg">

			<label for="telefone">Digite seu telefone:</label>
			<input type="text" name="telefone">
			
			<label for="dataNascimento">Data de Nascimento:</label>
			<input type="date" name="dataNascimento">
			
			<label for="endereco">Digite seu endereço:</label>
			<input type="text" name="endereco">
			
			<label for="numeroCasa">Informe o número da sua casa:</label>
			<input type="number" name="numeroCasa">
			
			<label for="bairro:">Digite seu bairro:</label>
			<input type="text" name="bairro">

			<label for="estado:">Digite seu estado:</label>
			<input type="text" name="estado">

			<label for="cidade">Digite sua cidade:</label>
			<input type="text" name="cidade">
			
			<label for="cep">Digite seu cep:</label>
			<input type="text" name="cep">
			
			<input type="submit" name="ok" value="Confirmar">

		</form>
	</div>
	<?php
	}
	
	else {
		echo "<div class = ''>";

		include ("conexao.php");

		$sql = "insert into usuarios 
		(nome,dataNascimento,numeroCasa,rg,telefone,endereco,estado,cidade,cep,bairro) 
		VALUES (
			'" . $_POST['nome'] . "',
			'" . $_POST['dataNascimento'] . "',
			'" . $_POST['numeroCasa'] . "'
			'" . $_POST['rg'] . "'
			'" . $_POST['telefone'] . "',
			'" . $_POST['endereco'] . "',
			'" . $_POST['estado'] . "',
			'" . $_POST['cidade'] . "',
			'" . $_POST['cep'] . "',
			'" . $_POST['bairro'] . "'
		);";

	   mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "nome: " . $_POST['nome'] . "<br>";
		echo "dataNascimento: " . $_POST['dataNascimento'] . "<br>";
		echo "numeroCasa: " . $_POST['numeroCasa'] . "<br>";
		echo "rg: " . $_POST['rg'] . "<br>";
		echo "telefone: " . $_POST['telefone'] . "<br>";
		echo "endereço: " . $_POST['endereco'] . "<br>";
		echo "estado: " . $_POST['estado'] . "<br>";
		echo "cidade: " . $_POST['cidade'] . "<br>";
		echo "cep: " . $_POST['cep'] . "<br>";
		echo "bairro: " . $_POST['bairro'] . "<br>";

		mysqli_close($con);
		
	echo "</div>";		

	}
	 ?>

</body>
</html>