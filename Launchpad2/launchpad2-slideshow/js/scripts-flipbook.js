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


function max_height(container, other) {
  var new_height = $(window).height() - other;
  $(container).css('height', new_height);
}

$(document).foundation();
