$(document).ready(function() {


    $("#form").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
                    url: "ajaxupload.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                        cache: false,
                    processData:false,
                    beforeSend : function()
         {
          //$("#preview").fadeOut();
          $("#err").fadeOut();
         },
         success: function(data)
            {
                if(data=='invalid')
                {
                    // invalid file format.
                    $("#err").html("Greška! Pokušajte ponovo!").fadeIn();
                }
                else
                {
                    // view uploaded file.
                    //$("#preview").html(data).fadeIn();
                    $("#form")[0].reset(); 
                    window.location.reload();
                    
                }
            },
                error: function(e) 
                    {
                        $("#err").html(e).fadeIn();
                    }          
                });
       }));





       $("#confirmModalPasswordAdmin").click(function() {
        let editLozinka2 = $("#editLozinka2Admin").val();
        let editNovaLozinka = $("#editNovaLozinkaAdmin").val();
        let editNovaLozinka2 = $("#editNovaLozinka2Admin").val();

        if(editLozinka2 == "" || editLozinka2.length < 6)
        {
            $("#editAnswerPAdmin").html("Neispravna lozinka!");
            return false;
        }else
        {
            $("#editAnswerPAdmin").html("");
        }
        if(editNovaLozinka.length < 6 || editNovaLozinka == "")
        {
            $("#editAnswerPAdmin").html("Nova lozinka mora imati najmanje 6 karaktera");
            return false;
        }else
        {
            $("#editAnswerPAdmin").html("");
        }
        if(editNovaLozinka2 != editNovaLozinka)
        {
            $("#editAnswerPAdmin").html("Lozinke se ne poklapaju!");
            return false;
        }else
        {
            $("#editAnswerPAdmin").html("");
        }

        $.post("adminAjax/editPasswordAdmin.php?request=changePasswordAdmin", {
            editLozinka2:editLozinka2,
            editNovaLozinka:editNovaLozinka,
            editNovaLozinka2:editNovaLozinka2
        }, function(response) {
            if(response)
                document.location.assign('login.php');
            else
                $("#editAnswerPAdmin").html(response);
        })
    });














       $("#saveNewDataAdmin").click(function() {

        
        let editEmail = $("#editEmailAdmin").val();
        let editTelefon = $("#editTelefonAdmin").val();
        let editAdresa = $("#editAdresaAdmin").val();
        let editLozinka = $("#editLozinkaAdmin").val();        
        let editIme = $("#editImeAdmin").val();
        let editPrezime = $("#editPrezimeAdmin").val();

        var validRegexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var validRegexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;

        


        if(editEmail == "" || editTelefon == "" || editAdresa == ""
                || editIme == "" || editPrezime == "")
        {
            $("#editAnswerAdmin").html("Moraju biti sva polja popunjena!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }

        if(!editEmail.match(validRegexEmail))
        {
            $("#editAnswerAdmin").html("Email adresa nije u odgovarajucem formatu!");
            return false;
        } else
        {
            $("#editAnswerAdmin").html("");
        }       

        if(!editTelefon.match(validRegexPhone))
        {
            $("#editAnswerAdmin").html("Telefon nije u dobrom formatu!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }

        if(editAdresa.length < 5)
        {
            $("#editAnswerAdmin").html("Neispravna adresa!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }      

        if(editLozinka.length < 6)
        {
            $("#editAnswerAdmin").html("Neispravna lozinka!<br>Za bilo koje izmene potrebno je uneti lozinku!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }
        
        if(editIme.length < 4)
        {
            $("#editAnswerAdmin").html("Neispravno ime!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }

        if(editPrezime.length < 4)
        {
            $("#editAnswerAdmin").html("Neispravno prezime!");
            return false;
        }else
        {
            $("#editAnswerAdmin").html("");
        }

        $.post("adminAjax/updateAdminInfo.php?request=editAdminInfo", {
            editEmail:editEmail,
            editAdresa:editAdresa,
            editIme:editIme,
            editPrezime:editPrezime,
            editLozinka:editLozinka,
            editTelefon:editTelefon
        }, function(response) {
            if(response)            
                $("#editAnswerGAdmin").html("Uspešno snimljeni podaci!");
            else
                $("#editAnswerAdmin").html(response);
        })
            
    });  



    $("#closeModalAdmin").click(function(){
        window.location.reload();
    })

    $("#editPassword2Admin").click(function(){
        window.location.reload();
    })



















    $("#userDataRecords").change(function() {
        let option = $(this).val();
        if(option == '0')
        {
            $("#dataStatsUser").html("Niste odabrali nijednu opciju");
            return false;
        }
        $.post("ajax/dataRecords.php?request=dataRecords", {option:option}, function(response){
            $("#dataStatsUser").html(response);
        });
    });
    
    $("#btnAddCategory").click(function() {
        let ime = $("#categoryName").val();

        if(ime == ""){
            $("#odgCategoryName").html('Niste uneli ništa!');
            return false;
        }else
            $("#odgCategoryName").html("");
        ime.charAt(0).toUpperCase();
        $.post("adminAjax/addCategory.php?request=addCategory", {ime:ime}, function(response) {
            if(response.trim() == "1")
            {
                window.location.reload();
            }
            else            
                $("#odgCategoryName").html(response);

        })
    });
    /*
    $("#addProduct").click(function() {
        $.post("adminAjax/addProductForm.php?request=addProductFrom", function(response){
            $("#editProduct").html(response);
        })
    })
    */

});

function showCustomers()
{
    $.post("adminAjax/usersView.php?request=usersView", function(response) {
        $("#usersView").html(response);
    })
}

function showOrders()
{
    $.post("adminAjax/ordersView.php?request=ordersView", function(response){
        $("#contentPanel").html(response);
    });
}

function blockUser(idUser)
{
    let question = confirm("Da li sigurno želite da blokirate ovog korisnika?");
    if(!question)
        return false;
    else{
        $.post('adminAjax/userBlock.php?request=blockUser', {idUser:idUser}, function(response){
            if(response)
            {
                document.location.assign('admin.php#customers');
                window.location.reload();
            }else
                alert(response);            
            
        });
    }
}

function statusOrder(id)
{
    $.post("adminAjax/updateOrderStatus.php?request=orderStatus", {id:id}, function(response){
        if(response.trim() == "1")
        {
            alert("Status narudzbine promenjen!");  
            window.location.reload();          
        }            
        else
            alert(response);
    })
}

function statusPay(id)
{
    $.post("adminAjax/updatePayStatus.php?request=payStatus", {id:id}, function(response){
        if(response.trim() == "1")
        {
            alert("Status plaćanja promenjen!");
            window.location.reload();
        }            
        else
            alert(response);
    })
}


function modal(id, datum)
{
    $.post("adminAjax/modal.php?request=infoOrder", {id:id, datum:datum}, function(response) {
        $("#infoOrderUser").html(response);
    })
}

function deleteCategory(idCategory)
{
    let potvrda = confirm("Da li sigurno želite da obrišete?");
    if(!potvrda)
        return false;
    else {
            $.post("adminAjax/deleteCategory.php?request=deleteCategory", {idCategory: idCategory}, function(response){
            if(response.trim() == "1")
            {
                window.location.reload();
            }else{
                $("#odgCategoryName").html(response);
            }
        })
    }
    
}


function editCategory(idCategory)
{
    $.post("adminAjax/editCategory.php?request=editCategory", {idCategory: idCategory}, function(response){
        $("#editCategory").html(response);
    });
}

function saveUpdateCategory(idCategory)
{
    let catName = $("#newNameCategory").val();

    if(catName == "" || catName.length < 4)
    {
        $(".los").html("Neispravno ime!");
        return false;
    }

    $.post("adminAjax/updateCategory.php?request=updateCategory", {idCategory: idCategory, catName: catName}, function(response){
        if(response.trim() == "1")
        {
            window.location.reload();
        }else
            $(".los").html(response);
    })
}


function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    var filterBy = $('#filterBy').val();
    $.ajax({
        type: 'POST',
        url: 'getData.php',
        data:'page='+page_num+'&keywords='+keywords+'&filterBy='+filterBy,
        beforeSend: function () {
            $('.loading-overlay').show();
        },
        success: function (html) {
            $('#dataContainer').html(html);
            $('.loading-overlay').fadeOut("slow");
        }
    });
}


function deleteProduct(idProduct)
{
    var test = confirm("Da li ste sigurni?");
    if(!test)
        return false;
    else
    {       
        $.post("adminAjax/deleteProduct.php?request=deleteProduct", {idProduct: idProduct}, function(response){
            if(response.trim() == "1")
                window.location.reload();
            else
                alert(response);
        })
    }
}


function editInfoProduct(idProduct)
{
    $.post("adminAjax/editProduct.php?request=editProduct", {idProduct:idProduct}, function(response){
        let product = JSON.parse(response);

        document.getElementById('name_product').value = product.name_product;
        document.getElementById('category_product').value = product.category;
        document.getElementById('price_product').value = product.price;
        document.getElementById('status_product').value = product.status;
        document.getElementById('description').innerHTML = product.description;
        document.getElementById('p_image').src = product.img_product;
        document.getElementById('idProductEdit').value = product.id_product;
    })
}

