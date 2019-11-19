<?php

	ini_set('display_errors', 'off');

 ?>
<!DOCTYPE html>
<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">
		<title>ANIMAIS PERDIDOS</title>
		<link rel="stylesheet" type="text/css" href="teste.css">
		<script>
			function show_line(qual){
				var linha = document.getElementsByClassName('oculta');

				//alert(qual);
				for (i = 0; i < linha.length; i++){
					linha[i].style.display = 'none';
				}
				linha[qual].style.display = 'inline';
			}
		</script>
	</head>
	
	<body>
		
		<h1>Animais perdidos</h1>
		
		<?php
				 
			include ("conexao.php");

			$sql= "select * from cadastro";
			$res = mysqli_query($con, $sql) or die ("ERRO" . mysqli_error($con) );

			echo "Registros: " . mysqli_num_rows($res) . "<br>";

			echo "<ul>";
			$i = 0;
			while ($linha = mysqli_fetch_array($res)){
				$l = $i % 2 == 0 ? "par" : "impar";
				echo "<li class= '".$l."' onClick='show_line(". $i .")'>";
				echo $linha['nome'] . "<br>";
				echo $linha['email'] . "<br>";
				echo $linha['telefone'] . "<br><br>";
				echo $linha['estado'] . "<br><br>";
				echo $linha['cidade'] . "<br><br>";
				echo $linha['descricao'] . "<br><br>";
				echo $linha['nomecachorro'] . "<br><br>";
				echo $linha['imagemcachorro'] . "<br><br>";
				echo "</li>";
				$i++;
			}
			echo "</ul>";

			mysqli_close ($con);
		?>
		</div>
		<span class ="link">
			<a href="index.php">Voltar</a>
		</span>
	</body>
</html>