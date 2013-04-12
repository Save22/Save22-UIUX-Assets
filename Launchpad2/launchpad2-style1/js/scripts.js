
    $(document).foundation();
    
    /* featured prodcuts - same height for each item */

        var items_height = [];
        $('.results-grid .cat-info').each(function() { items_height.push($(this).outerHeight()) });
        var tallest_content = Math.max.apply( null, items_height );
        
        $('.results-grid .cat-info').each(function(){
            var item_height = $(this).parent().height();
            $(this).css('height', tallest_content);
        });

        
        
        