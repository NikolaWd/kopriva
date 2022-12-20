<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'products/'; // upload directory
if(!empty($_POST['name_product']) || $_POST['category_product'] != '0' || $_POST['price_product'] > 1 || strlen($_POST['description']) < 20  || $_POST['status_product'] != '0' || $_FILES['image'])
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // check's valid format
    if(in_array($ext, $valid_extensions) and $_POST['name_product'] != "" and $_POST['category_product'] != "0" and $_POST['status_product'] != '0' and (int)$_POST['price_product'] > 1) 
    { 
        $path = $path.strtolower($final_image); 
        if(move_uploaded_file($tmp,$path)) 
        {



            #echo "<img src='$path' />";
            $name = $_POST['name_product'];
            $cat_product = $_POST['category_product'];
            $price = (int)$_POST['price_product'];
            $status = (int)$_POST['status_product'];
            $description = $_POST['description'];
            //include database configuration file
            include_once '../kopriva/func/functions.php';
            //insert form data in the database
            $insert = $conn->query("INSERT product (name_product,category,description,price,status, img_product)
            VALUES ('".$name."','".$cat_product."', '$description',  $price, $status, '".$path."')");
            //echo $insert?'ok':'err';




            
            if(isset($_POST['idProductEdit']))
            {
                $name = $_POST['name_product'];
                $cat_product = $_POST['category_product'];
                $price = (int)$_POST['price_product'];
                $status = (int)$_POST['status_product'];
                $description = $_POST['description'];
                //include database configuration file
                include_once '../kopriva/func/functions.php';

                $sql = "SELECT * from product where ID_PRODUCT = " . $_POST['idProductEdit'];
                $res = mysqli_query($conn, $sql);
                $row = mysqli_fetch_object($res);
                $query = "UPDATE product set ";
                if($row->NAME_PRODUCT != $name)
                    $query .= " NAME_PRODUCT = '$name', ";
                if($row->DESCRIPTION != $description)
                    $query .= " DESCRIPTION = '$description', ";
                if($row->PRICE != $price)
                    $query .= " PRICE = $price, ";
                if($row->img_product != $path)
                    $query .= " img_product = '$path', ";
                if($row->category != $cat_product)
                    $query .= " category = $cat_product, ";
                if($row->status != $status)
                    $query .= " status = $status ";

                

                $query .= " where ID_PRODUCT = " . $_POST['idProductEdit'];
                mysqli_query($conn, $query);
                exit();

            }


                

            

            

            
        }
    } 
    else 
    {
        echo 'invalid';
    }
}else
{
    echo "Svi podaci su obavezni.";
}
?>