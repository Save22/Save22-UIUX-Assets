$('.sortable').sortable(); 

$(window).load(function(){ 
  
  add_item();
  edit_item();

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