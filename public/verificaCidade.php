<?php 
	header ('Content-type: text/html; charset=UTF-8');
	$estado = $_POST['estado'];
	
	#echo "Funcionou";

 	include "connection.php";

 	$query   = "SELECT C.ID_CIDADE, C.NOME FROM cidade AS C INNER JOIN estado AS UF ON UF.ID_ESTADO = C.ID_ESTADO WHERE UF.SIGLA = '$estado'";
 	$query   = mysqli_query($conn,$query); 	
 	while($rs = mysqli_fetch_array($query)){
 		$dados .='<option value="'.$rs['ID_CIDADE'].'">'.$rs['NOME'].'</option>';
 	}

 	echo $dados;
 	
?>