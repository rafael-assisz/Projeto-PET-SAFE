<?php 
	ini_set('display_errors', 'off');

	function selectoption($tabela){
		echo "<select name='" . $tabela . "'>";
		$sql = "SELECT * FROM " . $tabela;
		$res = mysqli_query($con, $sql) or die('Erro: ' . mysqli_error($con));
		$qtd = mysqli_num_rows($res);
		if ($qtd > 0) {
			while ($opcao = mysqli_fetch_array($res)) {
			  	echo "<option value='" . $opcao['id_' . $tabela] . "'>" . $opcao['nome'] . "</option>";
  			}
		}
		else {
			echo "Nenhum registro";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

    <H1>Cadastro de  Animais</H1>
	
	<?php 

	if($_POST['ok'] == ""){

		include ("conexao.php");

		?>	
		<div class="">
		
		<form method="post" action="cadastroanimais.php">		

			<label for="nome">Nome:</label>
			<input type="nome" name="nome">

			<?php
				function selectoption('raca');
			?>

			<?php  
				function selectoption('porte');
			?>

			<?php  
				function selectoption('pelagem');
			?>

			<label for="idade:">Idade aproximada:</label>
			<input type="text" name="idade">

			<?php  
				function selectoption('indole');
			?>

			<select name="sexo">
				<option value="macho">Macho</option>
				<option value="femea">Fêmea</option>
  			</select>
			
			<input type = "file" name="foto" id="foto"><br><br>
			
			<input type="submit" name="ok" value="Confirmar">
		</form>
	</div>
	<?php
	}
	
	else {
		echo "<div class = ''>";

		$sql = "insert into cadastro (nome,local,data,raca,porte,pelagem,idade,indole,sexo)
		VALUES 	('". $_POST['nome'] . "','". $_POST['local'] . "','". $_POST['data'] . "','". $_POST['raca'] . "','". $_POST['porte'] . "','". $_POST['pelagem'] . "','". $_POST['idade'] . "','". $_POST['indole'] . "','". $_POST['sexo'] ."');";

	    mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "nome: " . $_POST['nome'] . "<br>";
		echo "local: " . $_POST['local'] . "<br>";
		echo "data: " . $_POST['data'] . "<br>";
		echo "raca: " . $_POST['raca'] . "<br>";
		echo "porte: " . $_POST['porte'] . "<br>";
		echo "pelagem: " . $_POST['pelagem'] . "<br>";
		echo "idade: " . $_POST['idade'] . "<br>";
		echo "indole: " . $_POST['indole'] . "<br>";
		echo "sexo: " . $_POST['sexo'] . "<br>";

		mysqli_close($con);
		
	echo "</div>";		

	}
	 ?>

	<span class ="link">
			<a href="achados.php"></a>
	</span>
 	

</body>
</html>