/*
Bones Scripts File
Author: Eddie Machado
*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 768) {

    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */

    if (responsive_viewport >= 768) {
      
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }


  $('body').addClass('js');

  var $menu = $('#panel'),
    $menulink = $('.panel-link'),
    $wrap = $('#wrap');

  $menulink.click(function() {
    $menulink.toggleClass('active');
    $wrap.toggleClass('active');
    return false;
  });


  /* PIKADAY DATE PICKER */
    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });

    var picker2 = new Pikaday(
    {
        field: document.getElementById('datepicker2'),
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });


    /* Sortable, draggable tables */
    var table = document.getElementById('price-settings');
    var tableDnD = new TableDnD();
    tableDnD.init(table);


    $('.add-row').click(function(){
        
        event.preventDefault();
        var table_row_count = $('#price-settings tr').length - 1;
        var new_row_index = $('tr.insert-row td.index').html(table_row_count);
        var new_row = '<tr>' + $('tr.insert-row').html() + '</tr>';

        $('#price-settings tbody').append(new_row);

    });


}); /* end of as page load scripts */



function add_row(table_id){
    
    event.preventDefault();

    var 
        $table_body = table_id + ' tbody',
        $table_row = table_id + ' tr',
        table_row_count = $table_row.length - 1;
        $new_row_index = $('tr.insert-row td.index').html(table_row_count),
        new_row = '<tr>' + $('tr.insert-row').html() + '</tr>';

    $table_body.append('test');
}
