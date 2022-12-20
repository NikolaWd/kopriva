<?php

include('../func/functions.php');


$request = $_GET['request'];




if($request == "editUser")
{
    /*      editEmail:editEmail,
            editAdresa:editAdresa,
            editIme:editIme,
            editPrezime:editPrezime,
            editLozinka:editLozinka,
            editTelefon:editTelefon*/
    if(isset($_POST['editEmail']) or isset($_POST['editAdresa']) or isset($_POST['editIme'])
        or isset($_POST['editPrezime']) or isset($_POST['editLozinka']) or isset($_POST['editTelefon']))
    {
        $idUser = $_SESSION['id'];
        $editEmail = clean($_POST['editEmail']);
        $editAdresa = clean($_POST['editAdresa']);
        $editIme = clean($_POST['editIme']);
        $editPrezime = clean($_POST['editPrezime']);
        $editLozinka = clean($_POST['editLozinka']);
        $editTelefon = clean($_POST['editTelefon']);

        $sql = "SELECT * FROM user where ID_USER = $idUser";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) == 0)
        {
            echo "Greska! Korisnik nije pronadjen!";
            return false;
        }else
        {
            $row = mysqli_fetch_assoc($res);
            if(!password_verify($editLozinka, $row['PASSWORD']))
            {
                echo "Pogrešna lozinka! Podaci nisu snimljeni.";
                return false;
            }
            $sql2 = "UPDATE user SET EMAIL = '$editEmail', adress = '$editAdresa', NAME = '$editIme', LAST_NAME = '$editPrezime'";
            $sql2 .= ", PHONE_NUMBER = '$editTelefon' where ID_USER = $idUser";

            
            if(mysqli_query($conn, $sql2) === TRUE)
            {
                return false;
            }else
            {
                echo "Greska! Podaci nisu snimljeni!";
                exit();
            }            
        }
    }
}



if($request == "buy")
{
    if(isset($_POST['idProduct']))
    {
        $idProduct = $_POST['idProduct'];
        if(login())
            $idUser = $_SESSION['id'];
        else{
            echo "Samo prijavljeni korisnici mogu da kupuju.";
            exit();
        }
            
        $sql = "SELECT * from basket where id_user = $idUser and id_product = $idProduct";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) != 0)
        {
            echo "Ovaj proizvod je trenutno u korpi!";
            return false;
        }else{
            $sql = "INSERT INTO basket(id_user, id_product) values($idUser, $idProduct)";
            mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn) != 0 and !login())
            {
                echo "Samo prijavljeni korisnici mogu da kupuju!";
                return false;
            }else
                echo "Uspesno ste dodali proizvod!";

        }

        

    }
}



if($request == "refund")
{
    if(isset($_POST['idProduct']))
    {
        $idProduct = $_POST['idProduct'];
        $idUser = $_SESSION['id'];
                    
        $sql = "DELETE FROM basket where id_product = $idProduct";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) == 0)
        {
            echo "Greska!";
            return false;
        }else{
            echo "Uspesno ste obrisali proizvod!";
            
        }

        

    }
}

?>