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
	
		<h1>Animais achados</h1>
			
		<div class="lista">

		<?php		 
			
			include ("conexao.php");

			$sql = "select * from animaisAchados";
			$res = mysqli_query($con, $sql) or die ("erro" . mysqli_error($con) );

			echo "Registros: " . mysqli_num_rows($res);

			echo "<ul>";
			while ($linha = mysqli_fetch_array($res)){
				echo $linha['localA'] . "<br>";
				echo $linha['dataA'] . "<br><br>";
			}
			echo "</ul>";

			mysqli_close ($con);
			
		?>

		</div>

		<span class ="link">
			<a href="cadastro_achados.php">Voltar</a>
		</span>

	</body>
</html>