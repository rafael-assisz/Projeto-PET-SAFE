<!--?php 
ini_set('display_errors', 'off');
 ?-->

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<h1> Login </h1>

	<?php 

	if($_POST['ok'] == ""){ 
	?>

	<form method="post" action="login"> 

		<label for="email"> Digite seu e-mail:</label>
		<input type="text" name="email"> 

		<label for="senha"> Digite sua senha:</label>
		<input type="password" name="senha"> 

		<input type="submit" name="ok" value="confirmar">

	<?php 
	}

	else{ 
		include ("conexao.php"); 

		$sql = "insert into usuarios
		(email, senha) VALUES ( 
		'" . $_POST['email'] ."', 
		'" . $_POST['senha'] . "');";

		mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "email: " . $_POST['email'] . "<br>";
		echo "senha: " . $_POST['senha'] . "<br>";
	}
	?>

	</form> 
</body>

</html>