<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
		<!--<link rel="stylesheet" type="text/css" href="css/menu1.css">-->
        <link rel="stylesheet" type="text/css" href="css/menu_local.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			
				
			</div>
			<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> CADASTRO DE FUNCIONÁRIOS </h1>
					
				</div>
				<br>
				<div class="div_esquerda menu_local">					
					<?php

					
					
					?>
				</div>	
				<br>	
				<br>
				<div id="funcionalidade" class="div_direita">
					<form method="post" action="processa_cadastra_fun.php">
						<table class="centralizar">	
							<tr>
								<td>
									<p> Nome: </p>
								</td>
								<td>
									<p> <input type="text" name="nome" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Login:  </p>
								</td>
								<td>
									<p> <input type="text" name="login" required>  </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Senha:  </p>
								</td>
								<td>
									<p> <input type="password" name="senha" required>  </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Função:  </p>
								</td>
								<td>
									<p> <input type="radio" name="funcao" value="gerente"> GERENTE
									<input type="radio" name="funcao" value="subgerente"> SUB-GERENTE 
									<input type="radio" name="funcao" value="estoquista" checked> ESTOQUISTA </p>
								</td>
							</tr>
							
							<tr>
								<td>
									<p> CPF:  </p>
								</td>
								<td>
									<p> <input type="text" name="cpf" required>  </p>
								</td>
							</tr>
							
							
							<tr>
								<td>
									<p> E-mail:  </p>
								</td>
								<td>
									<p> <input type="text" name="email" required>  </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Telefone:  </p>
								</td>
								<td>
									<p> <input type="text" name="telefone" required>  </p>
								</td>
							</tr>
	
							<tr>
								<td colspan="2">
									<p> <input type="submit" value="Cadastrar Funcionário">  </p>
								</td>
							</tr>
						</table>
					</form>
				</div>				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
					<!--<h6>projeto</h6>--> 
					<h6>PROJETO</h6>  
					</div> 
				</div>
		</div>
    </body>
</html>