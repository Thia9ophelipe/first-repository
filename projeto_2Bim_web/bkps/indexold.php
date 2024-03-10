<!DOCTYPE html>
<html lang="pt-br">
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
				<div id="menu_global" class="menu_global">
				</div>
			</div>
			<div  id="conteudo_especifico">
						<span class="titulo">Acesso a área restrita</span>
						<br />
						<form method="post" action="processa_login.php">
							<table width="67%" align="center" cellspacing="5">
								<tr>
									<td width="28%" class="area_restrita">Login:</td>
									<td width="72%">
										<input type="text" name="login" required>
									</td>
								</tr>
								<tr>
									<td class="area_restrita">Senha:</td>
									<td>
										<input type="password" name="senha" required>
									</td>
								</tr>
								<tr>
									<td></td>
									<td align="right">
										<input type="submit" value="Enviar" required>
									</td>
								</tr>
							</table>
						</form>
					</div>
			<div id="rodape">
				<div id="texto_institucional">
					<h6>projeto</h6> 
					<h6>PROJETO</h6> 
				</div> 
			</div>
        </div>
    </body>
</html>