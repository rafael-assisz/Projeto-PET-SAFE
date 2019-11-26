<?php 
ini_set('display_errors', 'off');
 ?>

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
		
			<label for="email">Digite seu e-mail:</label>
			<input type="text" name="email">

			<label for="senha">Digite sua senha:</label>
			<input type="text" name="senha">

			<label for="confirmarsenha:">Confirme a sua Senha:</label>
			<input type="text" name="confirmarsenha">

			<input type="submit" name="ok" value="Confirmar">

		</form>
	</div>
	<?php
	}
	
	else {
		echo "<div class = ''>";

		include ("conexao.php");

		$sql = "insert into usuarios
		(email,senha) 
		VALUES (
			'" . $_POST['email'] . "',
			'" . $_POST['senha'] . "',
		);";

	    mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "email: " . $_POST['email'] . "<br>";
		echo "senha: " . $_POST['senha'] . "<br>";

		mysqli_close($con);
		
	echo "</div>";		

	}
	 ?>

</body>
</html>