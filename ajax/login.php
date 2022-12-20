<?php


include('../func/functions.php');


$request = $_GET['request'];


if($request == "login")
{
    if(isset($_POST['username']) and isset($_POST['password']))
    {
        $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $sql = "SELECT * from user where user_name = '$username'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) == 0)
        {
            $content = "Pokušaj prijave nepoznatog korisnika <b>'$username'</b>.";
            userRecords($content, '../dat/dataCheckLogin.txt');
            echo "Korisničko ime nije ispravno. Pokušajte ponovo!";
            return false;
        }else{
            $row = mysqli_fetch_assoc($res);
            if($username == isset($row['USER_NAME']) and !password_verify($password, $row['PASSWORD']))
            {
                echo "Netačna lozinka! Pokušajte ponovo!";
                return false;
            }                
                $_SESSION['korisnik'] = $row['NAME'] . " " . $row['LAST_NAME'];
                $_SESSION['status'] = $row['STATUS'];
                $_SESSION['id'] = $row['ID_USER'];
                $_SESSION['kor_ime'] = $row['USER_NAME'];
                $content = "<b>".$_SESSION['korisnik'] . "</b> se prijavio.";
                userRecords($content, '../dat/dataLogin.txt');
                echo "1";
        }       
    }    
}






?>