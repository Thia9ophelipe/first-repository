<?php
	$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
		
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$funcao = $_POST["funcao"];	
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	
	

	$sql_consulta = "SELECT login_fun FROM funcionarios 
					 WHERE login_fun = '$login'";
							 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		
	$linhas = mysqli_num_rows ($resultado_consulta);		
		
	if ($linhas == 1) {
	
		echo "<script> 
					alert ('Login ja cadastrado. Tente outro!') 
		      </script>";
			  
		echo "<script> 
					location.href = ('cadastra_fun.php') 
			  </script>";			
	}
	else { //Para o usuario que nao existe	

		$sql_cadastrar = "INSERT INTO funcionarios 
				(nome_fun, login_fun, senha_fun, funcao_fun, cpf_fun, email_fun, telefone_fun) 
						  VALUES 
				('$nome' , '$login', '$senha' , '$funcao' , '$cpf' , '$email' , '$telefone')";
		$resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($resultado_cadastrar == true) { 		
			echo "<script> 
					alert ('$nome cadastrado com sucesso') 
				  </script>";
			
			echo "<script> 
					location.href = ('cadastra_fun.php') 
				  </script>";	
		}
		else { 		
			echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo') 
			     </script>";
		
			echo "<script> 
					location.href = ('lista_fun.php') 
				  </script>";		
		}	
	}
?>