
<?php
	$conectar = mysqli_connect ("localhost", "root", "", "cadastro_sistema");
				
	
	$cod = $_POST["codigo"];
	$marca = $_POST["marca"];	
	$modelo = $_POST["modelo"];
	$preco = $_POST["preco"];
	$qtd = $_POST["qtd"];
	$foto = $_FILES["foto"];
	$descricao = $_POST["descricao"];
	$status = $_POST["status"];	
	
	$msg = false;

  if(isset($_FILES['foto'])){

	$pasta1 = "img/";
	$nomeFoto1 = $foto['name'];
	$novoNome1 = uniqid();
	$extensao1 = strtolower(pathinfo($nomeFoto1, PATHINFO_EXTENSION));

    move_uploaded_file($foto['tmp_name'], $pasta1 . $novoNome1 . '.' . $extensao1); //efetua o upload

    $sql_code = "INSERT INTO celulares (codigo, foto_cel, data) VALUES(null, '$novoNome1.$extensao1', NOW())";

    if($mysqli->query($sql_code))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";

  }
	
	$sql_altera = "UPDATE celulares 		
				   SET 		marca_cel='$marca', 
							modelo_cel = '$modelo',
							preco_cel ='$preco', 
							qtd_cel = '$qtd',
							foto_cel = '$novoNome1.$extensao1',
							descricao_cel = '$descricao',
							status_cel = '$status'
				   WHERE 	cod_cel = '$cod'";
	$sql_resultado_alteracao = mysqli_query ($conectar, $sql_altera);

	if ($sql_resultado_alteracao == true)
	{
		echo "<script>
				alert ('$modelo alterado com sucesso') 
			  </script>";
		echo "<script> 
				 location.href = ('lista_cel.php') 
			  </script>";
		exit();
	}  
	else
	{    
		echo "<script> 
				alert ('Ocorreu um erro no servidor. Dados do celular não foram alterados. Tente de novo') 
			</script>";
		echo "<script> 
				location.href = ('lista_cel.php') 
			 </script>";
	}
?>

