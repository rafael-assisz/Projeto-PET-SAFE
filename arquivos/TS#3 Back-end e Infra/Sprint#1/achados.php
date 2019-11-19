<?php 
	ini_set('display_errors','off');
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<title>Cadastro</title>
 	<link rel="stylesheet" type="text/css" href="">
 	<meta charset="utf-8">
 </head>
 <body>
 
 	<h1>Visualizar os animais achados</h1>
 		
 		<?php 
	 	echo "<div class = ''>";
	 	include ("conexao.php");

	 	$sql= "SELECT * FROM cadastro";
	 	$res= mysqli_query($con,$sql) or die ("erro");

	 	echo "Registros: " . mysqli_num_rows($res) . "<br>";

	 	echo "<ul>";
	 	$i = 0;
 			while ($linha = mysqli_fetch_array($res)){
				$l = $i % 2 == 0 ? "par" : "impar";
				echo "<li class= '".$l."' onClick='show_line(". $i .")'>";
				echo $linha['nome'] . "<br>";
				echo $linha['local'] . "<br>";
				echo $linha['data'] . "<br><br>";
				echo $linha['raca'] . "<br><br>";
				echo $linha['porte'] . "<br><br>";
				echo $linha['pelagem'] . "<br><br>";
				echo $linha['idade'] . "<br><br>";
				echo $linha['indole'] . "<br><br>";
				echo $linha['sexo'] . "<br><br>";
				echo "</li>";
				$i++;
 		echo "</ul>";
 		mysqli_close($con);
 		echo "</div>";
 	 ?> 	
 	
 </body>
 </html>