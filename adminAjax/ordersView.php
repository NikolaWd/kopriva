<?php

include("../func/functions.php");

$request = $_GET['request'];

if($request == "ordersView" or $request == "idOrder")
{
    $response = "";
    $response .= "
    <div class='usersAdminView'>
        <table class='table table-responsive table-hover mb-5'>
            <thead class='text-white bg-dark'>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Ime</th>
                    <th scope='col'>Prezime</th>
                    <th scope='col'>Datum</th>
                    <th scope='col'>Iznos</th>
                    <th scope='col'>Status narudžbine</th>
                    <th scope='col'>Status plaćanja</th>
                    <th scope='col'>Više detalja</th>
                </tr>
            </thead>
        <tbody>    
    ";
    $rowCount = 0;
    $sql = "SELECT NAME, LAST_NAME, DATE_ORDER__PLACED, SUM(cenaPosebno) as racun, order_status, order_pay, ID_USER, NAME_PRODUCT, AMOUNT, cenaPosebno, PHONE_NUMBER 
            FROM vwforpay ";

    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_object($res))
    {        

        $rowCount++;
        $response .= "
        
                <tr>
                <th scope='row'>$rowCount</th>
                <td>$row->NAME</td>
                <td>$row->LAST_NAME</td>
                <td>$row->DATE_ORDER__PLACED</td>
                <td><b> $row->racun RSD</b></td>";
                    if($row->order_status == 0)
                        $response .= "<td>
                                        <input type='submit' class='order btn btn-sm btn-primary' value='U pripremi' onclick='statusOrder($row->ID_USER)'>
                                    </td>";
                    else
                        $response .= "<td>
                                        <input type='submit' class='order btn btn-sm btn-success' value='Poslato' onclick='statusOrder($row->ID_USER)'>
                                    </td>";
                
        
                    if($row->order_pay == 0)
        
                        $response .=    "<td>
                                            <input type='submit' class='btn btn-sm btn-danger' value='Nije plaćeno' onclick='statusPay($row->ID_USER)'>
                                        </td>";
                    else
                        $response .=    "<td>
                                            <input type='submit' class='btn btn-sm btn-success' value='Plaćeno' onclick='statusPay($row->ID_USER)'>
                                        </td>";
                $response .=    "<td>
                                    <button class='btn btn-sm btn-warning' onclick='modal($row->ID_USER)'>Detalji</button>                                            
                                </td>
            </tr>

        ";
    }
    $response .= "</tbody>
                </table>
            </div>
        <div id='infoOrderUser'></div>";
    /*
    $ress = mysqli_query($conn, $sql);
    
    while($roww = mysqli_fetch_object($ress))
    {
          
        $response .= "
    
        <div class='modal fade' id='modal$roww->ID_USER' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 clas='modal-title' id='staticBackdropLabel'>Detalji narudžbine za korisnika: <b>$roww->NAME $roww->LAST_NAME</b></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <table class='table table-responsive table-hover'>
                            <thead class='text-white bg-dark'>
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>Proizvod</th>
                                    <th scope='col'>Kolicina</th>
                                    <th scope='col'>Ukupno</th>
                                </tr>
                            </thead>
                        <tbody>";
                    
                    $sql2 = "SELECT * FROM vwforpay GROUP BY ID_USER";                                       
                    
                    $result = mysqli_query($conn, $sql2);
                    $rowCount = 0;
                    while($rows=mysqli_fetch_object($result))
                    {
                        $rowCount++;
                        $response .= "
        
                        <tr>
                            <th scope='row'>$rowCount</th>
                            <td>$rows->NAME_PRODUCT</td>
                            <td>$rows->AMOUNT</td>
                            <td>$rows->cenaPosebno RSD</td>
                        </tr>";
                    }  
                    $response .= "</tbody>
                                </table>
                                <div>Kontakt telefon: <b>$roww->PHONE_NUMBER</b></div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Zatvori</button>
                        </div>
                    ";
                $response .= "</div>
                </div>
            </div>
        </div>
    
    
    ";
    }


    */
    


    echo $response;
}

?>