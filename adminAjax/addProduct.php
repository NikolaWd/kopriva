<?php

include("../func/functions.php");

$request = $_GET['request'];


if($request == "addProduct")
{
    $name_product = $_POST['name_product'];
    $category_product = $_POST['category_product'];
    $price_product = (int)$_POST['price_product'];
    $status_product = $_POST['status_product'];
    $description = $_POST['description'];
    $slika = $_FILES['slika']['name'];

    $sql = "INSERT INTO product(name_product, description, price, category, status, image_product)
            VALUES('$name_product', '$description', $price_product, '$status_product', $slika)
    ";

    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) != 0)
    {
        echo "Uspesno snimljeni podaci!";
    }else
        echo "GRESKA!";
}













?>