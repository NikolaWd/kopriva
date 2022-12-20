<?php

include('../func/functions.php');

$request = $_GET['request'];
if($request == "deleteCategory")
{
    $idCategory = $_POST['idCategory'];

    $query = "SELECT * from product where category = $idCategory";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        echo "Nije moguće obrisati.<br>Neki proizvodi pripadaju ovoj kategoriji!";
        exit();
    }
    else
    {
        $sql = "DELETE from category where id_category = $idCategory";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) != 0)
        {
            echo "1";
        
        }else
            {
                echo "Greska prilikom brisanja!";
                exit();
            }
    }

    
}