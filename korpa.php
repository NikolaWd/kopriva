<?php include('func/functions.php'); ?>
<?php logout(); ?>

<?php checkLoginAuth(); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!------------------------------ovo je za Saradnici -------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!------------------------------ovo je za Saradnici -------------------------------------->

    
    <!------------------------------------------effects--------------------------------------->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!------------------------------------------effects---------------------------------------> 
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    <link rel="stylesheet" href="css/roba.css">
    
   
    <title> Kopriva </title>
    <link rel="shortcut icon" type="image" href="slicice/222-2224796_mother-nature-cosmetics-bietet-das-entsprechende-produkt-growth-tree-logo-png.png">
  </head>
  <body>
    <!----------------------------------------Header-------------------------------------->
  <header>
    <nav id="sve"  class="hcol navbar navbar-expand-lg navbar-dark ">
        <div  class="container-fluid">
          <a class="navbar-brand " href="home.php"><img id="logo" class="w-100 h-100" src="slicice/logooo.png" alt="kopriva.png" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="drzac collapse navbar-collapse text-end fs-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="navt nav-link active" aria-current="page" href="home.php">Početna</a>
              </li>
              <li class="nav-item">
                <a id="pera" class="navt nav-link" href="onama.php"> O nama </a>
              </li>
              <li class="nav-item">
                <a class="navt nav-link" href="kopriva.php"> Kopriva </a>
              </li>
              <li class="nav-item">
                <a class="navt nav-link" href="products.php">Proizvodi</a>
              </li>

                <?php require('inc/userLogin.php'); ?>
              
              </li>
            <div class="ikonice">
              <li class="animacija nav-item">
                <a class="navh nav-link" href="https://www.instagram.com"><i class="fa fa-1x fa-instagram" aria-hidden="true"></i></a>
              </li>
              <li class="animacija nav-item">
                <a class="navh nav-link" href="https://www.facebook.com"><i class="fa fa-1x fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li class="animacija nav-item">
                <a class="navh nav-link" href="https://www.linkedin.com"><i class="fa fa-1x fa-linkedin" aria-hidden="true"></i></a>
              </li>

                <?php require('inc/bagIcon.php'); ?>

            </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!---------------------------------------------------------------------------->


<div class="container mt-5 table-responsive">
    
    <form method="post">

      <table class="table  table-dark table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Proizvod</th>
                  <th scope="col">Kategorija</th>
                  <th scope="col">Kolicina</th>
                  <th scope="col">Cena</th>
                  <th scope="col"></th>
              </tr>
          </thead>
              <?php listOrders(); ?>
      </table>

    </form>

</div>



    <div class="container">
      <?php orderForPay(); ?>
    </div>







              <!--
                <div class="modal fade text-dark" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel3">Izmena podataka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-1">
                            <label for="pImePrezime" class="col-form-label">Ime i Prezime:</label>
                            <input type="text" id="pImePrezime" class="form-control" readonly />
                        </div>
                        <div class="mb-1">
                            <label for="pAdresa" class="col-form-label">Adresa:</label>
                            <input type="text" id="pAdresa" class="form-control" readonly />
                        </div>
                        <div class="mb-1">
                            <label for="pTelefon" class="col-form-label">Telefon:</label>
                            <input type="text" id="pTelefon" class="form-control" readonly />
                        </div>   
                        
                        
                        <?php #finalOrderValues(); ?>
                          
                        <div id="porudzbinaFinal"></div>                    

                    </div>
                    <div class="modal-footer">
                        <input type="button" id="pFinal" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Zatvori" />
                        <input id="createOrdred" type="submit" class="btn btn-outline-success" value="Sačuvaj" />
                    </div>
                    </div>
                    </div>
-->












<!--

<div id="dolee" style="position: absolute;
    width: 100%;
    bottom: 0;" class="footer-dark">
  <footer>
    <div id="footer" class="container">
          <div class="row">
              <div class="col-sm-6 col-md-3 item">
                  <h3>Usluge</h3>
                  <ul>
                      <li><a href="kopriva.php">Prodaja</a></li>
                      <li><a href="kopriva.php">Turizam</a></li>
                      <li><a href="kopriva.php">Edukacija</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-3 item">
                  <h3>O nama</h3>
                  <ul>
                      <li><a href="onama.php">Domacinstvo</a></li>
                      <li><a href="onama.php">Porodica</a></li>
                      <li><a href="onama.php">Proizvodi</a></li>
                  </ul>
              </div>
              <div class="col-md-6 item text">
                  <h3>Kopriva </h3><ul>
                    <li> <a href="#footer-dark">16000 Leskovac</a> </li>
                    <li> <a href="#footer-dark">Kukavica, selo Kopriva bb</a> </li>
                    <li> <a href="#footer-dark">Telefon: 016238920</a> </li>
                </ul>
              </div>
              <div class="col item social">
                <a href="https://www.instagram.com"><i class="fa fa-1x fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-1x fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com"><i class="fa fa-1x fa-linkedin" aria-hidden="true"></i></a>
              </div>
          </div>
          <p class="copyright fs-6">Privacy and Police © Kopriva 2018</p>
    </div>
  </footer>
</div>

-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>

<script src="js/inc_dec.js"></script>
<script src="js/iner.js"></script>
<script src="js/animation.js"></script>   
<script src="js/ajax.js"></script> 



  </body>
</html>