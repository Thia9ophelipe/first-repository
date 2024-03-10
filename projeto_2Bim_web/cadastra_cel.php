<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body>
<div>
            <?php include "menu_local.php"; ?>
        </div>
		<br>
    <div id="principal" class="container">
        
        <div id="conteudo_especifico" class="row">
<div class="div_central centralizar">
                <h1> CADASTRO DE CELULARES </h1>
            </div>
			<br>
			<br>
            <div class="div_esquerda menu_local">
                <?php
                ?>
            </div>
            <div id="funcionalidade" class="div_direita">
                <form method="post" action="processa_cadastra_cel.php" enctype="multipart/form-data" class="centralizar">
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca:</label>
                        <select name="marca" class="form-select" required>
                            <option value="samsung">Samsung</option>
                            <option value="apple">Apple</option>
                            <option value="motorola">Motorola</option>
                            <option value="xiaomi">Xiaomi</option>
                            <option value="lg">LG</option>
                            <option value="nokia">Nokia</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" name="modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="text" class="form-control" name="preco" required>
                    </div>
                    <div class="mb-3">
                        <label for="qtd" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" name="qtd" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <input type="text" class="form-control" name="descricao" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Cadastrar Celular">
                    </div>
                </form>
            </div>
        </div>
		<br>
        <div id="rodape">
            <center><div id="texto_institucional" class="centralizar">
                <h6> Casa do Celular </h6>
                <h6> ParkShopping loja 10 -- E-mail: contato@casadocelular.com.br -- Fone: (61) 99876 - 5432 </h6>
            </div></center>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
