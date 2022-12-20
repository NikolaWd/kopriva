<?php

include('../func/functions.php');

$request = $_GET['request'];
$response = "";
if($request == "infoOrder"){

    $id = $_POST['id'];
    $sql = "SELECT * FROM vwforpay where ID_USER = $id";
    $sql2 = "SELECT * FROM vwforpay where ID_USER = $id";
    $res = mysqli_query($conn, $sql);
    $res2 = mysqli_query($conn, $sql2);


    $roww = mysqli_fetch_object($res2);
    $rowCount = 0;


    $response = "
    <h4 class='mt-5 mb-4 mx-4'>Detalji o narudžbini za korisnika: $roww->NAME $roww->LAST_NAME</h4>
        <div class='infoORder table-responsive'>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Proizvod</th>
                    <th scope='col'>Kolicina</th>
                    <th scope='col'>Ukupno</th>
                </tr>
            </thead>
            <tbody>";
            while($row=mysqli_fetch_object($res))
            {
                $rowCount++;
                $response .= "
                                <tr>
                                    <th scope='row'>".$rowCount."</th>
                                    <td>$row->NAME_PRODUCT</td>
                                    <td>$row->AMOUNT</td>
                                    <td>$row->cenaPosebno</td>
                                </tr>
                ";

            }
                
        $response .=    "</tbody>
        </table>
        <div class='m-3'>Kontakt telefon: <b>$roww->PHONE_NUMBER</b></div>
        </div>";

        echo $response;
}
?>