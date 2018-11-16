///
//
/* Dropdown menu */
jQuery(document).ready(function($) {
  $('.submenu > li').matchHeight();
});
/* End of DropDown menu */

///
//
/*Slider*/
$(document).ready(function(){
$("#slider_container").owlCarousel({
items: 1,
loop: true,
autoplay: true,
smartSpeed: 1000,
nav: true,
navText: ["<img src=\"images/back.png\">","<img src=\"images/next.png\">"]

});
});
/* End of slider */