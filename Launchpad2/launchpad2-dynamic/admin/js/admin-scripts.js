$('.sortable').sortable(); 

$(window).load(function(){ 
  
  add_item();
  edit_item();
  insert_page();

  $('.item-overlay').css('height', $(window).height());
});


function add_item() {
  $(".catalog.edit").on("click", ".add-item", function(event){
    var container = $(this).parent().parent();
    var page = 'widgets/edit-add-item-new.php';

    $.get(page, function (data) {
      $(container).children(':last').before(data);
      $('.sortable').sortable(); 
    });
    
    event.preventDefault();
  });
}

function edit_item() {

  // TEXT STATS
  $('.quick-edit').click(function(){
    var stat_field = $(this).find('.edit-value'),
      stat_text = $(this).find('.value'),
      stat_origval = stat_text.text(),
      stat_id = stat_field.attr('id');

    if(stat_field.hasClass('hide')){
      stat_text.addClass('hide');
      stat_field.val(stat_origval);
      stat_field.removeClass('hide');
    }
  });
  
  // TEXT STATS - no change
  $(document).mouseup(function(){

    var stat_field = $('.quick-edit').find('.edit-value'),
        stat_text = $('.quick-edit').find('.value');
      
    stat_field.addClass('hide');
    stat_text.removeClass('hide');
  });
  
  $('.quick-edit input[type=text]').change(function(){
      $(this).addClass('hide');

      var 
        boxval = $(this).val(),
        stat_text = $(this).parent().find('.value');

        stat_text.text(boxval).removeClass('hide');

      /*
      $('#action_box').val('save_stat');
      
      var primary_string = $('#stats_form').serialize(),
        boxval = $(this).val(),
        boxid = $(this).attr('id'),
        stat_text = $('.edit_textstat').find('.val_'+boxid),
        data_string = primary_string;
      
      $.ajax({
        type: "POST",
        url: "inc/save-info.php",
        data: data_string,
        cache: false,
        success: function(html){
          stat_text.text(boxval).removeClass('hide');
          show_notifier('Changes saved');
        }
      });
      */  
  });
  
}

function insert_page() {

  $(".insert-page").on("click", ".button", function(event){

    var catalog_container = $(this).parent().parent().parent().parent();
    var page = 'widgets/add-page-blank.php';

    if($(this).hasClass('add-page-before')) {
      $.get(page, function (data) {
          $(catalog_container).before(data);
        resize_slides(catalog_container);
        new_page();
      });
    }
    if($(this).hasClass('add-page-after')) {
      $.get(page, function (data) {
          $(catalog_container).after(data);
        resize_slides(catalog_container);
        new_page();
      });
    }
    
    event.preventDefault();
  });

  function resize_slides(slides_container) {
      var main_container = $(slides_container).parent(),
          slides = $(main_container).children('li');
      
      $(slides_container).css('width', $(slides).length * 100 + '%');
      $(slides).css('width', 100 / $(slides).length + '%');
      $(slides_container).height($(main_container).height());
      $(main_container).css('width', $(slides).length * 100 + '%');
  }

}

function new_page() {
  $(".page-types").on("click", ".th", function(event){

    console.log($(this).parent().parent().parent().attr('class'));
    var container = $(this).parent().parent().parent(),
        page = '';

    container.html('');

    if($(this).hasClass('new-product')) {
      page = 'widgets/add-page-product.php';
    }

    $(container).load(page);
    event.preventDefault();
  });
}

/****** 
  DRAW A BOX 
  original code from http://motyar.blogspot.com/2010/02/draw-rectangle-with-jquery.html
*/

$(document).ready(function() {
  var x1,x2,y1,y2;

  // when user clicks
    $('.catalog-overlay').mousedown(function(e) {

      console.log($(this).attr('class'));

      if($(this).hasClass('button')) {

      }
      else {

        $("#current").attr({ id: '' });

        box = $('<div class="item-box"></div>').hide();
        
        var parentOffset = $(this).offset();

          $('.catalog-overlay').append(box);
          x1 = e.pageX;
          y1 = e.pageY;

          box.attr({id: 'current'}).css({
                   top: e.pageY - parentOffset.top,  //offsets
                   left: e.pageX - parentOffset.left  //offsets
          }).fadeIn();

      }
    });

  // when user creates the width and height of box
    $('.catalog-overlay').mousemove(function(e) {
      $("#current").css({
        width:Math.abs(e.pageX - x1), //offsets
        height:Math.abs(e.pageY - y1) //offsets
     }).fadeIn();
    });

  // when user is done 
    $('.catalog-overlay').mouseup(function() {
      // NEED TO MAKE DEFENSIVE CODE - remove the box if it's too small. i.e. less than 10px 
      $("#current").load('widgets/edit-item-box-content.php');;
      $("#current").attr({ id: '' });
    });


});
