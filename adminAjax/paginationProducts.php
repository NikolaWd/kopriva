<?php

include("../func/functions.php");

$limit = 8;
$page = 0;
$output = "";

if(isset($_GET['page']))
    $page = $_POST['page'];
else
    $page = 1;

$start_from = ($page-1) * $limit;
$query = mysqli_query($conn, "SELECT * FROM vwcategoryproduct ORDER BY ID_PRODUCT DESC LIMIT $start_from, $limit");
$output .= "

    <div class='table-responsive'>
        <table class='table table-hover mb-5'>
        <thead class='text-white bg-dark'>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Naziv</th>
                <th scope='col'>Opis</th>
                <th scope='col'>Kategorija</th>
                <th scope='col'>Cena</th>
            </tr>
        </thead>
    <tbody>
    ";
$rowCount = 0;
if(mysqli_num_rows($query) > 0)
{
    while($row = mysqli_fetch_object($query))
    {
        $rowCount++;
        $output .= "
        
            <tr>
                <th scope='row'>$rowCount</th>
                <td>$row->NAME_PRODUCT</td>
                <td>$row->DESCRIPTION</td>
                <td>$row->category_name</td>
                <td>$row->PRICE</td>
            </tr>
        
        ";
    }
}else
    $output .= "
            <tr>
                <td>Ne postoji nijedan proizvod!</td>
            </tr>
    ";

$output .= "

            </tbody>
        </table>
    </div>
";

$sql = mysqli_query($conn, "SELECT * from product");
$total_records = mysqli_num_rows($sql);

$total_pages = ceil($total_records / $limit);
$output .= "

    <ul class='pagination'>

";

if($page > 1)
{
    $previous = $page - 1;
    $output .= "
        <li class='page-item' id='1'><span class='page-link'>Prva stranica</span></li>
        <li class='page-item' id='$previous'><span class='page-link'><i class='fa fa-arrow-left'>test</i></span></li>
    ";
}

for($i = 1; $i<=$total_pages; $i++)
{
    $active_class = "";
    if($i == $page)
    {
        $active_class = "active";
    }
    $output .= "<li class='page-item $active_class' id='$i'><span class='page-link'>$i</span></li>";
}

if($page < $total_pages)
{
    $page++;
    $output .= "<li class='page-item' id='$page'><span class='page-link'><i class='fa fa-arrow-right'>test2</i></span></li>
        <li class='page-item' id='$total_pages'><span class='page-link'>Poslednja</span></li>
    ";
}

$output .= "
    </ul>
";

echo $output;



?>