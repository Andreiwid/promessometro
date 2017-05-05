<?php 
	$conn = mysqli_connect ("mysql.promessometro.kinghost.net", "promessometro" , "alcino5096", "promessometro") or die (mysql_error());
    mysqli_select_db($conn,"promessometro") or die (mysql_error());
?>