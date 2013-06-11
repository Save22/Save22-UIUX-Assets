$(window).load(function(){ 
  
  window_height('.min-height');
  window_height('#PhotoSwipeTarget');

  /* flipbook sidebar on mobile */
  $('.flipbook-sidebar-trigger').click(function(){

    var sidebar = $('.sidebar'),
        content = $('.flipbook-container');

    if(sidebar.hasClass('mobile-flipbook-sidebar')){
      sidebar.hide().removeClass('mobile-flipbook-sidebar');
      content.removeClass('hide');
    }
    else {
      sidebar.show().addClass('mobile-flipbook-sidebar');
      content.addClass('hide');

      if($(window).width() > 979) {
        content.removeClass('hide');
      }
    }

  });

  if($(window).width() > 979) {
    $('.sidebar').show().removeClass('mobile-flipbook-sidebar');
  }

  /* max height: flipbook */

    max_height('.magazine-container', $('#main-header').height() + $('.page-numbers').outerHeight(true));

    var flipbook_sidebar_height_offset = 
      $('#main-header').height() + $('.sidebar.info').height() + $('.sidebar.pages').height() + $('.sidebar.list-links').height();
    max_height('.list-flip-related', flipbook_sidebar_height_offset);


  /* RESIZE */

    var resizeTimer;
      $(window).resize(function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(function(){
            
            if($(window).width() > 979) {
              $('.sidebar').show().removeClass('mobile-flipbook-sidebar');
            }

            window_height('.min-height');
            window_height('#PhotoSwipeTarget');

                /* SIDEBAR */
                var catalog_list_height = $(window).height() - ($('.top-bar').height() + $('.flipbook-search').actual('height') + 
                  $('.related-catalogs .sidebar-header').outerHeight(true) + $('p.title a').outerHeight(true) + 4);
                $('.list-flip-related').css('height', catalog_list_height);

                var sidebar_height = $(window).height() - $('.top-bar').height();
                $('.columns.sidebar').css('height', sidebar_height);


          }, 10);
      });

});

$(document).ready(function() {
  $('.hide-sidebar').click(function(){
    var sidebar = $('.columns.sidebar.flipbook'),
        flipbook = $('.columns.flipbook-container');

    var sidebar_width = $('.related-catalogs').width(),
        flipbook_width = flipbook.width();

    var arrow = $(this).find('.arrow');

    arrow.removeClass('arrow-right').addClass('arrow-left');
    $('.main-container').css('overflow', 'hidden');
    sidebar.css('margin-right', -sidebar_width);
    flipbook.css('width', flipbook_width + sidebar_width - 4);

  });
});

var catalog_list_height = $(window).height() - ($('.top-bar').height() + $('.flipbook-search').actual('height') + 
  $('.related-catalogs .sidebar-header').outerHeight(true) + $('p.title a').outerHeight(true) + 22);
$('.list-flip-related').css('height', catalog_list_height);

var sidebar_height = $(window).height() - $('.top-bar').height();
$('.columns.sidebar').css('height', sidebar_height);



function window_height(container) {
  var window_height = $(window).height(),
      top_height = window_height - ($('#main-header').outerHeight(true) + $('#main-footer').outerHeight(true));

  $(container).css('min-height', top_height);
}

function same_height(container) {
  var items_height = [];

  $(container).each(function() { 
      items_height.push($(this).outerHeight(true));
  });

  var tallest_content = Math.max.apply( null, items_height );
  
  $(container).each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', tallest_content);
  });
}

function same_height_hidden(container) {
  var items_height = [];

  $(container).each(function() { 
      items_height.push($(this).actual('outerHeight'));
  });
  //alert(items_height);

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

function loc_suggestions() {
  var trigger_link = $('.loc-suggestions-trigger'),
      container = $('.location-suggestions'),
      input_form = $('#header-location'),
      suggested_list = $('.location-autocomplete');

  input_form.focus(function(){
    container.slideDown().removeClass('hide');
  });

  input_form.blur(function(){
    container.slideUp().addClass('hide');
    suggested_list.slideUp().addClass('hide');
  });

  var link = $('.location-suggestions a');

  link.each(function(){
    $(this).click(function(){
      var option = $(this).text();
      input_form.val(option);

      // event.preventDefault();
    });
  });
}

function loc_autocomplete() {

  var input_box = $('#header-location'),
      suggested_list = $('.location-autocomplete'),
      auto_container = $('.location-suggestions');

  $(input_box).keydown(function(){
    auto_container.slideUp().addClass('hide');
  setTimeout(function() {
    /*
    $(suggested_list).text($(input_box).val());
    */
    suggested_list.slideDown().removeClass('hide');
    }, 50);
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
