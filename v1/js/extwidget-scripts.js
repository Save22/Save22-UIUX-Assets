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
      $container.isotope({
        animationEngine: 'jquery',
        resizable: false, 
        masonry: { columnWidth: $container.width() / 2 }
      });

      // update columnWidth on window resize
      $(window).smartresize(function(){
        $container.isotope({
          // update columnWidth to a percentage of container width
          masonry: { columnWidth: $container.width() / 2 }
        });
      });

    } /* end smallest screen */
    


    if (responsive_viewport >= 768) {

      var $container = $('#container');

      $container.isotope({
        animationEngine: 'jquery',
        resizable: false, 
        masonry: { columnWidth: $container.width() / 3 }
      });


      $(window).smartresize(function(){
        $container.isotope({
          masonry: { columnWidth: $container.width() / 3 }
        });
      });

   }
}); /* end of as page load scripts */