<?php

include("../func/functions.php");

$request = $_GET['request'];

if($request == "deleteProduct")
{
    $id_product = $_POST['idProduct'];
    $sql = "DELETE from product where ID_PRODUCT = $id_product";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) != 0)
        echo "1";
    else
        echo "Greska prilikom brisanja!";
}


?>