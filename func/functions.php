<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'kopriva')
    or die('Greska prilikom konekcije na bazu!'. mysqli_errno($conn));




function login()
{
    if(isset($_SESSION['korisnik']) and isset($_SESSION['status']) and isset($_SESSION['id']))
        return true;
    else
        return false;
}


function clean(string $string)
{
    return htmlentities($string);
}



function logout()
{
    if(isset($_GET['logout']))
    {
        $content = "<b>".$_SESSION['korisnik'] . "</b> se odjavio.";
        userRecords($content, './dat/dataLogout.txt');
        session_unset();
        session_destroy();
        redirect('home.php');
        exit();
    }
}

function redirect(string $adress)
{
    header("Location: $adress");
    exit();
}

/*
function uploadImage()
{
    $src = "uploads/";
    if(isset($_POST['avatarUser']))
    {

        if(login() and $_SESSION['status'] == 'Korisnik')
            echo $src .= "default.png";
        if(login() and $_SESSION['status'] == 'Admin')
            echo $src .= "admin.png";
        
        $dozvoljeniTipovi = array("jpg", "jpeg", "gif", "png", "bmp");
        $tmpNiz = explode(".", $_FILES['dat']['name']);
        $ekstenzija = $tmpNiz[count($tmpNiz)-1];
        if(in_array($ekstenzija, $dozvoljeniTipovi))
        {
            if($_FILES['dat']['size']<1000000)
            {
                if(move_uploaded_file($_FILES['dat']['tmp_name'], $src))
                {
                    $src. $_FILES['dat']['name'];
                    echo $src;
                }
            }else
                echo "Prevelika datoteka!";

        }else
            echo "Nedozvoljen tip!";        

    }
}
*/


function checkLoginAuthAdmin()
{
    if($_SESSION['status'] != "Admin")
    {
        redirect("home.php");
    }
}


function checkLoginAuth()
{
    if(!isset($_SESSION['id']) and !isset($_SESSION['korisnik']))
    {
        redirect("login.php");
    }
}

