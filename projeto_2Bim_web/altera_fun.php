<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ALTERA FUNCIONARIO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layt1.css">
		
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
	<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="principal" class="container">
		<div id="conteudo_especifico">
			<div class="text-center">
				<h1> ALTERAÇÃO DE DADOS DOS FUNCIONÁRIOS </h1>
			</div>
			<div class="row justify-content-center">
				<?php
					$conectar = mysqli_connect("localhost", "root", "", "cadastro_sistema");
					$cod = $_GET["codigo"];
					$sql_pesquisa = "SELECT  nome_fun, login_fun, senha_fun, funcao_fun, status_fun, cpf_fun, email_fun, telefone_fun FROM funcionarios WHERE cod_fun = '$cod'";
					$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);
					$registro = mysqli_fetch_row($resultado_pesquisa);
				?>
				<form class="col-6" method="post" action="processa_altera_fun.php">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
					<input type="hidden" name="funcao" value="<?php echo "$registro[1]"; ?>">
					<table class="table">
						<tr> 
							<td>
								<p> Nome: </p>
							</td>
							<td>
								<p> <input type="text" class="form-control" name="nome" value="<?php echo "$registro[0]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Login: </p>
							</td>
							<td>
								<p> <input type="text" class="form-control" name="login" value="<?php echo "$registro[1]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Senha: </p>
							</td>
							<td>
								<p> <input type="password" class="form-control" name="senha" value="<?php echo "$registro[2]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Função:  </p>
							</td>
							<td>
								<p> 
									<select class="form-select" name="funcao" required>
										<option value="gerente" <?php if ($registro[3] == "gerente") { echo "selected"; } ?>>Gerente</option>
										<option value="subgerente" <?php if ($registro[3] == "subgerente") { echo "selected"; } ?>>Sub-Gerente</option>
										<option value="estoquista" <?php if ($registro[3] == "estoquista") { echo "selected"; } ?>>Estoquista</option>
									</select>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Status:  </p>
							</td>
							<td>
								<p>
									<select class="form-select" name="status" required>
										<option value="ativo" <?php if ($registro[4] == "ativo") { echo "selected"; } ?>>Ativo</option>
										<option value="inativo" <?php if ($registro[4] == "inativo") { echo "selected"; } ?>>Inativo</option>
									</select>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p> CPF: </p>
							</td>
							<td>
								<p> <input type="text" class="form-control" name="cpf" value="<?php echo "$registro[5]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> E-mail: </p>
							</td>
							<td>
								<p> <input type="text" class="form-control" name="email" value="<?php echo "$registro[7]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Telefone: </p>
							</td>
							<td>
								<p> <input type="text" class="form-control" name="telefone" value="<?php echo "$registro[6]";?>" required> </p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p> <input type="submit" class="btn btn-primary" value="Alterar Funcionário">  </p>
							</td>
						
						</tr>
					</table>
				</form>
			</div>
		</div>	
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>