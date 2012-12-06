
jQuery(document).ready(function($) {

      /* 
        var $container = $('#container');
        // initialize Isotope
        $container.isotope({
          animationEngine: 'jquery',
          layoutMode : 'masonry',
          resizable: false, // disable normal resizing
          masonry: { columnWidth: $container.width() / 3 }
        });
      */

      var $container = $('#container')
// initialize Isotope
$container.isotope({
  // options...
  resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  masonry: { columnWidth: $container.width() / 3 }
});

// update columnWidth on window resize
$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 3 }
  });
});

        // update columnWidth on window resize
        $(window).smartresize(function(){
          $container.isotope({
            masonry: { columnWidth: $container.width() / 3 }
          });
        });

}); /* end of as page load scripts */