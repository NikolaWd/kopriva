<?php include("../kopriva/inc/adminHeader.php"); ?>


<?php checkLoginAuthAdmin(); ?>

<?php 
/*

$statusMsg = "";
if(isset($_POST['addProduct']))
{

    
    $name_product = $_POST['name_product'];
    $category_product = $_POST['category_product'];
    $price_product = $_POST['price_product'];
    $status_product = $_POST['status_product'];
    $description =$_POST['description'];


    if(strlen($name_product) < 3 )
        $statusMsg .= "Ime proizvoda mora imati najmanje 3 karaktera!<br>";
    if($category_product == "0")
        $statusMsg .= "Niste odabrali kategoriju!<br>";
    if($price_product == "")
        $statusMsg .= "Unesite cenu za poizvoda!<br>";
    if($status_product == "0")
        $statusMsg .= "Niste odredili status proizvoda!<br>";
    if(strlen($description) < 30)
        $statusMsg .= "Opis je previše kratak!<br>";

    





        // If file upload form is submitted
        $status = ''; 
        #if(isset($_POST["upload_image_product"])){ 
            $status = 'error'; 
            if(!empty($_FILES["image"]["name"])) { 
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                
                // Allow certain file formats 
                $allowTypes = array('jpg','png','jpeg','gif'); 
                if(in_array($fileType, $allowTypes)){ 
                    $image = $_FILES['image']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image)); 
                
                    // Insert image content into database 
                    $insert = $db->query("INSERT into product (image_product) VALUES ('$imgContent')"); 
                    
                    if(!$insert){  
                        $statusMsg .= "Neuspešno učitavanje, pokušajte kasnije.<br>"; 
                    }  
                }else{ 
                    $statusMsg .= 'Isključivo JPG, JPEG, PNG, & GIF formati su dozvoljeni!<br>'; 
                } 
            }else{ 
                $statusMsg .= 'Ništa nije skrenirano!<br>'; 
            } 
        #} 

}else
    $statusMsg = "";
 
// Display status message 
*/
?>



<h3 align='center'>Lista proizvoda</h3>

<div id="product_table">
<div class="search-panel my-2">
    <div class="form-row d-flex justify-content-end">
        <div class="form-group col-md-2">
            <input type="text" class="form-control" id="keywords" placeholder="Pretraži..." onkeyup="searchFilter();">
        </div>
        <div class="form-group col-md-2">
            <select class="form-control" id="filterBy" onchange="searchFilter();">
                <option value="">Filtriraj po statusu</option>
                <option value="1">Dostupno</option>
                <option value="2">Nedostupno</option>
            </select>
        </div>
    </div>
</div>



<?php 
// Include pagination library file 
include_once 'class/Pagination.class.php'; 
 

 
// Set some useful configuration 
$baseURL = 'getData.php'; 
$limit = 5; 
 
// Count of all records 
$query   = $conn->query("SELECT COUNT(*) as rowNum FROM vwcategoryproduct"); 
$result  = $query->fetch_assoc(); 
$rowCount= $result['rowNum']; 
 
// Initialize pagination class 
$pagConfig = array( 
    'baseURL' => $baseURL, 
    'totalRows' => $rowCount, 
    'perPage' => $limit, 
    'contentDiv' => 'dataContainer', 
    'link_func' => 'searchFilter' 
); 
$pagination =  new Pagination($pagConfig); 
 
