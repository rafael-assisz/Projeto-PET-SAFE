<?php 

 ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>

		<meta charset="utf-8">
		<title>ANIMAIS PERDIDOS</title>
		<link rel="stylesheet" type="text/css" href="">

	</head>
	
	<body>

		<h1>Cadastrar animal perdido</h1>
		
		<?php

			if ($_POST['ok'] != "CONFIRMAR") {

		?>	
		
		<div id="container">
			<form action="cadastro_perdidos.php" method="post">  
				<label for="dataP">Data:</label><br>
				<input type="text" name="dataP" id="dataP"><br><br>
		
				<label for="localP">Local onde foi perdido:</label><br>
				<input type="text" name="localP" id="localP"> <br><br>
		
				<label for="nomeDono">Nome do dono:</label><br>
				<input type="text" name="nomeDono" id="endereco"><br><br>

				<input type="submit" name="ok" value="CONFIRMAR"><br><br>
			</form>
		</div>

		<?php

			}	
			else { 

				echo "<div class='lista'>";

				include ("conexao.php");

				$sql= "INSERT INTO animaisPerdidos (dataP, localP, nomeDono) 
				VALUES ('" . $_POST['dataP'] . "','" . $_POST['localP'] . "','" . $_POST['nomeDono'] . "');";

				mysqli_query ($con, $sql) or die ("erro");
			
				echo "<h2> cadastro realizado com sucesso </h2>";
				echo "<strong>	Data: </strong> " . $_POST ['dataP'] . "<br>";
				echo "<strong>	Local: </strong> " . $_POST ['localP'] . "<br>";
				echo "<strong>	Endereço: </strong> " . $_POST ['nomeDono'] . "<br><br>";
				mysqli_close ($con);

				echo "</div>";

			}

		?>

		<span class ="link">
			<a href="visualizar_perdidos.php">Ver Animais Perdidos</a>
		</span>

	</body>
</html>