<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EXIBE CELULAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/exibe_cel.css">
		
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
	<div id="menu">
				<?php include "menu_local.php";	?>               
			</div>
			<div id="principal" class="container">
            <div id="conteudo_especifico">
                <div class="div_central centralizar">
                    <h1> EXIBIÇÃO DE CELULARES </h1>
                </div>
                <div class="div_esquerda">
                    <?php

                    ?>
                </div>		
                <div id="funcionalidade" class="div_direita">
                    <?php		
                        $conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
                        $codigo_cel = $_GET["codigo"];
                        $sql_pesquisa_cel = "SELECT marca_cel, modelo_cel, preco_cel, qtd_cel, descricao_cel, foto_cel, status_cel
                                              FROM celulares
                                              WHERE cod_cel = '$codigo_cel'";
                        $resultado_pesquisa_cel = mysqli_query ($conectar, $sql_pesquisa_cel);

                        $registro_cel = mysqli_fetch_row($resultado_pesquisa_cel);
                    ?>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <img src="img/<?php echo "$registro_cel[5]"; ?>" class="img-celular" alt="Imagem do celular">
                        </div>
                    </div>
                    <div class="info-celular">
                        <p><strong>Marca:</strong> <?php echo $registro_cel[0]; ?> </p>
                        <p><strong>Modelo:</strong> <?php echo $registro_cel[1]; ?></p>
                        <p><strong>Preço:</strong> <?php echo $registro_cel[2]; ?> </p>
                        <p><strong>Quantidade:</strong> <?php echo $registro_cel[3]; ?> </p>
                        <p><strong>Descrição:</strong> <?php echo $registro_cel[4]; ?> </p>
                        <p><strong>Status:</strong> <?php echo $registro_cel[6]; ?> </p>
                    </div>
                    <p class="mt-3"> <a href="lista_cel.php" class="btn btn-primary"> Voltar </a> </p>
                </div>		
            </div>	
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>