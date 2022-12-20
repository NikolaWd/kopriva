<?php include("../kopriva/inc/adminHeader.php"); ?>


<?php checkLoginAuthAdmin(); ?>


<h1 class="naslov" align='center'>Spisak narudžbina</h1>

<?php
$response = "";
$response .= "
<div class='usersAdminView'>
    <div class='table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg'>
        <table class='table table-hover mb-5'>
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
        FROM vwforpay
        GROUP BY ID_USER";

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
        </div>
    <div class='mx-4' id='infoOrderUser'></div>";

echo $response;


?>


<?php include("../kopriva/inc/adminFooter.php"); ?>