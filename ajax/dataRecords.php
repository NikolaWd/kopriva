<?php

include('../func/functions.php');


$request = $_GET['request'];

if($request == "dataRecords")
{
    $option = $_POST['option'];
    if(file_exists("../dat/".$option))
    {
        $response = file_get_contents("../dat/".$option);
        $response = str_replace("\r\n", "<br>", $response);
        echo $response;
    }
}



?>