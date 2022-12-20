<?php include('../kopriva/func/functions.php'); ?>


<?php

$sql = "SELECT NAME_PRODUCT, SUM(AMOUNT) as amount
        FROM vwforpay
        GROUP BY NAME_PRODUCT";


$test = array();
$count = 0;

$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res))
{
    $test[$count]['label'] = $row['NAME_PRODUCT'];
    $test[$count]['y'] = $row['amount'];
    $count++;
}

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/style.css">



    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../kopriva/assets/js/script.js"></script>
    
    <title>Admin Panel</title>
</head>
<body>


    <div class="header">
        <a href="adminStats.php"><img src="slicice/logooo.png" alt="Logo" width="90" height="60"></a>
        <a id="right" href="home.php"><img src="slicice/icons8-logout-48.png" alt="Izlaz"></a>
    </div>


    
<button id="sidebar" class="btn btn-primary bg-dark mx-4 my-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
<img src="https://img.icons8.com/material/34/40C057/squared-menu--v1.png"/>
</button>

<div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">Dobrodošli!</h5>
    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 mx-4">
          <li class="nav-item">
            <a class="nav-link" href="adminStats.php">Statistika</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminUsers.php">Korisnici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminProduct.php">Proizvodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminCategory.php">Kategorije</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminOrders.php">Narudžine</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="slicice/icons8-admin-settings-male-24.png" alt=""> <?php echo $_SESSION['kor_ime']; ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="adminInfo.php">Profil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="home.php?logout">Odjava</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</div>
