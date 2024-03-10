<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXIBE FUNCIONARIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout1.css">
	<link rel="stylesheet" type="text/css" href="css/menu1.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
</head>

<body>

	<div id="menu">
		<?php include "menu_local.php";	?>
	</div>
	<div id="conteudo_especifico">
		<div class="div_central centralizar">
			<h1> EXIBIÇÃO DE DADOS DOS FUNCIONÁRIOS </h1>
		</div>
		<div class="div_esquerda menu_local">
			<?php

						
					
					?>
		</div>
		<div id="funcionalidade" class="div_direita">
			<?php		
						$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
						
						$cod = $_GET["codigo"];
																
						$sql_pesquisa = "SELECT nome_fun, login_fun, funcao_fun, status_fun, cpf_fun, email_fun, telefone_fun
										 FROM funcionarios
										 WHERE cod_fun = '$cod'";
						$resultado_pesquisa = mysqli_query ($conectar, $sql_pesquisa);	
						
						$registro_fun = mysqli_fetch_row($resultado_pesquisa);
						?>
			<table class="esquerda">
				<tr>
					<td>

					<div class="row">
                        <div class="col-md-4 offset-md-4">
                            <img src="img/<?php echo "$registro_cel[5]"; ?>" class="img-celular" alt="Imagem do celular">
                        </div>
                    </div>

					</td>
				<tr>
				<tr>
					<td>
						<?php
									echo "<p> Nome: $registro_fun[0] </p>";
									echo "<p> Login: $registro_fun[1]</p>";	
									echo "<p> Funcao: $registro_fun[2] </p>";
									echo "<p> Status: $registro_fun[3] </p>";
									echo "<p> CPF: $registro_fun[4]</p>";
									echo "<p> Email: $registro_fun[5]</p>";	
									echo "<p> Telefone: $registro_fun[6]</p>";									
												
								?>
					</td>


				</tr>
			</table>
			<p> <a href="lista_fun.php"> Voltar </a> </p>
		</div>
	</div>
	<div id="rodape">
		<div id="texto_institucional">
			<div id="texto_institucional">
				<h6> Casa do Celular </h6>
				<h6> ParkShopping loja 10 -- E-mail: contato@casadocelular.com.br -- Fone: (61) 99876 - 5432 </h6>
			</div>
		</div>
	</div>
</body>

</html>