$(document).ready(function() {

    $("#saveNewData").click(function() {

        
        let editEmail = $("#editEmail").val();
        let editTelefon = $("#editTelefon").val();
        let editAdresa = $("#editAdresa").val();
        let editLozinka = $("#editLozinka").val();        
        let editIme = $("#editIme").val();
        let editPrezime = $("#editPrezime").val();

        var validRegexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var validRegexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;

        


        if(editEmail == "" || editTelefon == "" || editAdresa == ""
                || editIme == "" || editPrezime == "")
        {
            $("#editAnswer").html("Moraju biti sva polja popunjena!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }

        if(!editEmail.match(validRegexEmail))
        {
            $("#editAnswer").html("Email adresa nije u odgovarajucem formatu!");
            return false;
        } else
        {
            $("#editAnswer").html("");
        }       

        if(!editTelefon.match(validRegexPhone))
        {
            $("#editAnswer").html("Telefon nije u dobrom formatu!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }

        if(editAdresa.length < 5)
        {
            $("#editAnswer").html("Neispravna adresa!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }      

        if(editLozinka.length < 6)
        {
            $("#editAnswer").html("Neispravna lozinka!<br>Za bilo koje izmene potrebno je uneti lozinku!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }
        
        if(editIme.length < 4)
        {
            $("#editAnswer").html("Neispravno ime!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }

        if(editPrezime.length < 4)
        {
            $("#editAnswer").html("Neispravno prezime!");
            return false;
        }else
        {
            $("#editAnswer").html("");
        }

        $.post("ajax/ajax.php?request=editUser", {
            editEmail:editEmail,
            editAdresa:editAdresa,
            editIme:editIme,
            editPrezime:editPrezime,
            editLozinka:editLozinka,
            editTelefon:editTelefon
        }, function(response) {
            if(response)            
                $("#editAnswerG").html("Uspešno snimljeni podaci!");
            else
                $("#editAnswer").html(response);
        })
            
    });  


});