

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

  same_height('.results-grid .thumb');
  same_height('.results-grid .cat-info');
  same_height('.featured-grid .thumb');
  same_height('.featured-grid .cat-info');


  least_height('#catalog-carousel .thumb img', '#catalog-carousel .thumb img');

  show_hide('.header-cat-link', '.all-category-links');
  show_hide('.search-link', '.mobile-search');

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

function least_height(items, container) {

  var items_height = [];

  $(items).each(function() { 
      items_height.push($(this).outerHeight());
  });

  var shortest = Math.min.apply( null, items_height );
  
  $(container).each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', shortest);
  });

}

function show_hide(link, container) {

  $(link).click(function(){

    if($(container).hasClass('hide')) {
      $(container).slideDown().removeClass('hide');
    }

    else {
      $(container).slideUp().addClass('hide');
    }

    event.preventDefault();
  });

}
