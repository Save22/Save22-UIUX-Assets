
$(document).foundation()
  .foundation('magellan', { activeClass: 'active' });

/* featured prodcuts - same height for each item */
/*
  var items_height = [];
  $('.results-grid .cat-info').each(function() { items_height.push($(this).outerHeight()) });
  var tallest_content = Math.max.apply( null, items_height );
  
  $('.results-grid .cat-info').each(function(){
      var item_height = $(this).parent().height();
      $(this).css('height', tallest_content);
  });


*/

$(window).load(function(){ 

  $('#links-categories').carouFredSel({
    auto: false,
    prev: '#list-cat-prev',
    next: '#list-cat-next',
    responsive: true,
    width: 'variable',
    scroll: 1,
    items: {
      width: null,
    //  height: '30%',  //  optionally resize item-height
      visible: {
        min: 1,
        max: 6
      }
    }
  });

});

