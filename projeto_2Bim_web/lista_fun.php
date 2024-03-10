<?php 
	session_start ();
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Funcionários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
		<!--<link rel="stylesheet" type="text/css" href="css/menu1.css">-->
        <link rel="stylesheet" type="text/css" href="css/menu_local.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
</head>

<body>
    <div id="principal">
        <div id="menu">
				<?php include "menu_local.php";	?>               
			</div>

        <div id="conteudo_especifico" class="text-center mb-4">
            <div class="centralizar mb-4">
                <br>
                <center><h1 id="h1">FUNCIONÁRIOS</h1></center>
            </div>
            <br>
            
            
            <div id="funcionalidade" class="mb-3">
                <?php
                    $conectar = mysqli_connect("localhost", "root", "", "cadastro_sistema");
                    $sql_consulta = "SELECT cod_fun, nome_fun, funcao_fun, status_fun FROM funcionarios WHERE login_fun != 'admin'";
                    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
                ?>
                
                <div id="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Função</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($registro = mysqli_fetch_row($resultado_consulta)) {
                            ?>
                            <tr>
                                <td>
                                    <a href="exibe_fun.php?codigo=<?php echo $registro[0] ?>">
                                        <?php echo "$registro[1]"; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php echo "$registro[2]"; ?>
                                </td>
                                <td>
                                    <?php echo "$registro[3]"; ?>
                                </td>
                                <td>
                                    <a href="altera_fun.php?codigo=<?php echo $registro[0] ?>" class="btn btn-warning">
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
                    <div class="text-center mb-3 ml-3">
                    <a href="cadastra_fun.php" class="btn btn-primary">Cadastrar funcionário</a>
                </div>
                </div>
            </div>
        </div>

        <div id="rodape" class="text-center">
            <div id="texto_institucional">
                
               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
