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
        <link rel="stylesheet" type="text/css" href="css/rel_estoq.css">
		
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
	<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="principal" class="container">
		<div id="conteudo_especifico">
			<div class="div_central centralizar">
				<h1> CELULARES ATIVOS </h1>

				<?php
					$conectar = mysqli_connect("localhost", "root", "", "cadastro_sistema");			

					$sql_consulta = "SELECT cod_cel, marca_cel, modelo_cel, preco_cel, qtd_cel FROM celulares WHERE status_cel = 'ativo'";
					$resultado_consulta = mysqli_query($conectar, $sql_consulta);
				?>

				<table class="table centralizar">
					<thead>
						<tr>
							<th class="esquerda">Marca</th>
							<th>Modelo</th>
							<th>Preço</th>
							<th>Quantidade</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($registro = mysqli_fetch_row($resultado_consulta)) {
						?>
							<tr>
								<td class="esquerda"><?php echo $registro[1]; ?></td>
								<td><a href="exibe_cel.php?codigo=<?php echo $registro[0]?>"><?php echo $registro[2]; ?></a></td>
								<td class="esquerda"><?php echo $registro[3]; ?></td>
								<td class="central"><?php echo $registro[4]; ?></td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
				<p><a href="relatorios.php" class="btn btn-primary">Voltar</a></p>
			</div>
		</div>
		<div id="rodape" class="centralizar">
			<h6> Casa do Celular </h6>
			<h6> ParkShopping loja 10 -- E-mail: contato@casadocelular.com.br -- Fone: (61) 99876 - 5432 </h6>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>