function listProducts()
{
    global $conn;
    $sql = "SELECT * from vwcategoryproduct group by name_product";
    $res = mysqli_query($conn, $sql);

    if(mysqli_num_rows($res) == 0)
    {
        echo    "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Ne postoji rezultat pretrage.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Zatvori'></button>
                                </div>";
        return false;
    }
    else
    {     
        
        while($row = mysqli_fetch_object($res))
        {
                echo "<div class='justify-content-between'>";
                $slika = "";
                if(file_exists($slika.$row->img_product))
                    $slika = $slika.$row->img_product;
                echo    "<div class='container2'>
                            <div class='col-lg-12 col-md-12 d-flex justify-content-center'>
                                <div class='card'>
                                    <div class='face face1'>
                                        <div class='content'>
                                            <div class='icon'>
                                                <img src='$slika' alt='Domaci proizvod'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='face face2'>
                                        <div class='content'>
                                            <h5>
                                                $row->name_product
                                            </h5>
                                            <p class='fs-6' style='text-align: justify;'>$row->description</p>
                                            <div class='card-footer'>
                                                <span class='fw-bold'>Cena: $row->price RSD</span>";
                                                if($row->status == 1)
                                                    echo  "<input type='submit' class='btn btn-success float-end ' value='Kupi odmah' onclick='addCart($row->id_product)' name='addCart' id='$row->id_product' />";
                                                else
                                                    echo " <button class='btn btn-danger float-end'>Nije dostupno</button>";
                                    echo    "</div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                echo "</div>";

            if(isset($_POST['btnPretraga']))
            {
                if(isset($_POST['selectCategory']) or isset($_POST['selectPrice'])
                    or isset($_POST['pretragaTekst']))
                {
                    $selectCategory = $_POST['selectCategory'];
                    $selectPrice = $_POST['selectPrice'];
                    $pretragaTekst = $_POST['pretragaTekst'];

                    $kategorijaZadata = false;
                    $pretragaSlovo = false;
                                        
                    $sql = "SELECT * FROM vwcategoryproduct ";

                    if($selectCategory != 0){
                        $kategorijaZadata = true;
                        $sql .= "WHERE ID_CATEGORY = $selectCategory ";                        
                    }
                    if($pretragaTekst != "" and $kategorijaZadata){
                        $pretragaSlovo = true;
                        $sql .= " AND NAME_PRODUCT like '%$pretragaTekst%' ";
                    }
                    if($pretragaTekst and $selectCategory == 0)
                        $sql .= "WHERE NAME_PRODUCT like '%$pretragaTekst%'";                    
                    
                    if($selectPrice == 1)
                        $sql .= "ORDER BY PRICE asc ";
                    if($selectPrice == 2)
                        $sql .= "ORDER BY PRICE desc ";

                    $res = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($res) == 0)
                    {
                        echo    "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Ne postoji rezultat pretrage.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Zatvori'></button>
                                </div>";
                        return false;
                    }else
                    {
                        
                        while($row = mysqli_fetch_object($res))
                        {
                            echo "<div class='col-lg-3 col-md-3 col-sm-4 justify-content-between'>";
                            $slika = "";
                            if(file_exists($slika.$row->img_product))
                                $slika = $slika.$row->img_product;
                            echo    "<div class='container2'>
                                        <div class='col-lg-12 col-md-12 d-flex justify-content-center'>
                                            <div class='card'>
                                                <div class='face face1'>
                                                    <div class='content'>
                                                        <div class='icon'>
                                                            <img src='$slika' alt='Domaci proizvod'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='face face2'>
                                                    <div class='content'>
                                                        <h5>
                                                            $row->name_product
                                                        </h5>
                                                        <p class='fs-6' style='text-align: justify;'>$row->description</p>
                                                        <div class='card-footer'>
                                                            <span class='fw-bold'>Cena: $row->price RSD</span>";
                                                            if($row->status == 1)
                                                                echo  "<input type='submit' class='btn btn-success float-end ' value='Kupi odmah' onclick='addCart($row->id_product)' name='addCart' id='$row->id_product' />";
                                                            else
                                                                echo " <button class='btn btn-danger float-end'>Nije dostupno</button>";
                                            echo       "</div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                            echo "</div>";
                        }
                        
                    }
                            
                }
            }
        }            

    }
}


function selectCategory()
{
    global $conn;
    $sql = "SELECT * FROM category order by category_name asc";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) == 0)
    {
        echo "<option>Nema kategorije</option>";
        return false;
    }
    else
    {
        while($row = mysqli_fetch_object($res))
        {
            echo "<option value='$row->ID_CATEGORY'>$row->category_name</option>";
        }
    }
}

function listOrders()
{
    global $conn;
    $idUser = $_SESSION['id'];
    $sql = "SELECT * from vwordres where id_user = $idUser";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) == 0)
    {
        echo    "<tr>
                    <td scope='row'>Vaša korpa je prazna!</td>
                </tr>";
        return false;
    }
    echo "<tbody>";
    $brReda = 0;
    while($row = mysqli_fetch_object($res))
    {
        $brReda++;
        echo    "<tr>
                    <th scope='row'>$brReda</th>
                    <td>$row->NAME_PRODUCT <input name='idProductForPay[]' value='$row->ID_PRODUCT' hidden /></td>
                    <td>$row->category_name</td>
                    <td>
                        <div class='fields'>
                            <input type='button' value='-' class='dec btn btn-sm btn-outline-danger' />
                            <input type='number' class='text-center' value='1' min='1' max='10' name='amount[]'  />
                            <input type='button' value='+'  class='inc btn btn-sm btn-outline-success' />
                        </div>        
                    </td>
                    <td>$row->PRICE RSD</td>
                    <td><input type='submit' value='Ukloni' class='btn btn-sm btn-outline-danger' onclick='refund($row->ID_PRODUCT)' /></td>
                </tr>";
    }
    echo    "<tr>
                <td align='center'><button name='createOrdred' id='createOrdred' class='btn btn-success'>Poruči</button></td>
            </tr>";

    echo "</tbody>";
    
}




 // DELETE FROM `user_product`



