<?php

include('../func/functions.php');


$request = $_GET['request'];

if($request == "addCategory")
{
    $ime = ucfirst($_POST['ime']);
    $sql = "SELECT * from category where category_name = '$ime'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) != 0)
    {
        echo "Ova kategorija već postoji!";
        exit();
    }else
    {
        $sql = "INSERT INTO category(category_name) VALUES('$ime')";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) != 0)
        {
            echo "1";

        }else{
            echo "Greška! Kategorija nije dodata!";
            exit();
        }
    }
    
}