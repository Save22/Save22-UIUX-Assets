
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

  same_height('.results-grid .thumb');
  same_height('.results-grid .cat-info');
  same_height('.featured-grid .thumb');
  same_height('.featured-grid .cat-info');

  least_height('#catalog-carousel .thumb img', '#catalog-carousel .thumb img');

  show_hide('.header-cat-link', '.all-category-links');
  show_hide('.search-link', '.mobile-search');

  mobile_dropdown('.pull-down', '.pull-content');
  mobile_dropdown('.view-shop-info', '.mobile-shop-info');
  mobile_dropdown('.view-establishment-list', '.establishment-list');

  loc_suggestions();

  copy_height('.page-button', '.magazine-container');

  /* max height */

    max_height('.magazine-container', $('#main-header').height() + $('.page-numbers').outerHeight(true));


    var flipbook_sidebar_height_offset = 
      $('#main-header').height() + $('.sidebar.info').height() + $('.sidebar.pages').height() + $('.sidebar.list-links').height();
    max_height('.list-flip-related', flipbook_sidebar_height_offset);

  var resizeTimer;
  $(window).resize(function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function(){
        
        copy_height('.page-button', '.magazine-container');

        same_height('.results-grid .thumb');
        same_height('.results-grid .cat-info');
        same_height('.featured-grid .thumb');
        same_height('.featured-grid .cat-info');

        least_height('#catalog-carousel .thumb img', '#catalog-carousel .thumb img');

        max_height('.magazine-container', $('#main-header').height() + $('.page-numbers').outerHeight(true));

      }, 10);
  });

  home_loader();

  $('.home-preview-content').on('load', function(event) {
    same_height('.featured-grid .thumb');
    same_height('.featured-grid .cat-info');
  });

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

function copy_height(changing, original) {

  var new_height = $(original).height();
  $(changing).css('height', new_height);

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

      if(content.hasClass('mobile-hide') || content.hasClass('hide')) {
        $(content).removeClass('mobile-hide').removeClass('hide');
      }
      else {
        $(content).addClass('mobile-hide').addClass('hide');
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

function max_height(container, other) {
  var new_height = $(window).height() - other;
  $(container).css('height', new_height);
}

function home_loader() {

  $('#sidebar-establishments a').each(function(){
    var loader_container = $('.home-preview-content');

    $(this).click(function(){
      var clicked_link = $(this).attr('href');

      if (clicked_link = '#') {
        event.preventDefault();
      }
      else {
        alert('test');
        $(loader_container).load(clicked_link);

        event.preventDefault();
      }

    });

  });
}

$(document).foundation();
