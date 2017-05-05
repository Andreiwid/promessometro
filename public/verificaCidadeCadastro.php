<?php 
	header ('Content-type: text/html; charset=UTF-8');
	$estado_cadastro = $_POST['estado_cadastro'];
	#echo "Funcionou";
	include "connection.php";


 	
 	$query   = "SELECT C.ID_CIDADE, C.NOME FROM cidade AS C INNER JOIN estado AS UF ON UF.ID_ESTADO = C.ID_ESTADO WHERE UF.SIGLA = '$estado_cadastro'";
 	$query   = mysqli_query($conn,$query); 	
 	while($rs = mysqli_fetch_array($query)){

 		echo '<option value="'.$rs['ID_CIDADE'].'">'.$rs['NOME'].'</option>';
 	}

 	
 	
?>