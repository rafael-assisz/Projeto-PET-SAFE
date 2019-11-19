	<?php 

 ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	
	<body>
		<h1>Login</h1>
		<?php
		if ($_POST['ok'] != "Confirmar") {
		?>	
			<form action="." method="post">  

				<label for="email">Insira seu e-mail: </label>
				<input type="text" name="email" id="e-mail"> <br><br>
				
				<label for="senha">Insira sua senha: </label>
				<input type="password" name="senha" id="senha"><br><br>

				<input type ="submit" name="ok" value="Fazer login"> <br>  

				<a href=".">Esqueceu a senha?</a>   <a href=".">Deseja se cadastrar?</a>                                              

			</form>
		</div>

		<?php
	}	
		else { 
			echo "<div class='lista'>";
			include ("conexao.php");

			$sql = "INSERT INTO cadastro (nome, email, telefone, estado, cidade, imagemdocachorro, descricao, nomecachorro) 
			VALUES ('" . $_POST['nome'] . "','" . $_POST['email'] . "','" . $_POST['telefone'] . "','" . $_POST['estado'] . "','" . $_POST ['cidade']. "','" . $_POST['imagemdocachorro'] . "','" . $_POST['descricao'] . "','" . $_POST['nomecachorro'] . "');";
			 mysqli_query ($con, $sql) or die ("Foi encontrado algum erro, tente novamante...");
		
			// echo "<h2> cadastro realizado com sucesso </h2>";
			 //echo "<strong>	nome: </strong> " . $_POST ['nome'] . "<BR>";
			 //echo "<strong>	telefone: </strong> " . $_POST ['email'] . "<BR>";
			 //echo "<strong>	endereco: </strong> " . $_POST [telefone];
			//mysqli_close ($con);
			//echo "</div>";
		}

		?>

		<!--span class ="link">
			<a href="lista.php">Ver Registros</a>
		</span-->
	</body>
</html>