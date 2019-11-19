<?php 
ini_set('display_errors', 'off');
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro do Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

    <H1>Cadastro do Usuário</H1>
	
	<?php 

	if($_POST['ok'] == ""){
	?>	
		<div class="">
		<form method="post" action="cadastrousuario.php">
			
			<!-- tipo? -->

			<label for="nome">Nome:</label>
			<input type="text" name="nome">
			
			<label for="email">Email:</label>
			<input type="text" name="email">

			<label for="senha">Senha:</label>
			<input type="text" name="senha">

			<label for="confirmarsenha:">Confirme a sua Senha:</label>
			<input type="text" name="confirmarsenha">
			
			<label for="rg">RG:</label>
			<input type="text" name="rg">

			<label for="data_nascimento">Data de Nascimento:</label>
			<input type="text" name="data_nascimento">

			<label for="telefone">Telefone:</label>
			<input type="text" name="telefone">
			
			<label for="cep">CEP:</label>
			<input type="text" name="cep">
			
			<label for="numero_casa">Numero da casa:</label>
			<input type="text" name="numero_casa">
			
			<label for="endereco:">Rua:</label>
			<input type="text" name="endereco">

			<label for="bairro:">Bairro:</label>
			<input type="text" name="bairro">

			<label for="cidade">Cidade:</label>
			<input type="text" name="cidade">
			
			<label for="estado:">Estado:</label>
			<input type="text" name="estado">

			
			<input type="submit" name="ok" value="Confirmar">

		</form>
	</div>
	<?php
	}
	
	else {
		echo "<div class = ''>";

		include ("conexao.php");

		$sql = "insert into cadastro (data_nascimento,rg,nome,telefone,endereco,numero_casa,estado,cidade,cep,bairro)
		VALUES 	('". $_POST['data_nascimento'] . "','". $_POST['rg'] . "','". $_POST['nome'] . "','". $_POST['telefone'] . "','". $_POST['endereco'] . "','". $_POST['numero_casa'] . "','". $_POST['estado'] . "','". $_POST['cidade'] . "','". $_POST['cep'] . "','". $_POST['bairro'] "');";

	    mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "data_nascimento: " . $_POST['data_nascimento'] . "<br>";
		echo "rg: " . $_POST['rg'] . "<br>";
		echo "nome: " . $_POST['nome'] . "<br>";
		echo "telefone: " . $_POST['telefone'] . "<br>";
		echo "endereco: " . $_POST['endereco'] . "<br>";
		echo "numero_casa: " . $_POST['numero_casa'] . "<br>";
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