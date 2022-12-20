$(document).ready(function() {

    $("#linkLogin").click(function() {
        let username = $("#username").val();
        let password = $("#password").val();

        if(username == "" || password == "")
        {
            $(function () {
                $("#linkLogin").popover({
                    content: "Korisničko ime i lozinka su obavezna polja!"
                }).blur(function () {
                    $(this).popover('hide');
                });
            });
            return false;
        }
        $.post("ajax/login.php?request=login", {username:username, password:password}, function(response) {
            if(response.trim() == "1"){
                document.location.assign('home.php');                
            }else
                alert(response);
        })
    });
    
})