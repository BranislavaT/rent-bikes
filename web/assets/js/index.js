
$(document).ready(function(){
    $(window).scroll(function(){
       if ($(document).scrollTop() > 10){

           $(".br-menu-holder.navbar").css('background-color', 'rgba(0, 0, 0, 0.5)');
       } else {
           $(".br-menu-holder.navbar").css('background-color', 'transparent');

       }
    })
})