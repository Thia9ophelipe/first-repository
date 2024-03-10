<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administração</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/menu_local.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
				
				</div>
				<div id="menu_global"  class="menu_global">
						
					<!--<ul>
                        <li> Olá <?php include "valida_login.php";?></li>
						<li><a href="logout.php" class="active"><font color=yellow>Sair</font></a></li>
					</ul> -->
					     	 
				</div>
			</div>
			<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
					</div> 
				</div>
			</div>	
		</div>
    </body>
</html>