<?php include('func/functions.php'); ?>


<?php checkLoginAuthAdmin(); ?>


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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
  </head>
  <body>
    

    
        <div id="nav" class="d-flex justify-content-between bg-dark">
            <a href="admin.php">
                <img src="slicice/logooo.png" alt="Kopriva.doo" width="90" height="60">
            </a>
            <a href="home.php">
                <img src="slicice/icons8-logout-48.png" alt="Izlaz">
            </a>
        </div>



<div class="d-flex">
    <div class="col-lg-2 col-md-3 col-sm-5">
            <div id="sidemenu" class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Dobrodošli!</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="./admin.php" class="nav-link link-dark" aria-current="page">
                        Statistika
                        </a>
                    </li>
                    <li>
                        <a href="#customers" class="nav-link link-dark" onclick="showCustomers()">
                        Korisnici
                        </a>
                    </li>
                    <li>
                        <a href="#products" class="nav-link link-dark" onclick="showProducts()">
                        Proizvodi
                        </a>
                    </li>
                    <li>
                        <a href="#category" class="nav-link link-dark" onclick="showCategory()">
                        Kategorije
                        </a>
                    </li>
                    <li>
                        <a href="#orders" class="nav-link link-dark" onclick="showOrders()">
                        Narudžbine
                        </a>
                    </li>
                    </ul>
                    <hr>
                <div class="dropdown">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="slicice/icons8-admin-settings-male-24.png" alt="" width="35" height="35" class="rounded-circle me-2">
                            <strong><?php echo $_SESSION['kor_ime']; ?></strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="home.php?logout">Odjava</a></li>
                        </ul>
                </div>
            </div>
    </div>

    <div id="contentPanel" class="col-lg-10 col-md-9 col-sm-7  col-xs-12">
        

        <div id="main-content" class="container allContent-section py-4 justify-content-between d-flex flex-wrap">

                <div class="card bg-light mb-3 kartica" style="max-width: 18rem;">
                    <div class="card-header"><strong><h5> Broj Korisnika: <span class="badge bg-success"><?php customerNumber(); ?></span></h5></strong></div>
                    <div class="card-body">
                        <h5 class="card-img" align='center'><img src="https://img.icons8.com/material/100/40C057/search-client.png"/></h5>
                    </div>
                </div>

                <div class="card bg-light mb-3 kartica" style="max-width: 18rem;">
                    <div class="card-header"><strong><h5> Broj Narudžbina: <span class="badge bg-success"><?php orderNumber(); ?></span></h5></strong></div>
                    <div class="card-body">
                        <h5 class="card-img" align='center'><img src="https://img.icons8.com/material/100/40C057/purchase-order--v1.png"/></h5>
                    </div>
                </div>


                <div class="card bg-light mb-3 kartica" style="max-width: 18rem;">
                    <div class="card-header"><strong><h5> Broj Kategorija: <span class="badge bg-success"><?php categoryNumber(); ?></span></h5></strong></div>
                    <div class="card-body">
                        <h5 class="card-img" align='center'><img src="https://img.icons8.com/dotty/110/40C057/diversity.png"/></h5>
                    </div>
                </div>

                <div class="card bg-light mb-3 kartica" style="max-width: 18rem;">
                    <div class="card-header"><strong><h5> Broj Proizvoda: <span class="badge bg-success"><?php productNumber(); ?></span></h5></strong></div>
                    <div class="card-body">
                        <h5 class="card-img" align='center'><img src="https://img.icons8.com/material/100/40C057/unpacking.png"/></h5>
                    </div>
                </div>
        </div>

        <div id="chartContainer"></div>

        <div class="container-fluid mt-5 d-flex">
            <div class="col-12 text-center">
                <div class="glavni">
                    <h4 class="mb-4">Akcije Korisnika</h4>
                    <select class="form-select" name="userDataRecords" id="userDataRecords">
                        <option value="0">-- Izaberi opciju --</option>
                        <option value="dataLogin.txt">Statistika logovanja</option>
                        <option value="dataLogout.txt">Statistika odjave</option>
                        <option value="dataCheckLogin.txt">Sumnjivi pokušaji</option>
                    </select>
                </div>
                <div class="glavni">
                    <div class="text-center" id="dataStatsUser">Niste odabrali nijednu opciju!</div>
                </div>
            </div>            
        </div>

    </div>
</div>




<script>
        window.onload = function() {
        
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1",
            title:{
                text: "Najprodavaniji Proizvodi"
            },
            axisY: {
                title: "Broj poručivanja (u komadima)"
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## kom",
                dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        
        }
</script>



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="assets/js/script.js"></script>


  </body>
</html>




    