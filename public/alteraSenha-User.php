




<?php
include "connection.php";
session_start();


$senha_user = $_SESSION ['SENHA'];
$id = $_SESSION['ID_USUARIO'];

$senha_user_new = $_POST['senha_user'];

$select = "SELECT * FROM usuario WHERE (SENHA = '$senha_user') and (ID_USUARIO ='$id')";
$query = mysqli_query($conn,$select);
$row = mysqli_num_rows($query);

if ($row != 1){
    die ("Esse usuario não existe");
} 
else {
    $update= "UPDATE usuario SET SENHA = '$senha_user_new' WHERE (SENHA = '$senha_user') and (ID_USUARIO = '$id') ";
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