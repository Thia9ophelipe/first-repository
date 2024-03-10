<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Celular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/lista_cel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</head>

<body>
<div id="menu">
            <?php include "menu_local.php"; ?>
        </div>
    <div id="principal" class="container">
        
        <div id="conteudo_especifico" class="row">
            <div class="div_central centralizar">
                <h1> CELULARES </h1>
            </div>
            <div class="div_esquerda menu_local">
                <?php
                ?>
            </div>
            <div id="funcionalidade" class="div_direita">
                <?php
                    $conectar = mysqli_connect("localhost", "root", "", "cadastro_sistema");
                    $sql_consulta = "SELECT cod_cel, marca_cel, modelo_cel, preco_cel, qtd_cel, status_cel FROM celulares";
                    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
                ?>
                
                <table class="table centralizar">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($registro = mysqli_fetch_row($resultado_consulta)) {
                        ?>
                        <tr>
                            <td><?php echo $registro[1]; ?></td>
                            <td>
                                <a href="exibe_cel.php?codigo=<?php echo $registro[0] ?>">
                                    <?php echo $registro[2]; ?>
                                </a>
                            </td>
                            <td><?php echo $registro[3]; ?></td>
                            <td class="text-center"><?php echo $registro[4]; ?></td>
                            <td class="text-center"><?php echo $registro[5]; ?></td>
                            <td>
                                <a href="altera_cel.php?codigo=<?php echo $registro[0] ?>" class="btn btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.646.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.353.147H2.5a.5.5 0 0 1-.5-.5v-1.793a.5.5 0 0 1 .146-.353l10-10zM1.146 13.854l1.5 1.5a.5.5 0 0 0 .708 0L14.854 4.354a.5.5 0 0 0 0-.708l-1.5-1.5a.5.5 0 0 0-.708 0L1.146 13.146a.5.5 0 0 0 0 .708z"/>
                                        </svg>
                                        
                                    </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <p> <a href="cadastra_cel.php" class="btn btn-primary"> Cadastrar celular </a> </p>
        <div id="rodape" class="text-center">
            <div id="texto_institucional">
                <div id="texto_institucional">
                    <h6> Casa do Celular </h6>
                    <h6> ParkShopping loja 10 -- E-mail: contato@casadocelular.com.br -- Fone: (61) 99876 - 5432 </h6>
                </div>
            </div>
        </div>
    </div>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->
</body>

</html>
