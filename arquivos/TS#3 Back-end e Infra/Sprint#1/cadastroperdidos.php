<?php 

 ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>ANIMAIS PERDIDOS</title>
		<link rel="stylesheet" type="text/css" href="teste.css">
	</head>
	
	<body>

		<h1>Cadastrar animal perdido</h1>
		
		<?php
		
			if ($_POST['ok'] != "CONFIRMAR") {
		
		?>	


		<div id="container">
			<form action="cadastroperdidos.php" method="post">  
				<label for="data">Data:</label>
				<input type ="date" name="data" id ="data"><br><br>

				<label for="local">Local onde foi perdido:</label>
				<input type="text" name="local" id="local"> <br><br>
		
				<label for ="nomeDono">Nome do dono:</label>
				<input type ="text" name="nomedono" id = "nomeDono"> <br><br>
				
				<input type="submit" name="ok" value="Confirmar"><br><br>
			</form>
		</div>
		
		<?php
			}	
			else { 
				echo "<div class='lista'>";

				include ("conexao.php");

				$sql= "INSERT INTO cadastro (data,local,nomeDono) 
				VALUES ('" . $_POST['data'] . "','" . $_POST['local'] . "','" . $_POST['nomeDono'] . "');";
				
				mysqli_query ($con, $sql) or die ("ERRO");
			
				echo "<h2>Animal cadastrado com sucesso</h2>";
				echo "<	data: " .     $_POST ['data'] . "<br>";
				echo "<	local: " . $_POST ['local'] . "<br>";
				echo "<	nome do dono: " . $_POST ['nomeDono'];
				mysqli_close ($con);
				echo "</div>";
			}
		
		?>

		<span class ="link">
			<a href="perdidos.php">Ver animais perdidos</a>
		</span>

	</body>

</html>