<?php


include('../func/functions.php');



$request = $_GET['request'];

if($request == "changePasswordAdmin")
{
    if(isset($_POST['editLozinka2']) and isset($_POST['editNovaLozinka']) and isset($_POST['editNovaLozinka2']))
    {        
        $editLozinka2 = clean($_POST['editLozinka2']);
        $editNovaLozinka = clean($_POST['editNovaLozinka']);
        $hashed_password = password_hash($editNovaLozinka, PASSWORD_DEFAULT);
        #$editNovaLozinka2 = clean($_POST['editNovaLozinka2']);
        $idUser = $_SESSION['id'];

        $sql = "SELECT * from user where ID_USER = $idUser";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($res);

        if(!password_verify($editLozinka2, $row->PASSWORD))
        {
            echo "Pogresna lozinka!";
            return false;
        }else{
            $sql = "UPDATE user
                    SET PASSWORD = '$hashed_password'
                    WHERE ID_USER = $idUser";
            
            if(mysqli_query($conn, $sql) === TRUE)
            {
                session_unset();
                session_destroy();
            }else
                exit();
        }
    }
}



?>