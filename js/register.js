$(document).ready(function() {


    $("#linkRegister").click(function() {
        let user = $("#user").val();
        let pass = $("#pass").val();
        let ime = $("#ime").val();
        let prezime = $("#prezime").val();
        let email = $("#email").val();
        let brTelefona = $("#brTelefona").val();
        let adress = $("#adress").val();
        var validRegexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var validRegexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;

        if(adress.length < 4)
        {
            alert('Adresa mora imati najmanje 4 karaktera!');
            return false;
        }
        if(prezime.length < 4)
        {
            alert("Prezime mora imati najmanje 4 karaktera!");
            return false;
        }
        if(ime.length < 4)
        {
            alert('Neispravno ime')
        }
        if(pass.length < 6)
        {
            alert("Lozinka je prekratka!");
            return false;
        }

        if(user.length < 4)
        {
            alert('Neispravno korisnicko ime!');
            return false;
        }

        if(!brTelefona.match(validRegexPhone))
        {
            alert('Telefon nije u dobrom formatu!');
            return false;
        }
        
        if(user == "" || pass == "" || ime == "" || prezime == "" || email == "" || brTelefona == "" || adress == "")
        {
            alert('Svi podaci su obavezni!');
            return false;
        }

        if(!email.match(validRegexEmail))
        {
            alert('Email nije u dobrom formatu!');
            return false;
        }
        $.post("ajax/register.php?request=register", {user:user, pass:pass, ime:ime, prezime:prezime, email:email, brTelefona:brTelefona, adress:adress}, function(response) {
            if(response)
            {
                alert('Uspesna registracija! Prijavite se!');
                document.location.assign('login.php');
            }                
            else
                alert(response);
                
        })

    });

    
})