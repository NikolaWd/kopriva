
/*---------------------------- saradnici slider ---------------------------------------*/
$(document).ready(function(){


  addEventListener('load', function() {
    $("#sve").removeClass('hcolor');
  });
  

  $("#pera").click(function() {
    $.load('onama.html', function() {
      document.location.assign('onama.html');
    });
  })

    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive:[{
            breakpoint: 768,
            setting: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            setting: {
                slidesToShow: 3
            }
        }]
    });


    

        /*---------------------------- saradnici slider ---------------------------------------*/

    /*---------------------------- nv bar scrol effect ---------------------------------------*/
    $(window).scroll(function(){
      if(!$(window).scrollTop()){
        $("nav").removeClass("hcolor");        
      }
      else {
        $("nav").addClass("hcolor");        
      }
    });

    /*---------------------------- nv bar scrol effect ---------------------------------------*/


    /*---------------------------- arrow to top ---------------------------------------*/

    const toTop = document.querySelector (".to-top");

      window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {
        toTop.classList.add ("active");
                }
        else {
        toTop.classList.remove("active");
        }
    })
    /*---------------------------- arrow to top ---------------------------------------*/

});
