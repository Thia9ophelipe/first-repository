<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RELATORIOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout1.css">
		<link rel="stylesheet" type="text/css" href="css/menu1.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1>PROJETO</h1><br>
					<h4>PROJETO</h4>
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
					<h1> ADMINISTRAÇÃO </h1>
					<ul>
						<li><a href="rel_funcionarios.php" class="active">Relatório de Funcionários</a></li>
						<li><a href="rel_estoque.php">Relatório de estoque</a></li>									
					</ul> 
				</div>
			</div>
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
					<h6>PROJETO</h6> 
						<h6> PROJETO </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html>