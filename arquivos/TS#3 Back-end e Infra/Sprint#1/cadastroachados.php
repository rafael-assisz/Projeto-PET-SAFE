<?php 

 ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>ANIMAIS ACHADOS</title>
		<link rel="stylesheet" type="text/css" href="teste.css">
	</head>
	
	<body>

		<h1>Cadastrar animal perdido</h1>
		
		<?php
		
			if ($_POST['ok'] != "CONFIRMAR") {
		
		?>	
		
		<div id="container">
			<form action="cadastroachados" method="post">  
				<label for="local">Local onde foi achado::</label>
				<input type ="text" name="local" id ="local"><br><br>

				<label for="data">Data:</label>
				<input type="text" name="data" id="data"> <br><br>
				
				<input type="submit" name="ok" value="Confirmar"><br><br>
			</form>
		</div>
		
		<?php
		
			}	
			else { 
				echo "<div class='lista'>";

				include ("conexao.php");

				$sql= "INSERT INTO cadastro (nome_cliente, telefone, endereco) 
				VALUES ('" . $_POST['local'] . "','" . $_POST['data'] "');";
				
				mysqli_query ($con, $sql) or die ("ERRO");
			
				echo "<h2>Animal cadastrado com sucesso</h2>";
				echo "local: " .     $_POST ['local'] . "<br>";
				echo "data:  " . $_POST ['data'] . "<br>";
				mysqli_close ($con);
				echo "</div>";
			}
		?>

	</body>

</html>