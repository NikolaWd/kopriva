<?php

include('../func/functions.php');


$request = $_GET['request'];

if($request == "dataUser")
{
    if(login())
    {
        $idUser = $_SESSION['id'];
        $sql = "SELECT * FROM user where ID_USER=$idUser";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        echo JSON_encode($row, 256);
    }    
}



?>