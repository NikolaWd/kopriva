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
    
    
    <link rel="stylesheet" href="css/style.css"> 
   
    <title> Kopriva </title>
    <link rel="shortcut icon" type="image" href="slicice/222-2224796_mother-nature-cosmetics-bietet-das-entsprechende-produkt-growth-tree-logo-png.png">
  </head>
  <body>
    <!----------------------------------------Header-------------------------------------->
  <header>
    <nav id="sve"  class="hcolor hcol navbar  fixed-top navbar-expand-lg navbar-dark ">
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

              <?php if(login() and isset($_SESSION['korisnik'])): ?>

                <li class="animacija nav-item">
                  <a class="navh nav-link" href="korpa.php"><i class="fa fa-1x fa-shopping-basket" aria-hidden="true"></i></a>
                </li>

              <?php endif; ?>

            </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      <!--------------------------------------------------------------------->
    
      <div id="prviholder" class="benefitiholder container-fluid">
        <div class="pl pbenefiti container h-100">
          <h2> Naša porodica </h2>
        </div>
        <div id="benefit" class="container d-flex">
            <div class="col-md-12">
                <div id="drzacparagrafa"  class="container">
                  <div class="container d-flex ">
                    <p> Porodica je sastavni i najvažniji deo svačijeg života. Ona je izvor naše sreće i radosti, smeha i podrške, svega najlepšeg. Naša porodica je velika i broji sedam člana. Još od davnih vremena naši preci su se nastanili na veoma plodnom i za proizvodnju zdravom području. Kako je vreme odmicalo i kako smo sve više uočavali plodna svojstva našeg područja vremenom smo povećavali proizvodnju. U početku je to bilo za naše potrebe. Međutim, vremenom se pročulo za naše proizvode i počeli smo da razvijamo saradnju sa ljudima. Nas sedmoro smo teškom mukom postizali da obavimo sve poslove pa smo počeli da zapošljavamo radnike. Tako je sve počelo... </p>
                    <img class="img-fluid rounded float-end" src="slicice/porodica.jpg" alt="">
                  </div>
                </div>
            </div>
        </div>
      </div>

      
      <div class="benefitiholder container-fluid">
        <div class="pl pbenefiti container h-100">
          <h2> Tehnologija koju koristimo </h2>
        </div>
        <div id="benefit" class="container d-flex">
            <div class="col-md-12">
                <div id="drzacparagrafa"  class="container">
                  <div class="fd container d-flex ">
                    <img class="img-fluid rounded float-end" src="slicice/teh.jpg" alt="">
                    <p> Već dugi niz godina naša porodica održava tradiciju, pa tako pokušava da proizvodnju usmeri isključivo na prirodan i zdrav način. U prošlosti sva naša polja i naša zemlja je obrađivana ručno uz korišćenje različitih ručnih alata (motika, grabulja, lopata, plugova, ralica, drljača... ). Kako su naši proizvodi postali poznati širom Srbije, a danas i širom Evrope, potražnja se utrostručila. Kako bi naši kupci bili zadovoljni i dovoljnim količinama proizvoda snabdeveni, bili smo primorani da ubrzamo obradu kao i sam proces proizvodnje. Ubrzo smo proširili naše atare za skladištenje proizvoda, nabavili najsavremeniju tehniku i tehnologiju. Danas u proizvodji koristimo najsavremenije kombajne, traktore, različite priključne mašine i druge alate. Inovacije u našoj proizvodnji nisu uticale na smanjenje kvaliteta naših proizvoda. Baš naprotiv, savremena mehanizacija doprinela je da naši proizvodi budu još kvalitetniji.</p>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="benefitiholder container-fluid">
        <div class="pl pbenefiti container h-100">
          <h2> Podrucje na kome uzgajamo naše proizvode  </h2>
        </div>
        <div id="benefit" class="container d-flex">
            <div class="col-md-12">
                <div id="drzacparagrafa"  class="container">
                  <div class="container d-flex ">
                    <p> Područje na kome uzgajamo naše proizvode nalazi se na planini Kukavici, nedaleko od grada Leskovca u zaseoku Kopriva. Zemlja na tom području je izvrsnog kvaliteta, minimalne zagađenosti. Sama planina Kukavica je malo zastupljena stanovnicima pa tako štetni faktori koji bi mogli da ugroze kvalitet zemljišta ne postoje. Kvalitet zemljišta je izuzetno visok i omogućava proizvodnju najzastupljenijih vrsta proizvoda (sljiva, kruška, jabuka, jagoda, lubenica, grožđe, paprika, paradajz, luk, krompir...). Na Kukavici postoje brojni pašnjaci koji omogućavaju puštanje stoke na ispašu. Samim tim u prirodnim okolnostima naša stoka daje meso, mleko i mlečne proizvodnje izuzetnog kvaliteta. Ovo područje odlikuje i zastupljenost velikog broja prirodnih izvorskih pijaćih voda, kao i čist i svež vazduh. Sve prethodno navedeno je razlog zbog koga su naši proizvodi kavalitetni i širom sveta poznati.</p>
                    <img class="img-fluid rounded float-end" src="slicice/mestouzgoja.jpg" alt="">
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="benefitiholder container-fluid">
        <div class="pl pbenefiti container h-100">
          <h2> Način na koji dostavljamo proizvode kupcima </h2>
        </div>
        <div id="benefit" class="container d-flex">
            <div class="col-md-12">
                <div id="drzacparagrafa"  class="container">
                  <div   class="fd container d-flex ">
                    <img class="img-fluid rounded float-end" src="slicice/transport.jpg" alt="">
                    <p> Saradnja sa našim poslovnim partnerima je od velikog značaja, pa zbog toga težimo ka tome da sve bude besprekorno. Između ostalog, tu spadaju i usluge transporta. Proizvodi koji se uberu u našim baštama, pakuju se u gajbice, potom u kamion koji poseduje rashladni sistem, kako bi kvalitet proizvoda kada bude stigao do naših kupaca, ostao netaknut. Našim kupcima smo omogućili i praćenje pošiljke kako bi u svakom trenutku mogli da prate put i vreme dolaska njihove porudžbine. Usaradnji sa DeliveryMTK napravili smo aplikaciju "MoveToMyHome" preko koje kupci mogu da vrše praćenje pošiljke. Takođe, našim kupcima pružamo mogućnost onlajn poružbine i kupovine, gde u roku od 24h dostavljamo proizvode na teritoriji Srbije. Naši radnici dovoze i isporučuju proizvode direktno u ruke nših kupaca.</p>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="benefitiholder container-fluid">
        <div class="pl pbenefiti container h-100">
          <h2> Životinje koje gajimo  </h2>
        </div>
        <div id="benefit" class="container d-flex">
            <div class="col-md-12">
                <div id="drzacparagrafa"  class="container">
                  <div  class="container d-flex">
                    <p> Naša porodična firma se brine i uzgaja veliki boroj raznovrsne stoke i živine. Najzastupljenije životinjske vrste koje ugajamo su: kokoške, guske, patke,koze, ćurke, krave, konji, pčele, magarci, svinje i ovce. U našem se ataru brinemo za oko 200 svinja, 230 krava, 320 kokošaka, 40 košnica pčela, 12 konja, 120 ovaca, 5 magaraca, 14 koza, 10 pataka, 12 ćuraka, 10 gusaka. Sve naše životinje hrane se isključivo prirodnom i zdravom hranom koju uzgajamo i proizvodimo na našim poljima. Tako npr. stoku vodimo na ispašu tokom celog leta, hranimo ih senom i slamom koja je proizvedena na našim područjima. Živinu hranimo kukuruzom, pšenicom i drugim žitaricama koje takođe proizvodimo.   </p>
                    <img class="img-fluid rounded float-end" src="slicice/zivkojegajimo.jpg" alt="">
                  </div>
                </div>
            </div>
        </div>
      </div>




      <a href="#" >
        <i class="to-top fa fa-arrow-up bg-dark"></i>
      </a>
      
      <!--------------------------------------------------------------------->
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