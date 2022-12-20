<?php

include('../func/functions.php');



$request = $_GET['request'];

if($request == "register")
{
    if(isset($_POST['user']) or isset($_POST['pass']) or isset($_POST['ime'])
        or isset($_POST['prezime']) or isset($_POST['email']) or isset($_POST['brTelefona']) or isset($_POST['adress']))
    {
        $user = clean($_POST['user']);
        $pass = clean($_POST['pass']);
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $ime = clean($_POST['ime']);
        $prezime = clean($_POST['prezime']);
        $email = clean($_POST['email']);
        $brTelefona = clean($_POST['brTelefona']);
        $adress = clean($_POST['adress']);

        $sql = "SELECT * from user where USER_NAME = '$user'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) > 0)
        {
            echo "Korisnicko ime ili email vec postoje u bazi!";
            return false;
        }

        $sql = "SELECT * from user where email = '$email'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res))
        {
            echo "Korisnicko ime ili email vec postoje u bazi!";
            return false;
        }

        $sql = "INSERT INTO user(user_name, password, name, last_name, email, status, phone_number, adress)";
        $sql .= "VALUES('$user', '$hashed_password', '$ime', '$prezime', '$email', 'Korisnik', '$brTelefona', '$adress')";

        $res = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) == 0)
        {
            echo "Greska prilikom registracije!";
            return false;
        }else
            return true;
    }
}






?>