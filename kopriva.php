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
    
    
    <link rel="stylesheet" href="css/kopriva.css"> 
   
    <title> Kopriva </title>
    <link rel="shortcut icon" type="image" href="slicice/222-2224796_mother-nature-cosmetics-bietet-das-entsprechende-produkt-growth-tree-logo-png.png">
  </head>
  <body>
    <!----------------------------------------Header-------------------------------------->
  <header>
    <nav id="sve"  class="hcolor hcol navbar  fixed-top navbar-expand-lg navbar-dark ">
        <div  class="container-fluid">
          <a class="navbar-brand " href="home.html"><img id="logo" class="w-100 h-100" src="slicice/logooo.png" alt="kopriva.png" /></a>
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

    <div id="prekopriva" class="container">
        <div class="h2k">
          <h2> Planina Kukavica - selo Kopriva </h2>
        </div>

        <div class="kw d-flex">
            <div>
                <div>
                  <div class="p2p d-flex p-4">
                   <p class="fs-5"> Kukavica se nalazi na jugu Srbije, severno od Vranja i južno od Leskovca. Pripada vencu rodopskih planina. Najviši vrh je Vlaina (1442 m). Venac ovog vrha deli planinu na severni, strmiji deo, koji je bez naselja i južni, blaži, u kome ima više sela. Planina je gotovo u potpunosti pokrivena borovom i hrastovom, ali i stogodišnjom bukovom šumom, ali i lekovitim biljem. Nekada je ovo bio stočarski kraj, a sada se retko mogu videti bela stada.

                    Kroz neobične litice planine i stene planine Kukavice protiče reka Vučjanka. 
                    
                    Kukavica je poznata i po brojnim istorijskim spomenicima, a najpoznatiji lokalitet je Skobaljić grad, koji je nalazi na jednom od vrhova stenovitog grebena, na levoj obali predivne reke Vučjanke. Grad su sagradili vizantijski vladari, a 1986. godine proglašen je posebnim kulturnim dobrom. Upravo na ovoj planini nalazi se naš mali raj, selo Kopriva.</p>
                  </div>
                </div>
            </div>

            <div> 
              <img  class="imgk rounded float-end" src="slicice/vucjanka-kukavica-osvezenje.jpg" alt="">
            </div>

        </div>
      </div>
    
    
    <div id="kopriva" class="container">
      
        <h2 class="h22">Galerija </h2>


        <div class="img1 responsive">
        <div class="gallery">
            <a target="_blank" href="slicice/4.jpg">
            <img src="slicice/4.jpg" alt="Cinque Terre" width="600" height="400" >
            </a>
        </div>
        </div>


        <div class="img1 responsive">
        <div class="gallery">
            <a target="_blank" href="slicice/3.jpg">
            <img src="slicice/3.jpg" alt="Forest" width="600" height="400">
            </a>
        </div>
        </div>

        <div class="img1 responsive">
        <div class="gallery">
            <a target="_blank" href="slicice/1.jpg">
            <img src="slicice/1.jpg" alt="Northern Lights" width="600" height="400">
            </a>
        </div>
        </div>

        <div class="img1 responsive">
        <div class="gallery">
            <a target="_blank" href="slicice/4.jpg">
            <img src="slicice/4.jpg" alt="Mountains" width="600" height="400">
            </a>
        </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/bgbg.jpg">
                <img src="slicice/bgbg.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            </div>
        </div>
        
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/bg.jpg">
                <img src="slicice/bg.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/druga.jpg">
                <img src="slicice/druga.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            </div>
        </div>
        
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/bgbg.jpg">
                <img src="slicice/bgbg.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/teh.jpg">
                <img src="slicice/teh.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/transport.jpg">
                <img src="slicice/transport.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/poljoprivrednici-min.jpg">
                <img src="slicice/poljoprivrednici-min.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
        <div class="img1 responsive">
            <div class="gallery">
            <a target="_blank" href="slicice/teh.jpg">
                <img src="slicice/teh.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
        </div>
    </div>
    <a href="#" >
      <i class="to-top fa fa-arrow-up bg-dark"></i>
    </a>
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
  
  <script src="js/arrow.js"></script>
  <script src="js/animation.js"></script>    
  <script src="js/ajax.js"></script> 

</body>
</html>