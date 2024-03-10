<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout1.css">
		<link rel="stylesheet" type="text/css" href="css/menu1.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				
				
			</div>
			<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> CELULARES </h1>
				</div>
				<div class="div_esquerda menu_local">					
					<?php

						
					
					?>
				</div>		
				<div id="funcionalidade" class="div_direita">
					<?php
						$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");			
					
						$sql_consulta = "SELECT cod_cel, marca_cel, modelo_cel, preco_cel, qtd_cel, status_cel FROM celulares";
						$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
						
							
					?>
					<p> <a href="cadastra_cel.php"> Cadastrar celular </a> </p>
					<table class="centralizar">
						<tr>
							<td class="esquerda">
								<p> Marca </p>
							</td>
							<td>
								<p> Modelo </p>
							</td>
							
							<td>
								<p> Preço </p>
							</td>	
							<td>
								<p> Quantidade </p>
							</td>
							<td>
								<p> Status </p>
							</td>				
							<td class="esquerda">
								<p> Ação </p>
							</td>
						</tr>
						<?php		
							while ($registro = mysqli_fetch_row($resultado_consulta))
							{
						?>						
						<tr>
							<td class="esquerda">
								<p>
									<?php echo $registro[1]; ?>
								</p>
							</td>
							<td>
								<p>
									<a href="exibe_cel.php?codigo=<?php echo $registro[0]?>"> 
										<?php 
											echo "$registro[2]";
										?>
									</a>										
								</p>
							</td>
							<td class="esquerda">
								<p>
									<?php echo $registro[3]; ?>
								</p>
							</td>
							<td class="central">
								<p>
									<?php echo $registro[4]; ?>
								</p>
							</td>
							<td class="central">
								<p>
									<?php echo $registro[5]; ?>
								</p>
							</td>								
							<td class="esquerda">
								<p>
									<a href="altera_cel.php?codigo=<?php echo $registro[0]?>">
										Alterar	
									</a>
								</p>
							</td>
						</tr>
						<?php
							}
						?>
					</table>
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