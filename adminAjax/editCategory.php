<?php

include('../func/functions.php');


$request = $_GET['request'];

if($request == "editCategory")
{
    $idCategory = $_POST['idCategory'];
    $sql = "SELECT * from category where ID_CATEGORY = $idCategory";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($res);

    $response = "
            <h3>Izmena kategorije</h3>
            <table class='table table-hover mb-5'>            
                <tr>
                    <td><input type='text' class='form-control' id='newNameCategory' value='$row->category_name'></td>
                    <td><input type='submit' value='Snimi' class='btn btn-success' onclick='saveUpdateCategory($row->ID_CATEGORY)'></td>
                </tr>
                <tr>
                    <td>
                        <div class='dobar los'></div>
                    </td>
                </tr>
            </table>
            
    
    ";
    echo $response;
}

?>