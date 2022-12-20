<?php

include("../func/functions.php");


$request = $_GET['request'];

if($request == "updateCategory")
{
    $idCategory = $_POST['idCategory'];
    $catName = ucfirst($_POST['catName']);
    $sql = "UPDATE category SET category_name = '$catName' where ID_CATEGORY = $idCategory";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo "Greška! Neuspešna izmena!";
        exit();
    }else
        echo "1";
}



?>