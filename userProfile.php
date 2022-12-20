<?php include('func/functions.php'); ?>
<?php logout(); ?>
<?php checkLoginAuth(); ?>


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
    
   
    
    <!--------------------->
    <link rel="stylesheet" href="css/userProfile.css">
   
    <title> Kopriva </title>
    <link rel="shortcut icon" type="image" href="slicice/222-2224796_mother-nature-cosmetics-bietet-das-entsprechende-produkt-growth-tree-logo-png.png">
  </head>
  <body>
    <!----------------------------------------Header-------------------------------------->
  <header>
    <nav id="sve"  class="hcolor hcol navbar fixed-top navbar-expand-lg navbar-dark ">
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


<!--User Profile-->

<section id="userProfileHeight" class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-5 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                
                
                <img src="uploads/default.png"
                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    
                    <!--
                    <form method="post" enctype="multipart/form-data">
                      <input class="form-control form-control-sm" accept="image/jpg, image/jpeg, image/png, image/gif" name="imgUser" id="imgUser" type="file" />
                      <input type="submit" class="btn btn-outline-success btn-sm" name="avatarUser" id="avatarUser" value="Sačuvaj sliku"><br>
                    </form>
                    <br>
                    -->


                <h4 class="text-success" id="jsonImePrezime">Ime Prezime</h4>
                <p class="jsonStatus text-success">Status</p>
                <br>
                    
                    <img src="slicice/icons8-edit-property-26.png" alt="">
                <!--Modal-->
                
                <button type="button" id="editModalData" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline-success btn-sm">Podaci</button>
                
                <div class="modal fade text-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Izmena podataka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="mb-1">
                            <label for="editIme" class="col-form-label">Ime:</label>
                            <input type="text" class="form-control" id="editIme" autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="editPrezime" class="col-form-label">Prezime:</label>
                            <input type="text" class="form-control" id="editPrezime" autocomplete="off">
                        </div> 
                        <div class="mb-1">
                            <label for="editEmail" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="editEmail" autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="editTelefon" class="col-form-label">Telefon:</label>
                            <input type="text" class="form-control" id="editTelefon" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="editAdresa" class="col-form-label">Adresa:</label>
                            <input type="text" class="form-control" id="editAdresa" autocomplete="off">
                        </div>
                        <hr>
                        <div class="mb-1 table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Lozinka: </td>
                                    <td><input type="password" class="form-control" id="editLozinka"></td>
                                </tr>                                
                            </table>
                        </div>
                          
                        <div id="editAnswerG"></div>   
                        <div id="editAnswer"></div>                   

                    </div>
                    <div class="modal-footer">
                        <input type="button" id="closeModal" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Zatvori" />
                        <input id="saveNewData" type="submit" class="btn btn-outline-success" value="Sačuvaj" />
                    </div>
                    </div>
                    </div>
                </div>
            
                <!--Modal END-->

                <!--Modal PASSWORD-->
                <div class="mt-2">
                <img src="slicice/icons8-key-32.png" alt="">       
                
                <button type="button" id="editModalPassword" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-outline-success btn-sm">Lozinka</button>
                </div>
                <div class="modal fade text-dark" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel2">Izmena podataka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-1 text-danger ">Ukoliko menjate lozinku moraćete ponovo da se prijavite!</div>
                        <div class="mb-1">
                            <label for="editLozinka2" class="col-form-label">Stara lozinka:</label>
                            <input type="password" class="form-control" id="editLozinka2" />
                        </div>
                        <div class="mb-1">
                            <label for="editNovaLozinka" class="col-form-label">Nova lozinka:</label>
                            <input type="password" class="form-control" id="editNovaLozinka" /> 
                        </div> 
                        <div class="mb-1">
                            <label for="editNovaLozinka2" class="col-form-label">Ponovite novu lozinku:</label>
                            <input type="password" class="form-control" id="editNovaLozinka2" />
                        </div>                        
                          
                        <div id="editAnswerP"></div>                    

                    </div>
                    <div class="modal-footer">
                        <input type="button" id="editPassword2" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Zatvori" />
                        <input id="confirmModalPassword" type="submit" class="btn btn-outline-success" value="Sačuvaj" />
                    </div>
                    </div>
                    </div>
                </div>            
            </div>


            <div class="col-md-7">
              <div class="card-body p-4">
                <h6>Moji podaci</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                    <div class="col-12 mb-3">
                    <h6>Ime</h6>
                    <p id="jsonIme" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Prezime</h6>
                    <p id="jsonPrezime" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Email</h6>
                    <p id="jsonEmail" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Telefon</h6>
                    <p id="jsonTelefon" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Adresa</h6>
                    <p id="jsonAdresa" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                </div>
                <h6>Moj nalog</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Korisničko ime</h6>
                    <p id="jsonUsername" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Status</h6>
                    <p class="jsonStatus" class="text-muted" style="text-decoration: underline;"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div  class="footer-dark">
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
    <script src="js/editPassword.js"></script>
    <script src="js/editUser.js"></script>

  </body>
</html>