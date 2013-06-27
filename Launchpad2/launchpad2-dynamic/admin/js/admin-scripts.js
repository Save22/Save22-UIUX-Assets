$('.sortable').sortable(); 

$(window).load(function(){ 
  
  add_item();

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