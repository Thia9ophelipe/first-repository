<?php	
	$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
				
	$cod = $_POST["codigo"];
	$funcao = $_POST["funcao"];
	if ($funcao == "administrador") {
		$senha = $_POST["senha"];
		$sql_altera = "UPDATE funcionarios 		
						   SET 		
									senha_fun = '$senha'
									
						   WHERE 	cod_fun = '$cod'";
			$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);
		
			if ($sql_resultado_alteracao == true)
			{
				echo "<script>
						alert ('Senha do administrador alterada com sucesso') 
					  </script>";
				echo "<script> 
						 location.href = ('lista_fun.php') 
					  </script>";
				exit();
			}  
			else
			{    
				echo "<script> 
						alert ('Ocorreu um erro no servidor. A senha do administrador não foi alterada. Volte e tente de novo') 
					</script>";
				echo "<script> 
						location.href ('lista_fun.php') 
					 </script>";
				exit();
			}
	}	
	else {
		$nome = $_POST["nome"];	
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$funcao = $_POST["funcao"];
		$status = $_POST["status"];	
		$cpf = $_POST["cpf"];	
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		

		
		$sql_pesquisa = "SELECT login_fun FROM funcionarios	
								  WHERE login_fun = '$login' 							  
								  AND   cod_fun <> '$cod'";							  
		$sql_resultado = mysqli_query ($conectar, $sql_pesquisa);
								  
		$linhas = mysqli_num_rows ($sql_resultado);		
		if ($linhas == 1)
		{
			echo "<script> alert ('Login do funcion�rio j� existente. Tente de novo.')  </script>";
			echo "<script> 
				location.href = ('lista_fun.php?codigo=$cod')
				  </script>";
			exit;	  
		}
		else
		{							
						
			$sql_altera = "UPDATE funcionarios 		
						   SET 		nome_fun='$nome', 
									login_fun ='$login', 
									senha_fun = '$senha',
									funcao_fun = '$funcao',
									status_fun = '$status',
									cpf_fun = '$cpf',
									email_fun = '$email',
									telefone_fun = '$telefone'
						   WHERE 	cod_fun = '$cod'";
			$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);
		
			if ($sql_resultado_alteracao == true)
			{
				echo "<script>
						alert ('$nome alterado com sucesso') 
					  </script>";
				echo "<script> 
						 location.href = ('lista_fun.php') 
					  </script>";
				exit();
			}  
			else
			{    
				echo "<script> 
						alert ('Ocorreu um erro no servidor. Dados do funcionário não foram alterados. Tente de novo') 
					</script>";
				echo "<script> 
						location.href ('lista_fun.php') 
					 </script>";
			}
		
		}
	}
?>