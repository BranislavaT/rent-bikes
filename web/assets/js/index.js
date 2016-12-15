
$(document).ready(function(){
    $(window).scroll(function(){
       if ($(document).scrollTop() > 10){

           $(".br-menu-holder").addClass('br-menu-black-holder');
       } else {
           $(".br-menu-holder").removeClass('br-menu-black-holder');
       }
    })
})