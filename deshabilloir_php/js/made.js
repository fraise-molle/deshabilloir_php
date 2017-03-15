(function($) {
    $(document).ready(function() {

        
        
        
        $('<div class="gogo"></div>').insertAfter($('#grid-collection>img:nth-child(6n+0)')).toggleClass('logo-col');
        
        $('<div class="gogo2"></div>').insertAfter($('#grid-collection>img:nth-child(8n+0)')).toggleClass('logo-col');
        /*
        $('<img src="images/logo_deshabilloir_modif_3.png"> ').insertAfter($('#grid-collection>img:nth-child(5n+0)')).toggleClass('logo-col');
              */  
        
        /* masonry */
        var grid = $('#-gridcollection');

        grid.masonry({
            itemSelector: '.img',
            gutter: 25

        });

$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel1').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel1"
  });
});

        
        
        
        
        
    });
        
    })(jQuery);