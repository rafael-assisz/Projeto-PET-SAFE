<?php 

 ini_set('display_errors', 'on');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>ANIMAIS DOADOS</title>
		<link rel="stylesheet" type="text/css" href="teste.css">
	</head>
	
	<body>

		<h1>Cadastrar animal para doação</h1>
		
		<?php
		
			if ($_POST['ok'] != "CONFIRMAR") {
		
		?>	
		
		<div id="container">
			<form action="cadastrodoacoes" method="post">  
				<label for="dataNascimento">Data de nascimento:</label>
				<input type ="text" name="dataNascimento" id ="dataNascimento"><br><br>

				<select name="castrado">
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
  				</select>

				<select name="vacinado">
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
  				</select>
				
				<input type="submit" name="ok" value="Confirmar"><br><br>
			</form>
		</div>
		
		<?php
		
			}	
			else { 
				echo "<div class='lista'>";

				include ("conexao.php");

				$sql= "INSERT INTO cadastro (dataNascimento,castrad,vacinad) VALUES ('" . $_POST['dataNascimento'] . "','" . $_POST['castrad'] . "','" . $_POST['vacinad'] . "');";
				mysqli_query ($con, $sql) or die ("ERRO" . mysqli_error($con));
			
				echo "<h2>Animal cadastrado com sucesso</h2>";
				echo "<strong>	nome: </strong> " .     $_POST ['nome_cliente'] . "<br>";
				echo "<strong>	telefone: </strong> " . $_POST ['telefone'] . "<br>";
				echo "<strong>	endereco: </strong> " . $_POST ['endereco'];
				mysqli_close ($con);
				echo "</div>";
			}
		
		?>

	</body>

</html>