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
				<div id="logo">
				<h1>Projeto</h1>
					<h4>Sistema de cadastro</h4>
				</div>
				<div id="menu_global"  class="menu_global">
						
					<ul>
                        <li> Olá <?php include "valida_login.php";?></li>
						<li><a href="logout.php" class="active"><font color=yellow>Sair</font></a></li>
					</ul> 
					     	 
				</div>
			</div>
			<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> FUNCIONÁRIOS </h1>
					<br>
				</div>
				<div class="div_esquerda menu_local">					
					
				</div>		
				<div id="funcionalidade" class="div_direita">					
					<?php
						$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");			
					
						$sql_consulta = "SELECT cod_fun, nome_fun, funcao_fun, status_fun FROM funcionarios WHERE login_fun != 'admin'";
						$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
							
					?>
					<p align="right"> <a href="cadastra_fun.php"> Cadastrar funcionário </a> </p>
					<table class="centralizar">
						<tr>
							<td class="esquerda">
								<p> Nome </p>
							</td>
							<td>
								<p> Função </p>
							</td>
							<td>
								<p> Status </p>
							</td>
							<td class="direita">
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
									<a href="exibe_fun.php?codigo=<?php echo $registro[0]?>"> 
										<?php 
											echo "$registro[1]";
										?>
									</a>
								</p>
							</td>
							<td>
								<p>									 
									<?php echo "$registro[2]"; ?>
								</p>
							</td>
							<td>
								<p>									 
									<?php 
										echo "$registro[3]";
									?>
								</p>
							</td>
						
							<td class="direita">
								<p>
									<a href="altera_fun.php?codigo=<?php echo $registro[0]?>">
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
					<h6>projeto</h6> 
					<h6>PROJETO</h6> 
					</div> 
				</div>
			</div>
		</div>
    </body>
</html>