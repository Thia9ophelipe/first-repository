<?php
	if ($_SESSION["funcao_fun"] == "administrador") {
?>
<ul> 
	<a href="administracao.php" style="text-decoration:none" class="active"><font color=yellow>Administração &emsp;</font></a>
	<a href="lista_fun.php" style="text-decoration:none" class="active"><font color=yellow>Funcionários &emsp;</font></a>
	<a href="lista_cel.php" style="text-decoration:none" class="active"><font color=yellow>Celulares &emsp;</font></a>
	<a href="relatorios.php" style="text-decoration:none" class="active"><font color=yellow>Relatorios &emsp;</font></a> 						
</ul> 

<?php
	}
	if ($_SESSION["funcao_fun"] == "gerente") {
?>
<ul> 
	<a href="administracao.php" style="text-decoration:none" class="active"><font color=yellow>Administração &emsp;</font></a>
	<a href="lista_fun.php" style="text-decoration:none" class="active"><font color=yellow>Funcionários &emsp;</font></a>
	<a href="lista_cel.php" style="text-decoration:none" class="active"><font color=yellow>Celulares &emsp;</font></a>
	<a href="relatorios.php" style="text-decoration:none" class="active"><font color=yellow>Relatorios &emsp;</font></a> 						
</ul> 

<?php
	}
	elseif ($_SESSION["funcao_fun"] == "estoquista") {
?>
<ul>
<a href="administracao.php" style="text-decoration:none" class="active"><font color=yellow>Administração &emsp;</font></a>
<a href="lista_cel.php" style="text-decoration:none" class="active"><font color=yellow>Celulares &emsp;</font></a>				
</ul> 
<?php		
	}
	elseif ($_SESSION["funcao_fun"] == "subgerente") {
?>
<ul>
<a href="administracao.php" style="text-decoration:none" class="active"><font color=yellow>Administração &emsp;</font></a>
<a href="lista_cel.php" style="text-decoration:none" class="active"><font color=yellow>Celulares &emsp;</font></a>     
<a href="relatorios.php" style="text-decoration:none" class="active"><font color=yellow>Relatorios &emsp;</font></a> 						
</ul> 
<?php		
	}
?>