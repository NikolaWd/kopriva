<?php include_once("../kopriva/inc/adminHeader.php"); ?>

<?php checkLoginAuthAdmin(); ?>

<div class="text-center">
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
</div>




<?php include_once("../kopriva/inc/adminFooter.php"); ?>