
jQuery(document).ready(function($) {
    var header_sizes = [];
    $('.item-header').each(function() { header_sizes.push($(this).outerHeight()) });
    var tallest_header = Math.max.apply( null, header_sizes );

    $('.item-header').each(function(){

        var item_width = $(this).parent().width();

        $(this).css('height', tallest_header);
        $(this).css('width', item_width); 

    });
}); /* end of as page load scripts */