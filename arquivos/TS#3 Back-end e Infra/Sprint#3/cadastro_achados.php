<?php 

 ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>

		<meta charset="utf-8">
		<title>ANIMAIS ACHADOS</title>
		<link rel="stylesheet" type="text/css" href="">

	</head>
	
	<body>

		<h1>Cadastrar animal achado</h1>
		
		<?php

			if ($_POST['ok'] != "CONFIRMAR") {

		?>	
		
		<div id="container">
			<form action="cadastro_achados.php" method="post">  	
				<label for="localA">Local onde foi achado:</label><br>
				<input type="text" name="localA" id="localA"> <br><br>

				<label for="dataA">Data:</label><br>
				<input type="text" name="dataA" id="dataA"><br><br>

				<input type="submit" name="ok" value="CONFIRMAR"><br><br>
			</form>
		</div>

		<?php

			}	
			else { 

				echo "<div class='lista'>";

				include ("conexao.php");

				$sql= "INSERT INTO animaisAchados (localA, dataA) 
				VALUES ('" . $_POST['localA'] . "','" . $_POST['dataA'] . "');";

				mysqli_query ($con, $sql) or die ("erro");
			
				echo "<h2> cadastro realizado com sucesso </h2>";
				echo "<strong>	Local: </strong> " . $_POST ['localA'] . "<br>";
				echo "<strong>	Data: </strong> " . $_POST ['dataA'] . "<br><br>";
				mysqli_close ($con);

				echo "</div>";

			}

		?>

		<span class ="link">
			<a href="visualizar_achados.php">Ver Animais Achados</a>
		</span>

	</body>
</html>