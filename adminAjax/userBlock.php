<?php

include("../func/functions.php");

$request = $_GET['request'];

if($request == "blockUser")
{
    $idUser = $_POST['idUser'];
    $sql = "DELETE from user where id_user='$idUser'";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) != 0)
        return true;
    else
    {
        echo "Greska prilikom brisanja!";
        exit();
    }
         
}


?>