

$(document).foundation();

$(window).load(function(){ 

  /* CAROUSELS */

    $('.gallery-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#carousel-prev',
      next: '#carousel-next'
    });

    $('#catalog-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#catalog-prev',
      next: '#catalog-next'
    });

    $('#brand-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#brand-prev',
      next: '#brand-next'
    });

    $('#branch-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#branch-prev',
      next: '#branch-next'
    });

    $('#store-carousel').carouFredSel({
      auto: false,
      width: '100%',
      height: 'auto',
      prev: '#store-prev',
      next: '#store-next'
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

  mobile_dropdown('.view-shop-info', '.mobile-shop-info');

  mobile_dropdown('.view-establishment-list', '.establishment-list');

  loc_suggestions();
});

function same_height(container) {
  var items_height = [];

  $(container).each(function() { 
      items_height.push($(this).height());
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

function mobile_dropdown(link, container) {

  $(link).each(function(){

    $(this).click(function(){
      var content = $(this).next(container);

      if(content.hasClass('mobile-hide')) {
        $(content).slideDown().removeClass('mobile-hide');
      }
      else {
        $(content).slideUp().addClass('mobile-hide');
      }
      event.preventDefault();
    });

  });
}

function loc_suggestions() {
  var trigger_link = $('.loc-suggestions-trigger'),
      container = $('.location-suggestions'),
      input_form = $('#header-location');

  input_form.focus(function(){
    container.slideDown().removeClass('hide');
  });

  input_form.blur(function(){
    container.slideUp().addClass('hide');
  });

  var link = $('.location-suggestions a');

  link.each(function(){
    $(this).click(function(){
      var option = $(this).text();
      input_form.val(option);

      event.preventDefault();
    });
  });
}

