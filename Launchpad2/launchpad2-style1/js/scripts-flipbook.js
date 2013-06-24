$(window).load(function(){ 
  
  window_height('.min-height');
  sidebar_tray();
  sidebar_height();
  same_height('.page-thumb');

  if($(window).width() < 979) {
    $('.sidebar.flipbook').addClass('hide-sidebar');
    $('.sidebar-tray').removeClass('open');
    resize_flipbook_width();
  }
  else {
    $('.sidebar.flipbook').removeClass('hide-sidebar');
    $('.sidebar-tray').addClass('open');
    resize_flipbook_width();
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
                      
            if($(window).width() < 979) {
              $('.sidebar.flipbook').addClass('hide-sidebar');
              $('.sidebar-tray').removeClass('open');
              resize_flipbook_width();
            }
            else {
              $('.sidebar.flipbook').removeClass('hide-sidebar');
              $('.sidebar-tray').addClass('open');
              resize_flipbook_width();
            }

            sidebar_height();
            window_height('.min-height');
          }, 10);
      });
// When ready...
  window.addEventListener("load",function() {
    setTimeout(function(){
      window.scrollTo(0, 1);
    }, 0);
  });

});

function sidebar_height() {

  var sidebar_height = $(window).height() - $('.top-bar').height();
  $('.sidebar').css('height', sidebar_height);
  $('.sidebar-tray').css('height', sidebar_height);

}
function resize_flipbook_width() {
    
  if($('.sidebar-tray').hasClass('open')) {
    var 
      window_width = $(window).width(),
      flipbook_tray_width = $('.sidebar-tray').width(),
      flipbook_width = window_width - flipbook_tray_width - 250;
    // $('.main-container').css('width', flipbook_width);
    $('.flipbook-container').css('width', flipbook_width);
  }

}

function sidebar_tray() {
  // alert('test');
  var tray        = $('.sidebar-tray'),
      tray_links  = $('.sidebar-tray a'),
      sidebar     = $('.sidebar.flipbook');

  if(tray.hasClass('open')) {
    $(tray).removeClass('open');
    $(sidebar).addClass('hide-sidebar');
  }
  else {
    $(sidebar).removeClass('hide-sidebar');
    $(tray).addClass('open');
  }

  $(tray_links).click(function(){

    var link_class = $(this).attr('class'),
        tray_class = $(tray).attr('class');
    // alert(link_class);

    if(tray.hasClass('open')) {

      if(tray.hasClass(link_class)) {
        $(tray).attr('class', 'sidebar-tray');
        $(sidebar).addClass('hide-sidebar');
      }
      else {
        $(tray).attr('class', 'sidebar-tray open');
        $(tray).addClass('open ' + link_class);
      }


      // $(tray).removeClass('open');
      // $(sidebar).addClass('hide-sidebar');
    }
    else {
      $(sidebar).removeClass('hide-sidebar');
      $(tray).addClass('open ' + link_class);
    }

  });
}

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
