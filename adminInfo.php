<?php include("../kopriva/inc/adminHeader.php"); ?>


<?php checkLoginAuthAdmin(); ?>


<?php

$sql = "SELECT * FROM user where ID_USER = " . $_SESSION['id'];
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($res);


?>


<section id="userProfileHeight">
  <div class="container py-5 h-100 bg-dark">
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


                <h4 class="text-success"><?php echo $row->NAME . " " . $row->LAST_NAME; ?></h4>
                <p class="jsonStatus text-success"><b><?php echo $_SESSION['status']; ?></b></p>
                <br>
                    
                    <img src="slicice/icons8-edit-property-26.png" alt="">
                <!--Modal-->
                
                <button type="button" id="editModalDataAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdropA" class="btn btn-outline-success btn-sm">Podaci</button>
                
                <div class="modal fade text-dark" id="staticBackdropA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelA" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabelA">Izmena podataka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="mb-1">
                            <label for="editImeAdmin" class="col-form-label">Ime:</label>
                            <input type="text" class="form-control" value="<?php echo $row->NAME; ?>" id="editImeAdmin" autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="editPrezimeAdmin" class="col-form-label">Prezime:</label>
                            <input type="text" class="form-control" value="<?php echo $row->LAST_NAME; ?>" id="editPrezimeAdmin" autocomplete="off">
                        </div> 
                        <div class="mb-1">
                            <label for="editEmailAdmin" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" value="<?php echo $row->EMAIL; ?>" id="editEmailAdmin" autocomplete="off">
                        </div>
                        <div class="mb-1">
                            <label for="editTelefonAdmin" class="col-form-label">Telefon:</label>
                            <input type="text" class="form-control" value="<?php echo $row->PHONE_NUMBER; ?>" id="editTelefonAdmin" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="editAdresaAdmin" class="col-form-label">Adresa:</label>
                            <input type="text" class="form-control" value="<?php echo $row->adress; ?>" id="editAdresaAdmin" autocomplete="off">
                        </div>
                        <hr>
                        <div class="mb-1 table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Lozinka: </td>
                                    <td><input type="password" class="form-control" id="editLozinkaAdmin"></td>
                                </tr>                                
                            </table>
                        </div>
                          
                        <div id="editAnswerGAdmin"></div>   
                        <div id="editAnswerAdmin"></div>                   

                    </div>
                    <div class="modal-footer">
                        <input type="button" id="closeModalAdmin" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Zatvori" />
                        <input id="saveNewDataAdmin" type="submit" class="btn btn-outline-success" value="Sačuvaj" />
                    </div>
                    </div>
                    </div>
                </div>
            
                <!--Modal END-->

                <!--Modal PASSWORD-->
                <div class="mt-2">
                <img src="slicice/icons8-key-32.png" alt="">       
                
                <button type="button" id="editModalPasswordAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdropAdmin" class="btn btn-outline-success btn-sm">Lozinka</button>
                </div>
                <div class="modal fade text-dark" id="staticBackdropAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelAdmin" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabelAdmin">Izmena podataka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-1 text-danger ">Ukoliko menjate lozinku moraćete ponovo da se prijavite!</div>
                        <div class="mb-1">
                            <label for="editLozinka2Admin" class="col-form-label">Stara lozinka:</label>
                            <input type="password" class="form-control" id="editLozinka2Admin" />
                        </div>
                        <div class="mb-1">
                            <label for="editNovaLozinkaAdmin" class="col-form-label">Nova lozinka:</label>
                            <input type="password" class="form-control" id="editNovaLozinkaAdmin" /> 
                        </div> 
                        <div class="mb-1">
                            <label for="editNovaLozinka2Admin" class="col-form-label">Ponovite novu lozinku:</label>
                            <input type="password" class="form-control" id="editNovaLozinka2Admin" />
                        </div>                        
                          
                        <div id="editAnswerPAdmin" class="text-danger py-2"></div>                    

                    </div>
                    <div class="modal-footer">
                        <input type="button" id="editPassword2Admin" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Zatvori" />
                        <input id="confirmModalPasswordAdmin" type="submit" class="btn btn-outline-success" value="Sačuvaj" />
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
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->NAME; ?></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Prezime</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->LAST_NAME; ?></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->EMAIL; ?></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Telefon</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->PHONE_NUMBER; ?></p>
                  </div>
                  <div class="col-12 mb-3">
                    <h6>Adresa</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->adress; ?></p>
                  </div>
                </div>
                <h6>Moj nalog</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Korisničko ime</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->USER_NAME; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Status</h6>
                    <p class="text-muted" style="text-decoration: underline;"><?php echo $row->STATUS; ?></p>
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


<?php include("../kopriva/inc/adminFooter.php"); ?>