function orderForPay()
{
    global $conn;
    if(isset($_POST['createOrdred']))
    {
        $idProducts = count($_POST['idProductForPay']);
        #$amounts = $_POST['amount'];
        $idUser = $_SESSION['id'];


        #$sql = "INSERT INTO user_product(ID_USER, ID_PRODUCT, AMOUNT) VALUES($idUser, ";       
        $sql = '';  
        
        for($i = 0; $i<$idProducts; $i++)
        {
            $sql .= "INSERT INTO user_product(ID_USER, ID_PRODUCT, AMOUNT) VALUES($idUser, ";
            $sql .= $_POST['idProductForPay'][$i] . ", ";
            $sql .= $_POST['amount'][$i] . "); ";
        }             

        mysqli_multi_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0)
        {
            echo "
                    <div class='offset-md-3 col-md-6 alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Vaša narudžbina je uspešno kreirana!<strong> <button onclick='orders()' class='mx-3 btn btn-outline-success btn-sm fw-bold'> Proveri račun! </button>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
            ";
            
        }        
        else
        {
            echo "
                    <div class='offset-md-3 col-md-6 alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Greška prilikom kreiranja narudžbine!<strong> Pokušajte ponovo!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
            ";
        }        
                
    }
}



function numOrder()
{
    global $conn;
    $sql = "SELECT * FROM basket where ID_USER = " . $_SESSION['id'];
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) != 0)
        $num_rows = mysqli_num_rows($res);
    else
        $num_rows = 0;

    echo $num_rows;
}




function listOrdersForPay()
{
    global $conn;
    $idUser = $_SESSION['id'];
    $sql = "SELECT * from vwforpay where id_user = $idUser";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) == 0)
    {
        echo    "<tr>
                    <td scope='row'>Nemate nijednu porudžbinu!</td>
                </tr>";
        return false;
    }
    echo "<tbody>";
    $brReda = 0;
    while($row = mysqli_fetch_object($res))
    {
        $brReda++;
        echo    "<tr>
                    <th scope='row'>$brReda</th>
                    <td>$row->NAME_PRODUCT</td>
                    <td>$row->category_name</td>
                    <td>$row->DATE_ORDER__PLACED</td>
                    <td>$row->AMOUNT</td>
                    <td>$row->PRICE RSD</td>
                    <td>$row->cenaPosebno RSD</td>
                </tr>";
    }
    echo "</tbody>";
    
}


function allForPay()
{
    global $conn;
    $idUser = $_SESSION['id'];
    
    $sql = "SELECT SUM(AMOUNT * PRICE) as forPay from vwforpay where id_user = $idUser";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($res);
    echo    "
                <div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>Čestitamo!</h4>
                    <p>Ovo je prikaz svih proizvoda koje ste proučili putem naše platforme za online kupovinu!</p>
                    <hr>
                    <p class='mb-0'>Vaš račun iznosi ukupno: <strong>: $row->forPay RSD </strong></p>
                </div>
            ";
}


function customerNumber()
{
    global $conn;
    $sql = "SELECT * FROM user where status='Korisnik'";
    $res = mysqli_query($conn, $sql);
    echo mysqli_num_rows($res);
}

function orderNumber()
{
    global $conn;
    $sql = "SELECT * FROM user_product";
    $res = mysqli_query($conn, $sql);
    echo mysqli_num_rows($res);
}

function categoryNumber()
{
    global $conn;
    $sql = "SELECT * FROM category";
    $res = mysqli_query($conn, $sql);
    echo mysqli_num_rows($res);
}

function productNumber()
{
    global $conn;
    $sql = "SELECT * FROM vwcategoryproduct";
    $res = mysqli_query($conn, $sql);
    echo mysqli_num_rows($res);
}

function userRecords(string $content, string $adress)
{
    $handle = fopen($adress, 'a');
    $content = date('Y/m/d H:i:s', time()) . " - $content\r\n";
    fwrite($handle, $content);
    fclose($handle);
}


function categories()
{
    global $conn;
    $sql = "SELECT * from category";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_object($res))
    {
        echo "<option value='$row->ID_CATEGORY'>$row->category_name</option>";
    }
}


?>