// Fetch records based on the limit 
$query = $conn->query("SELECT * FROM vwcategoryproduct group by name_product ORDER BY id_product DESC LIMIT $limit"); 
?>

    <div class="datalist-wrapper">
        <!-- Loading overlay -->
        <div class="loading-overlay"><div class="overlay-content m-2">Učitavanje...</div></div>
        
        <!-- Data list container -->
        <div id="dataContainer" class="table-responsive">
            <table class="table table-hover">
            <thead class="text-white bg-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Slika</th>
                    <th scope="col">Naziv proizvoda</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Kategorija</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>                    
                </tr>
            </thead>
            <tbody>
                <?php 
                if($query->num_rows > 0){ $i=0; 
                    while($row = $query->fetch_assoc()){ 
                        $slika = "";
                            if(file_exists($slika.$row['img_product']))
                                $slika = $slika.$row['img_product'];
                        $i++; 
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <th><img class="image_products_style" src="<?php echo $slika; ?>" /></th>
                        <td><b><?php echo $row["name_product"]; ?></b></td>
                        <td width="50%"><?php echo $row["description"]; ?></td>
                        <td><b><?php echo $row["category_name"]; ?></b></td>
                        <td><b><?php echo $row["price"]; ?></b> RSD</td>
                        <td><?php echo ($row["status"] == 1)?'<b>Dostupno</b>':'<b>Nedostupno</b>'; ?></td>
                        <td>
                            <input type="submit" class="btn btn-warning btn-sm" value="Izmeni" onclick="editInfoProduct(<?php echo $row['id_product']; ?>)">
                        </td>
                        <td>                            
                            <input type="submit" class="btn btn-danger btn-sm" value="Obriši" onclick="deleteProduct(<?php echo $row['id_product']; ?>)">
                        </td>
                    </tr>
                <?php 
                    } 
                }else{ 
                    echo '<tr><td colspan="6"><b>Nije pronađen nijedan proizvod...</b></td></tr>'; 
                } 
                ?>
            </tbody>
            </table>
            
            <!-- Display pagination links -->
            <?php echo $pagination->createLinks(); ?>
        </div>
    </div>
</div>


<div id="editProduct" class="container bg-dark p-4 my-5">

    <h3 class="text-white">Dodavanje/Izmena Proizvoda</h3>
    <br>
            <form method="post" id="form" action="ajaxupload.php" enctype="multipart/form-data">
                <input type="text" id="idProductEdit" name="idProductEdit" hidden>
                <div class="d-flex flex-wrap p-3">
                    <div class="col-6 p-2 form-floating">
                        <input type="text" id="name_product" name="name_product" style="text-transform: capitalize;" placeholder="Unesite naziv proizvoda..." class="form-control">
                        <label for="name_product">Unesite naziv proizvoda...</label>
                    </div>
                    <div class="col-6 p-2">
                        <select name="category_product" id="category_product" class="form-control">
                            <option value="0">Izaberite kategoriju</option>
                            <?php categories(); ?>
                        </select>
                    </div>
                    <div class="col-6 p-2 form-floating">
                        <input type="number" name="price_product" id="price_product" style="text-transform: capitalize;" placeholder="Unesite cenu proizvoda..." class="form-control" >
                        <label for="price_product">Unesite cenu proizvoda...</label>
                    </div>
                    <div class="col-6 p-2">
                        <select name="status_product" id="status_product" class="form-control">
                            <option value="0">Izaberite status</option>
                            <option value="1">Dostupno</option>
                            <option value="2">Nedostupno</option>
                        </select>
                    </div>
                    <div class="col-12 p-2">
                        <div class="form-floating">
                            <textarea name="description" id="description" maxlength="160" class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                            <label for="description">Opis proizvoda</label>
                        </div>
                    </div>
                    <div class="col-6 p-2">
                        
                        <div class="d-flex">                          
                            <input type="file" name="image" accept="image/*" id="image" class="form-control">
                            <div id="preview"></div>
                            <br>
                            
                            <!--<input type="submit" class="btn btn-primary" name="upload_image_product" name="upload_image_product" value="Dodaj sliku">-->
                        </div>
                        <br>
                        <img id="p_image" src="https://img.icons8.com/material/96/40C057/kawaii-cupcake.png" alt="">
                        <br>
                        <div class="text-white" id="image_response"></div>
                    </div>
                    <div class="col-3 offset-3 p-2">
                        <br>
                        <button type="submit" name="addProduct" id="addProduct" class="btn btn-success btn-lg">Snimi proizvod</button>
                    </div>
                    <div class="col-12 p-3 text-center mt-3" id="err"></div>
                </div>
            </form>



</div>


<?php include("../kopriva/inc/adminFooter.php"); ?>

