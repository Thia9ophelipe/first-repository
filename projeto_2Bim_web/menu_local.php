<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/menu_local.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="title-section">
                <h2 class="h2">Projeto</h2>
                <h4>Cadastro de Funcionários</h4>
            </div>
            <ul class="navbar-nav ms-auto">
-->
    <?php
                if ($_SESSION["funcao_fun"] == "administrador" || $_SESSION["funcao_fun"] == "gerente" ){
                ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="administracao.php">Administração</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="lista_fun.php">Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_cel.php">Celulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#relatorios.php">Relatórios</a>
                    </li>
                    <li class="nav-item nav-logout">
                        <a class="nav-link" href="logout.php"><b>Sair</b></a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Olá <?php include "valida_login.php";?>
                </span>
            </div>
        </div>
    </nav>


    <?php
                } elseif ($_SESSION["funcao_fun"] == "estoquista") {
                ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="administracao.php">Administração</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="lista_cel.php">Celulares</a>
                    </li>
                    <li class="nav-item nav-logout">
                        <a class="nav-link" href="logout.php"><b>Sair</b></a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Olá <?php include "valida_login.php";?>
                </span>
            </div>
        </div>
    </nav>

    <?php
                } elseif ($_SESSION["funcao_fun"] == "subgerente"){
                ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="administracao.php">Administração</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="lista_cel.php">Celulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="relatorios.php">Relatórios</a>
                    </li>
                    <li class="nav-item nav-logout">
                        <a class="nav-link" href="logout.php"><b>Sair</b></a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Olá <?php include "valida_login.php";?>
                </span>
            </div>
        </div>
    </nav>

    <?php
                }
                ?>
    </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>