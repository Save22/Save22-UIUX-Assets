

$(document).foundation()
  .foundation('magellan', { activeClass: 'active' });

$(window).load(function(){ 

  $('.gallery-carousel').carouFredSel({
    auto: false,
    width: '100%',
    height: 'auto',
    prev: '#carousel-prev',
    next: '#carousel-next'
  });

  // $('#sidebar-categories').stickyMojo({footerID: '#main-footer', contentID: '#content'});

/* featured prodcuts - same height for each item */

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

    same_height('.results-grid .thumb');
    same_height('.results-grid .cat-info');
    same_height('.featured-grid .thumb');
    same_height('.featured-grid .cat-info');


});
