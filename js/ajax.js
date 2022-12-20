$(document).ready(function () { 
    



    $("#editModalData").click(function() {

        $.post("ajax/dataUser.php?request=dataUser", function(response) {
            let user = JSON.parse(response);

            document.getElementById("editEmail").value = user.EMAIL;
            document.getElementById("editTelefon").value = user.PHONE_NUMBER;
            document.getElementById("editAdresa").value = user.adress;
            document.getElementById("editIme").value = user.NAME;
            document.getElementById("editPrezime").value = user.LAST_NAME;
        })
    });

   
    $(function () {
        $("#user").popover({
            content: "Korisničko ime mora da sadrži najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#pass").popover({
            content: "Lozinka mora da sadrži najmanje 6 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#ime").popover({
            content: "Ime mora da sadrži najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#prezime").popover({
            content: "Prezime mora da sadrži najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#email").popover({
            content: "Email mora da bude u formatu primer@gmail.com!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#brTelefona").popover({
            content: "Telefon upisati u formatu +38160111222"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#adress").popover({
            content: "Adresa mora da sadrži najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editIme").popover({
            content: "Ime mora imati najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editPrezime").popover({
            content: "Prezime mora imati najmanje 4 karaktera!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editTelefon").popover({
            content: "Telefon upisati u formatu +38160111222"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editAdresa").popover({
            content: "Adresa mora da sadrži najmanje 4 karaktera"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editEmail").popover({
            content: "Email mora da bude u formatu primer@gmail.com!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editLozinka").popover({
            content: "Unesite vašu staru lozinku"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editNovaLozinka").popover({
            content: "Unesite novu lozinku."
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    $(function () {
        $("#editNovaLozinka2").popover({
            content: "Ponovite novu lozinku!"
        }).blur(function () {
            $(this).popover('hide');
        });
    });

    dataUser();


    $("#btnPretraga").click(function() {
        let selectCategory = $("#selectCategory").val();
        let selectPrice = $("#selectPrice").val();
        let pretragaTekst = $("#pretragaTekst").val();

        if(selectCategory == 0 && selectPrice == 0 && pretragaTekst == "")
        {
            $("#odgPretraga").html('Niste zadali kriterijum.');
            return false;
        }else
            $("#odgPretraga").html("");
    })

    


    

    
    

});


function registerUser(val)
{
    if(val.length > 3)
        $("#user").css('background', 'transparent');
    else
        $("#user").css('background-color', '#990000');
    
}

function registerPass(val)
{
    if(val.length > 5)
        $("#pass").css('background', 'transparent');
    else
        $("#pass").css('background-color', '#990000');
}

function registerIme(val)
{
    if(val.length > 4)
        $("#ime").css('background', 'transparent');
    else
        $("#ime").css('background-color', '#990000');
    
}

function registerPrezime(val)
{
    if(val.length > 4)
        $("#prezime").css('background', 'transparent');
    else
        $("#prezime").css('background-color', '#990000');
}

function registerEmail(val)
{
    var validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(val.match(validRegex))
        $("#email").css('background', 'transparent');
    else
        $("#email").css('background-color', '#990000');    
}

function registerTelefon(val)
{
    var validRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    if(val.match(validRegex))
        $("#brTelefona").css('background', 'transparent');
    else
        $("#brTelefona").css('background-color', '#990000');
}

function registerAdress(val)
{
    if(val.length > 4)
        $("#adress").css('background', 'transparent');
    else
        $("#adress").css('background-color', '#990000');
}

function dataUser()
{
    $.post("ajax/dataUser.php?request=dataUser", function(response){
        let user = JSON.parse(response);

        document.getElementById("jsonImePrezime").innerHTML = user.NAME + " " + user.LAST_NAME;
        document.getElementById("jsonUsername").innerText = user.USER_NAME;
        document.getElementById("jsonIme").innerText = user.NAME;
        document.getElementById("jsonPrezime").innerHTML = user.LAST_NAME;
        document.getElementById("jsonEmail").innerHTML = user.EMAIL;
        document.getElementById("jsonTelefon").innerHTML = user.PHONE_NUMBER;
        document.getElementById("jsonAdresa").innerHTML = user.adress;
        let jsonStatus = $(".jsonStatus").text(user.STATUS);
    });
}

function addCart(idProduct)
{
    $.post("ajax/ajax.php?request=buy", {idProduct: idProduct}, function(response) {
        window.location.reload();
    })
}


function refund(idProduct)
{
    $.post("ajax/ajax.php?request=refund", {idProduct: idProduct}, function(response) {
        window.location.reload();
    })
}

function orders()
{
    document.location.assign('userOrders.php');
}
