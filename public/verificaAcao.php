<?php 
	header ('Content-type: text/html; charset=UTF-8');
	$meta = $_POST['meta'];
	#echo "Funcionou";

 	include "connection.php";

 	$query   = "SELECT a.ID_ACAO, a.DESCRICAO FROM acao AS a where a.ID_META = '$meta'";
 	$query   = mysqli_query($conn,$query); 	
 	while($rs = mysqli_fetch_array($query)){
 		$dados .='<option value="'.$rs['ID_ACAO'].'">'.$rs['DESCRICAO'].'</option>';
 	}


 	echo $dados;
 	
?>