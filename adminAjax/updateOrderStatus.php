<?php

include("../func/functions.php");

$request = $_GET['request'];

if($request == "orderStatus")
{
    $id = $_POST['id'];
    $sql = "UPDATE user_product SET order_status = 1 where ID_USER = $id";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) > 0)
        echo "1";
    else
        echo "Greska!";
}


?>