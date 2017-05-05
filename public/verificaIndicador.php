<?php 
	header ('Content-type: text/html; charset=UTF-8');
	$cidade = $_POST['cidade'];
	$tema = $_POST['tema'];
	#echo "Funcionou";

 	include "connection.php";

 	$query   = "SELECT i.ID_INDICADOR, i.NOME FROM indicador AS i where i.ID_CIDADE = '$cidade' AND i.ID_TEMA = '$tema'";
 	$query   = mysqli_query($conn,$query); 	
 	while($rs = mysqli_fetch_array($query)){
 		$dados .='<option value="'.$rs['ID_INDICADOR'].'">'.$rs['NOME'].'</option>';
 	}


 	echo $dados;
 	
?>