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
    <link rel="stylesheet" type="text/css" href="css/menu_local.css">
    <link rel="stylesheet" type="text/css" href="css/cadastra_fun.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div id="menu">
        <?php include "menu_local.php";	?>
    </div>
    <div id="principal" class="container">

        <br>
        <div id="conteudo_especifico" class="row">
            <div class="div_central centralizar">
                <h1> CADASTRO DE FUNCIONÁRIOS </h1>
                <br>
            </div>

            <!--<div class="div_esquerda menu_local">
                    <?php
                    ?>
                </div>	-->

            <div id="funcionalidade" class="div_direita">
                <form method="post" action="processa_cadastra_fun.php">
                    <div class="centralizar">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="login" class="form-label">Login:</label>
                            <input type="text" class="form-control" name="login" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="funcao" class="form-label">Função:</label>
                            <div>
                                <input type="radio" id="gerente" name="funcao" value="gerente" class="form-check-input">
                                <label for="gerente" class="form-check-label">Gerente</label>
                            </div>
                            <div>
                                <input type="radio" id="subgerente" name="funcao" value="subgerente"
                                    class="form-check-input">
                                <label for="subgerente" class="form-check-label">Sub-Gerente</label>
                            </div>
                            <div>
                                <input type="radio" id="estoquista" name="funcao" value="estoquista"
                                    class="form-check-input" checked>
                                <label for="estoquista" class="form-check-label">Estoquista</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" name="cpf" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto:</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="Cadastrar Funcionário">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>