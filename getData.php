<?php 
if(isset($_POST['page'])){ 
    // Include pagination library file 
    include_once 'class/Pagination.class.php'; 
     
    // Include database configuration file 
    require_once 'func/functions.php'; 
     
    // Set some useful configuration 
    $baseURL = 'getData.php'; 
    $offset = !empty($_POST['page'])?$_POST['page']:0; 
    $limit = 5; 
     
    // Set conditions for search 
    $whereSQL = ''; 
    if(!empty($_POST['keywords'])){ 
        $whereSQL = " WHERE (DESCRIPTION LIKE '%".$_POST['keywords']."%' OR NAME_PRODUCT LIKE '%".$_POST['keywords']."%' ) "; 
    } 
    if(isset($_POST['filterBy']) && $_POST['filterBy'] != ''){ 
        $whereSQL .= (strpos($whereSQL, 'WHERE') !== false)?" AND ":" WHERE "; 
        $whereSQL .= " status = ".$_POST['filterBy']; 
    } 
     
    // Count of all records 
    $query   = $conn->query("SELECT COUNT(*) as rowNum FROM vwcategoryproduct ".$whereSQL); 
    $result  = $query->fetch_assoc(); 
    $rowCount= $result['rowNum']; 
     
    // Initialize pagination class 
    $pagConfig = array( 
        'baseURL' => $baseURL, 
        'totalRows' => $rowCount, 
        'perPage' => $limit, 
        'currentPage' => $offset, 
        'contentDiv' => 'dataContainer', 
        'link_func' => 'searchFilter' 
    ); 
    $pagination =  new Pagination($pagConfig); 
 
    // Fetch records based on the offset and limit 
    $query = $conn->query("SELECT * FROM vwcategoryproduct $whereSQL group by name_product ORDER BY ID_PRODUCT DESC LIMIT $offset,$limit"); 
?> 
    <!-- Data list container --> 
    <div class="table-responsive">
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
    </div>
     
    <!-- Display pagination links --> 
    <?php echo $pagination->createLinks(); ?> 
<?php 
} 
?>