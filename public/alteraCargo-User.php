

<?php

include "connection.php";
session_start();



$cargo = $_SESSION['CARGO'];
$id = $_SESSION['ID_USUARIO'];
$cargo_new = $_POST['cargo_user_new'];

 $select = "SELECT * FROM usuario WHERE (CARGO = '$cargo') and (ID_USUARIO ='$id')";
	$query = mysqli_query($conn,$select);
	$row = mysqli_num_rows($query);

	echo $row;


if ($row != 1){
    die ("Esse usuario não existe");
} 
else {
    $update= "UPDATE usuario SET CARGO = '$cargo_new' WHERE (CARGO = '$cargo') and (ID_USUARIO = '$id') ";

    mysql_db_query("promessometro",$update,$conn);

}



if (!$query){
    die ("Problemas ao executar o SQL !!!");
} 
else {
    Echo "A execução do SQL foi bem sucedida !!!";
}

if (!$query){
    die ("Erro ao atualizar o banco");
} 
else {

        switch ($_SESSION['ID_TIPO_USUARIO']) {
            case 1:
                 echo "<script>window.location='meusdados1'</script>";
               break;

            case 2:
                echo "<script>window.location='meusdados2'</script>";
            break;
        }
    
}


?>