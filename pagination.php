<?php
include('func/functions.php');

$limit = 8;
$page = 0;
$output = '';

if(isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}
$start_from = ($page - 1)*$limit;
$sql = "SELECT * FROM vwcategoryproduct ORDER BY ID_PRODUCT desc LIMIT $start_from, $limit";
$res = mysqli_query($conn, $sql);


if(mysqli_num_rows($res) == 0)
    {
        $output .=    "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Ne postoji rezultat pretrage.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Zatvori'></button>
                                </div>";
        return false;
    }
else
{
    while($row = mysqli_fetch_object($res))
        {            

            if(isset($_POST['btnPretraga']))
            {
                if(isset($_POST['selectCategory']) or isset($_POST['selectPrice'])
                    or isset($_POST['pretragaTekst']))
                {
                    $selectCategory = $_POST['selectCategory'];
                    $selectPrice = $_POST['selectPrice'];
                    $pretragaTekst = $_POST['pretragaTekst'];

                    $kategorijaZadata = false;
                    $pretragaSlovo = false;
                                        
                    $sql = "SELECT * FROM vwcategoryproduct ";

                    if($selectCategory != 0){
                        $kategorijaZadata = true;
                        $sql .= "WHERE ID_CATEGORY = $selectCategory ";                        
                    }
                    if($pretragaTekst != "" and $kategorijaZadata){
                        $pretragaSlovo = true;
                        $sql .= " AND NAME_PRODUCT like '%$pretragaTekst%' ";
                    }
                    if($pretragaTekst and $selectCategory == 0)
                        $sql .= "WHERE NAME_PRODUCT like '%$pretragaTekst%'";                    
                    
                    if($selectPrice == 1)
                        $sql .= "ORDER BY PRICE asc ";
                    if($selectPrice == 2)
                        $sql .= "ORDER BY PRICE desc ";

                    #var_dump($kategorijaZadata);
                    #var_dump($pretragaSlovo);
                    #var_dump($sql);
                    $limit = 8;
                    $page = 0;
                    $output = '';

                    if(isset($_POST['page'])){
                        $page = $_POST['page'];
                    }else{
                        $page = 1;
                    }
                    $start_from = ($page - 1)*$limit;
                    $res = mysqli_query($conn, $sql." LIMIT $start_from, $limit");

                    if(mysqli_num_rows($res) == 0)
                    {
                        $output .=    "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                            Ne postoji rezultat pretrage.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Zatvori'></button>
                                    </div>";
                            return false;
                    }else
                    {
                        
                        while($row = mysqli_fetch_object($res))
                        {
                            $output .= "<div class='col-lg-3 col-md-3 col-sm-4 justify-content-between'>";
                            $slika = "products/";
                            if(file_exists($slika.$row->img_product))
                                $slika = $slika.$row->img_product;
                        $output .=    "<div class='container2'>
                                        <div class='col-lg-12 col-md-12 d-flex justify-content-center'>
                                            <div class='card'>
                                                <div class='face face1'>
                                                    <div class='content'>
                                                        <div class='icon'>
                                                            <img src='$slika' alt='Domaci proizvod'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='face face2'>
                                                    <div class='content'>
                                                        <h5>
                                                            $row->NAME_PRODUCT
                                                        </h5>
                                                        <p class='fs-6' style='text-align: justify;'>$row->DESCRIPTION</p>
                                                        <div class='card-footer'>
                                                            <span class='fw-bold'>Cena: $row->PRICE RSD</span>
                                                            <input type='submit' class='btn btn-success float-end' value='Kupi odmah' name='addCart' id='$row->ID_PRODUCT' />
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                        $output .= "</div>";
                        }
                        
                    }
                            
                }
            }else{
                    $output .= "<div class='col-lg-3 col-md-3 col-sm-4 justify-content-between'>";
                    $slika = "products/";
                    if(file_exists($slika.$row->img_product))
                        $slika = $slika.$row->img_product;
                $output .=    "<div class='container2'>
                                <div class='col-lg-12 col-md-12 d-flex justify-content-center'>
                                    <div class='card'>
                                        <div class='face face1'>
                                            <div class='content'>
                                                <div class='icon'>
                                                    <img src='$slika' alt='Domaci proizvod'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='face face2'>
                                            <div class='content'>
                                                <h5>
                                                    $row->NAME_PRODUCT
                                                </h5>
                                                <p class='fs-6' style='text-align: justify;'>$row->DESCRIPTION</p>
                                                <div class='card-footer'>
                                                    <span class='fw-bold'>Cena: $row->PRICE RSD</span>
                                                    <input type='submit' class='btn btn-success float-end' value='Kupi odmah' name='addCart' id='$row->ID_PRODUCT' />
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                $output .= "</div>";
            }
        }         
        
        
}

$sql = mysqli_query($conn, "SELECT * FROM product");
$total_records = mysqli_num_rows($sql);
$total_pages = ceil($total_records / $limit);
$output .= '<ul class="pagination justify-content-end">';

if($page > 1){
    $previous = $page - 1;
    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
    $output .= '<li class="page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
}

for($i = 1; $i < $total_pages; $i++)
{
    $active_class = "";
    if($i == $page)
    {
        $active_class = "active";
    }
    $output .= '<li class="page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
}

if($page < $total_pages){
    $page++;
    $output .= '<li class="page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
}

$output .= '</ul>';
echo $output;

?>