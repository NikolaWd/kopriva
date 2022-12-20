<?php include_once("../kopriva/inc/adminHeader.php"); ?>

<?php checkLoginAuthAdmin(); ?>

<h1 class="naslov" align='center'>Spisak korisnika</h1>
<?php

$response = "";
    $response .= "
    <div class='usersAdminView table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg'>
        <table class='table table-responsive table-hover'>
            <thead class='text-white bg-dark'>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Ime</th>
                    <th scope='col'>Prezime</th>
                    <th scope='col'>Korisničko ime</th>
                    <th scope='col'>E-mail adresa</th>
                    <th scope='col'>Broj telefona</th>
                    <th scope='col'>Datum registracije</th>
                    <th scope='col'>Akcija</th>
                </tr>
            </thead>
        <tbody>    
    ";
    $rowCount = 0;
    $sql = "SELECT * FROM user where status = 'Korisnik'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_object($res))
    {
        $rowCount++;
        $response .= "
        
                <tr>
                <th scope='row'>$rowCount</th>
                <td>$row->NAME</td>
                <td>$row->LAST_NAME</td>
                <td>$row->USER_NAME</td>
                <td>$row->EMAIL</td>
                <td>$row->PHONE_NUMBER</td>
                <td>$row->created</td>
                <td>
                    <input type='submit' class='btn btn-sm btn-outline-danger' value='Obrisi' onclick='blockUser($row->ID_USER)'>
                </td>
            </tr>

        ";
    }

    $response .= "</tbody>
                </table>
            </div>";
    echo $response;


?>


<?php include_once("../kopriva/inc/adminFooter.php"); ?>