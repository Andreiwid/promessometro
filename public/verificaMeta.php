<?php 
	header ('Content-type: text/html; charset=UTF-8');
	$cidade = $_POST['cidade'];
	$tema = $_POST['tema'];
	#echo "Funcionou";

 	include "connection.php";

 	$query   = "SELECT m.ID_META, m.DESCRICAO FROM meta AS m where m.ID_CIDADE = '$cidade' AND m.ID_TEMA = '$tema'";
 	$query   = mysqli_query($query); 	
 	while($rs = mysqli_fetch_array($query)){
 		$dados .='<option value="'.$rs['ID_META'].'">'.$rs['DESCRICAO'].'</option>';
 	}


 	echo $dados;
 	
?>