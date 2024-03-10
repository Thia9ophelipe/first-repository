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
	<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="principal" class="container">
		<div id="conteudo_especifico">
			<div class="text-center">
				<h1> ALTERAÇÃO DOS DADOS DO CELULAR </h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "cadastro_sistema");
						$cod = $_GET["codigo"];
						$sql_pesquisa = "SELECT  cod_cel, marca_cel, modelo_cel, preco_cel, foto_cel, qtd_cel, descricao_cel, status_cel FROM celulares WHERE cod_cel = '$cod'";
						$resultado_pesquisa = mysqli_query($conectar, $sql_pesquisa);	
						$registro = mysqli_fetch_row($resultado_pesquisa);
					?>
					<form method="post" action="processa_altera_cel.php">
						<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
						<div class="mb-3">
							<label for="marca" class="form-label">Marca:</label>
							<select class="form-select" name="marca" required>
								<option value="samsung" <?php if ($registro[1] == "samsung") { echo "selected"; } ?>>Samsung</option>
								<option value="apple" <?php if ($registro[1] == "apple") { echo "selected"; } ?>>Apple</option>
								<option value="motorola" <?php if ($registro[1] == "motorola") { echo "selected"; } ?>>Motorola</option>
								<option value="xiaomi" <?php if ($registro[1] == "xiaomi") { echo "selected"; } ?>>Xiaomi</option>
								<option value="lg" <?php if ($registro[1] == "lg") { echo "selected"; } ?>>LG</option>
								<option value="nokia" <?php if ($registro[1] == "nokia") { echo "selected"; } ?>>Nokia</option>
								<option value="outros" <?php if ($registro[1] == "outros") { echo "selected"; } ?>>Outros</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="modelo" class="form-label">Modelo:</label>
							<input type="text" class="form-control" name="modelo" required value="<?php echo "$registro[2]"; ?>">
						</div>
						<div class="mb-3">
							<label for="preco" class="form-label">Preço:</label>
							<input type="text" class="form-control" name="preco" required value="<?php echo "$registro[3]"; ?>">
						</div>
						<div class="mb-3">
							<label for="qtd" class="form-label">Quantidade:</label>
							<input type="number" class="form-control" name="qtd" required value="<?php echo "$registro[5]"; ?>">
						</div>
						<div class="mb-3">
							<label for="foto" class="form-label">Foto:</label>
							<input type="file" class="form-control" name="foto" required value="<?php echo "$registro[4]"; ?>">
						</div>
						<div class="mb-3">
							<label for="descricao" class="form-label">Descrição:</label>
							<input type="text" class="form-control" name="descricao" required value="<?php echo "$registro[6]"; ?>">
						</div>
						<div class="mb-3">
							<label for="status" class="form-label">Status:</label>
							<select class="form-select" name="status" required>
								<option value="ativo" <?php if ($registro[7] == "ativo") { echo "selected"; } ?>>Ativo</option>
								<option value="inativo" <?php if ($registro[7] == "inativo") { echo "selected"; } ?>>Inativo</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Alterar Celular</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="rodape" class="container">
		<div id="texto_institucional" class="text-center">
			<h6> Casa do Celular </h6> 
			<h6> ParkShopping loja 10 -- E-mail: contato@casadocelular.com.br -- Fone: (61) 99876 - 5432 </h6> 
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>