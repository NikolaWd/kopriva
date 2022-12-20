<?php 

include("../func/functions.php");

$request = $_GET['request'];

if($request == "editProduct")
{
    $idProduct = $_POST['idProduct'];
    $sql = "SELECT * from vwcategoryproduct where id_product = $idProduct";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    echo JSON_encode($row, 256);
}



?>