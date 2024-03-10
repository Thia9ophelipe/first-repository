<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="container">
        <!--<div id="principal">
            <div id="topo" class="text-center">
                <div id="logo">
                    <h1>Projeto</h1>
                    <h4>Sistema de cadastro</h4>
                </div>
            </div>-->
            <div id="container_form">
            <form method="post" action="processa_login.php" id="fomr-img">
            <div class="justify-content-center align-items-center">
                        <div id="img_acesso">
                            <img src="img/Acesso_restrito_2.png" alt="Acesso">
                        </div>
                    </div>
            <div id="conteudo_especifico" class="text-center">
                <span class="titulo">Acesso a área restrita</span>
                <br />
                
                <form>
                 <div class="row justify-content-center">
                    
                        <div class="col-6">
                            <div class="area_restrita">Login:</div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="login" required>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="area_restrita">Senha:</div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="senha" required>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="text-end">
                                <input type="submit" class="btn btn-primary custom-btn" value="Enviar" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="rodape" class="text-center">
                <div id="texto_institucional">
                    
                    
                </div>
            </div>
            </form>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
