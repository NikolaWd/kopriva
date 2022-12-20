<?php include('func/functions.php'); ?>
<?php logout(); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    

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
    
    
    <link rel="stylesheet" href="css/home.css"> 
   
    <title> Kopriva </title>
    <link rel="shortcut icon" type="image" href="slicice/222-2224796_mother-nature-cosmetics-bietet-das-entsprechende-produkt-growth-tree-logo-png.png">
  </head>
  <body>

<header>
        <nav id="sve"  class="hcolor hcol navbar  fixed-top navbar-expand-lg navbar-dark ">
            <div  class="container-fluid">
              <a class="navbar-brand " href="home.php"><img id="logo" class="w-100 h-100" src="slicice/logooo.png" alt="" /></a>
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


<div id="page1"> 

    <div class="textbg">
        <h1> OSETI MOC PRIRODE </h1>
        <a  href="kopriva.html"> <button> ISTRAZI </button></a>
    </div>

    <video id="videobg" autoplay muted loop>
        <source src="video/Pexels Videos 1793014.mp4" type="video/mp4"> 
    </video>


</div>

<div id="page2" class="page container d-flex"> 
    <h2 class="display-5">Budi i ti deo naše porodice, kupuj provereno i zdravo! </h2> 
    <div class="d-flex">
        <i class="spi fa fa-handshake-o fa-2x " aria-hidden="true"></i>
        <i class="spi fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
        <i class="spi fa fa-product-hunt fa-2x " aria-hidden="true">
        </i><i class="spi fa fa-map-marker fa-2x " aria-hidden="true"></i>
    </div>
    <div class="d-flex" >
        <span class="count" data-val="523">0</span>
        <span id="o1" class="count" data-val="1300">0</span>
        <span id="o2" class=" count" data-val="25">0</span>
        <span class="count" data-val="2">0</span>
    </div>
    <div class="d-flex">
        <p class="leading-relaxed">Porudžbina</p>
        
        <p class="leading-relaxed">Zadovoljih kupaca</p>
        
        <p class="leading-relaxed">Vrste proizvoda</p>
        
        <p class="leading-relaxed">Lokacije</p>
    </div>
</div>

<div id="page3">
  <div  class="container">
          <div class="hidden">
            <h2> Benefiti naših kupaca </h2>
          </div>
      
          <div class="row">
              
              <div  class="col-lg-6 col-md-12 col-sm-12">
                  <div id="paragrafpad" class="hidden">
                    <div class="d-flex fs-4">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <p class="mx-3"> Našim kupcima je sveža i organska hrana dostupna u svakom trenutku.</p>
                    </div>
                    <div class="d-flex fs-4 ">
                      <i class="fa fa-truck" aria-hidden="true"></i>
                      <p class="mx-3"> Nasim kupcima je uvek obezbedjena sigurnost isporuke i postoji mogucnost pracenja posljke.</p>
                    </div>
                    <div class="d-flex fs-4">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <p class="mx-3"> Naši klijenti pre kupovine imaju mogucnost degustacije proizvoda i samostalan odabir proizvoda po zelji.</p>
                    </div>
                  </div>
              </div>
              <div  class="col-lg-6 col-md-12 col-sm-12 my-4"> 
                <img id="slikakakka" class="  img-fluid rounded float-end" src="slicice/poljoprivrednici-min.jpg" alt="">
              </div>
          </div>
    </div>
</div>




<!--

<div id="page3" class=""> 
  <div id="www" class="container">
    <div class="hidden">
      <h2> Benefiti naših kupaca </h2>
    </div>

    <div  id="bnf" class="row">
        
        <div  class="col-lg-12 col-md-12 col-sm-12 d_flexBenefiti">
            <div id="paragrafpad" class="hidden">
              <div class="d-flex fs-4">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p class="mx-3"> Našim kupcima je sveža i organska hrana dostupna u svakom trenutku.</p>
              </div>
              <div class="d-flex fs-4 ">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <p class="mx-3"> Nasim kupcima je uvek obezbedjena sigurnost isporuke i postoji mogucnost pracenja posljke.</p>
              </div>
              <div class="d-flex fs-4">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p class="mx-3"> Naši klijenti pre kupovine imaju mogucnost degustacije proizvoda i samostalan odabir proizvoda po zelji.</p>
              </div>
            </div>
        </div>
        <div  class="d_flexBenefiti col-lg-12 col-md-12 col-sm-12 my-4"> 
          <img id="slikakakka" class="sakri img-fluid rounded float-end" src="slicice/poljoprivrednici-min.jpg" alt="">
        </div>
    </div>
  </div>
</div>


-->
<div class="page4 container"> 
  <div id="partneri" class="container p-5">
    <h2 class="text-center font-weight-bold"> Naši partneri </h2>
    <hr>
    <section class="customer-logos slider">
      <div class="slide"><img src="slicice/logoi/1.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/2.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/3.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/4.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/5.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/6.jpg" alt="logo"></div>
      <div class="slide"><img src="slicice/logoi/7.jpg" alt="logo"></div>
    </section>
  <hr>
  </div>
</div>


<div class="page5 container"> 
  <div id="popust" class="container d-flex">
    <div class="poklopi imgleft">
      <h2> Specijalna ponuda svakog vikenda na sve naše proizvode!</h2>
      <p>Uz svaki kupljeni proizvod na poklon dobiajate kilogram gratis, a ako kupite više od dva proizvoda dobijate 20% popusta na treći proizvod.</p>
      <a href="proizvodi.html"> <button> Više  </button></a>
    </div>
    <div class="poklopi imgright">
      
      <img src="slicice/popusttttt.jpg" style="padding-bottom: 15px;" alt="20% popust" >

    </div>
    
  </div>


</div>



<div class="footer-dark">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    
    <script src="js/iner.js"></script> 
    <script src="js/arrow.js"></script>
    <script src="js/animation.js"></script> 
    <script src="js/ajax.js"></script> 
  </body>
</html>