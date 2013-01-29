/*
Bones Scripts File
Author: Eddie Machado
*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

jQuery(document).ready(function($) {

    /* getting viewport width */
    var responsive_viewport = $(window).width();
    


    if (responsive_viewport < 768) {
        
        var $container = $('#container');
        // initialize Isotope
        
        $container.isotope({
          animationEngine: 'jquery',
          layoutMode : 'fitRows',
          resizable: false, // disable normal resizing
          masonry: { columnWidth: $container.width() / 2 }
        });
 
        // update columnWidth on window resize
        $(window).smartresize(function(){
          $container.isotope({
            masonry: { columnWidth: $container.width() / 2 }
          });
        });


    } /* end smallest screen */
    


    if (responsive_viewport >= 768) {

      var $container = $('#container');

      $container.isotope({
        animationEngine: 'jquery',
        layoutMode : 'fitRows',
        resizable: false, // disable normal resizing
        masonry: { columnWidth: $container.width() / 3 }
      });


      $(window).smartresize(function(){
        $container.isotope({
          masonry: { columnWidth: $container.width() / 3 }
        });
      });

        function same_height(container) {
            var items_height = [];

            $(container).each(function() { 
                items_height.push($(this).outerHeight());
            });

            var tallest_content = Math.max.apply( null, items_height );
            
            $(container).each(function(){
                var item_height = $(this).parent().height();
                $(this).css('height', tallest_content);
            });

        }
        
        same_height('ul#cat-list li');

   }
}); /* end of as page load scripts */