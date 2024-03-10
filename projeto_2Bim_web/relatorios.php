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
    <link rel="stylesheet" type="text/css" href="css/rels.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="menu">
        <?php include "menu_local.php"; ?>
    </div>
	<br>
    <div id="principal">
        <div id="conteudo_especifico">
            <div class="div_central">
                <h1 id="h1"> RELATÓRIOS </h1>
				<br>
                <div class="button-list">
                    <div class="button">
                        <a href="rel_funcionarios.php">
                            <img src="img/rel_func.jpg" alt="Relatório de Funcionários">
                        </a>
						<br>
						<br>
						<b>Relatório de Funcionários</b>
                    </div>
                    <div class="button">
                        <a href="rel_estoque.php">
                            <img src="img/rel_estoque.png" alt="Relatório de Estoque">
                        </a>
						<br>
						<br>
						<b>Relatório de Estoque<b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
