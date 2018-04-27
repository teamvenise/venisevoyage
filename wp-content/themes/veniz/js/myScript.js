jQuery(document).ready (function(){
    var datepickerHandler = jQuery(".date-picker-wp");
    datepickerHandler.datepicker({
        dateFormat: "dd-mm-yy"
    });

      jQuery('#carousel-gallery').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    itemWidth: 100,
    itemMargin: 7,
    asNavFor: '#slider-gallery'
  });

  jQuery('#slider-gallery').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    sync: "#carousel-gallery"
  });

});