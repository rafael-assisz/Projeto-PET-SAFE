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

    <H1>Cadastro de Animais</H1>
	
	<?php 

	if($_POST['ok'] == ""){

		include ("conexao.php");

		?>	
		<div class="">
		
		<form method="post" action="cadastroanimais.php">		

			<label for="especie">Qual á especie do seu animal:</label>
			<select name="especie"> 
				<option =value="Aves">Aves</option>
				<option =value="Cachorro">Cachorro</option>
				<option =value="Aves">Gatos</option>
				<option =value="Aves">Outros</option>
			</select><br><br>

			<label for="indole">Qual o comportamento do seu animal: </label> 
			<select name="indole"> 
				<option value="agitado">Agitado</option>
				<option value="calmo">Calmo</option>
				<option value="bricalhao">Brincalhão</option>
				<option value="calmo">Bravo</option>
				<option value="agitado">Carinho</option>
			</select><br><br>

			<label for="idade:">Idade aproximada do seu animal:</label>
			<input type="number" name="idade"><br><br>


			<label for="sexo"> Qual o sexo do seu animal: </label>
			<select name="sexo">
				<option value="macho">Macho</option>
				<option value="femea">Fêmea</option>
  			</select><br><br>

  			<label for="DataNascimento">Digite a data de nascimento do seu animal:</label>
			<input type="date" name="nascimento">
  			<br><br>

  			<label for="porte">Qual o porte do seu animal:</label>
  			<select name="porte">
  				<option value="Mini">Mini ou toy</option>
  				<option value="Pequeno">Pequeno</option>
  				<option value="Mini">Médio</option>
  				<option value="Grande">Grande</option>
  				<option value="Gigante">Gigante</option> 	  
  			</select><br><br>	

  			<label for="pelagem">Qual a pelagem do seu animal:</label>
  			<select name="pelagem">
  				<option value="sempelo">Sem pelo</option>
  				<option value="Curto">Curto</option>
  				<option value="Medio">Médo</option>
  				<option value="Longo">Longo</option>		
			</select><br><br> 

			<input type = "file" name="foto" id="foto"><br><br>
			<input type="submit" name="ok" value="Confirmar">
		</form>
	</div>
	<?php
	}
	
	else {
		echo "<div class = ''>";

		$sql = "insert into cadastro (nome,local,data,raca,porte,pelagem,idade,indole,sexo)
		VALUES 	('". $_POST['nome'] . "','". $_POST['data'] . "','". $_POST['raca'] . "','". $_POST['porte'] . "','". $_POST['pelagem'] . "','". $_POST['idade'] . "','". $_POST['indole'] . "','". $_POST['sexo'] ."');";

	    mysqli_query($con , $sql) or die ("ERRO" . mysqli_error($con));
		echo "nome: " . $_POST['nome'] . "<br>";
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
