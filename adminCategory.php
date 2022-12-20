<?php include("../kopriva/inc/adminHeader.php"); ?>



<?php checkLoginAuthAdmin(); ?>



<h1 class="naslov my-2" align='center'>Spisak kategorija</h1>

    <div id="dodajK" class="table-responsive my-3">
      <table>
        <tbody>
          <tr>
            <td>
              <input type="text" placeholder="Ime kategorije" style="text-transform: capitalize;" class="form-control" id="categoryName" required>
            </td>
            <td>
              <input type="submit" name="btnAddCategory" id="btnAddCategory" class="btn btn-primary" value="Dodaj kategoriju">
            </td>
          </tr>
          <tr><div id="odgCategoryName"></div></tr>
        </tbody>
      </table>
    </div>


  <div class="d-flex">


    <?php
    $response = "";
    $response .= "
    <div class='kategorije col-5'>
        
        <div id='categoryWidth' class='table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg'>
            <table class='table table-hover mb-5'>
                <thead class='text-white bg-dark'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Naziv Kategorije</th>
                        <th scope='col'></th>
                        <th scope='col'></th>
                    </tr>
                </thead>
            <tbody>    
    ";
    $rowCount = 0;
    $sql = "SELECT *
            FROM category";

    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_object($res))
    {
        $rowCount++;
        $response .= "
        
                <tr>
                <th scope='row'>$rowCount</th>
                <td>$row->category_name</td>";                
                $response .=    "<td align='center'>
                                    <button class='btn  btn-warning' onclick='editCategory($row->ID_CATEGORY)'>Izmeni</button>
                                </td>
                                <td>
                                    <button class='btn  btn-danger' onclick='deleteCategory($row->ID_CATEGORY)'>Obriši</button>                                            
                                </td>
            </tr>

        ";
    }
        $response .= "</tbody>
                    </table>
            </div>     
          </div>
          
          ";

echo $response;


?>

      <div id="editCategory">
        
      </div>


</div>

<?php include("../kopriva/inc/adminFooter.php"); ?>