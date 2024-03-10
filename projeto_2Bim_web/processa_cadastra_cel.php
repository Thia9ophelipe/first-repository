<?php
	

	$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
	
	$cod = $_POST["codigo"];
	$marca = $_POST["marca"];	
	$modelo = $_POST["modelo"];
	$preco = $_POST["preco"];
	$qtd = $_POST["qtd"];
	$foto = $_FILES["foto"];
	$descricao = $_POST["descricao"];
	
	
	

	$sql_consulta = "SELECT modelo_cel FROM celulares 
					 WHERE modelo_cel = '$modelo'";
							 
	$resultado_consulta = mysqli_query ($conectar, $sql_consulta);
		
	$linhas = mysqli_num_rows ($resultado_consulta);		
		
	if ($linhas == 1) {
	
		echo "<script> 
					alert ('Modelo ja cadastrado. Tente outro!') 
		      </script>";
			  
		echo "<script> 
					location.href = ('cadastra_cel.php') 
			  </script>";			
	}
	else { //Para modelo que nao existe	
	
		$pasta = "img/";
		$nomeFoto = $foto['name'];
		$novoNome = uniqid();
		$extensao = strtolower(pathinfo($nomeFoto, PATHINFO_EXTENSION));

		move_uploaded_file($foto['tmp_name'], $pasta . $novoNome . '.' . $extensao);
	
	$sql_cadastrar = "INSERT INTO celulares 
				(marca_cel, modelo_cel, foto_cel, preco_cel, qtd_cel, descricao_cel) 
						  VALUES 
				('$marca' , '$modelo' , '$novoNome.$extensao' , '$preco' , '$qtd' , '$descricao')";
		$resultado_cadastrar = mysqli_query ($conectar, $sql_cadastrar);
		
		if ($resultado_cadastrar == true) { 		
			echo "<script> 
					alert ('$modelo cadastrado com sucesso') 
				  </script>";
			
			echo "<script> 
					location.href = ('cadastra_cel.php') 
				  </script>";	
		}
		else { 		
			echo "<script> 
					alert ('ocorreu um erro no servidor. Tente de novo') 
			     </script>";
		
			echo "<script> 
					location.href = ('lista_cel.php') 
				  </script>";		
		}	
	}
?>