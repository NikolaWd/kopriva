$(document).ready(function() {
    
    $("#confirmModalPassword").click(function() {
        let editLozinka2 = $("#editLozinka2").val();
        let editNovaLozinka = $("#editNovaLozinka").val();
        let editNovaLozinka2 = $("#editNovaLozinka2").val();

        if(editLozinka2 == "" || editLozinka2.length < 6)
        {
            $("#editAnswerP").html("Neispravna lozinka!");
            return false;
        }else
        {
            $("#editAnswerP").html("");
        }
        if(editNovaLozinka.length < 6 || editNovaLozinka == "")
        {
            $("#editAnswerP").html("Nova lozinka mora imati najmanje 6 karaktera");
            return false;
        }else
        {
            $("#editAnswerP").html("");
        }
        if(editNovaLozinka2 != editNovaLozinka)
        {
            $("#editAnswerP").html("Lozinke se ne poklapaju!");
            return false;
        }else
        {
            $("#editAnswerP").html("");
        }

        $.post("ajax/editPassword.php?request=changePassword", {
            editLozinka2:editLozinka2,
            editNovaLozinka:editNovaLozinka,
            editNovaLozinka2:editNovaLozinka2
        }, function(response) {
            if(response)
                document.location.assign('login.php');
            else
                $("#editAnswerP").html(response);
        })
    });



    $("#closeModal").click(function () {
        window.location.reload();
    })

    $("#editPassword2").click(function () {
        window.location.reload();
    })
});