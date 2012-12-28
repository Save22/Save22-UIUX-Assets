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
  $('body').addClass('js');

  var $menu = $('#panel'),
    $menulink = $('.panel-link'),
    $wrap = $('#wrap');

  $menulink.click(function() {
    $menulink.toggleClass('active');
    $wrap.toggleClass('active');
    return false;
  });

   
  // SOMETHING IS WRONG WITH THIS CODE 
  // document_fill_height('#document');

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

        if($('.save-button').hasClass('hide')) {
            $('.save-button').fadeIn().removeClass('hide');
        }

    });


inline_edit();

}); /* end of as page load scripts */

function document_fill_height(div){
    var header_height = $('#main-header').height(),
        crumbs = $('.breadcrumbs').height(), 
        footer_height = $('#main-footer').height(),
        doc_elements = header_height + crumbs + footer_height,
        win_height = $(window).height(),
        content = $('#container');

    var doc_height = win_height - doc_elements;
    // alert(doc_height);
    $div.css('height', doc_height + 'px');
}

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


function inline_edit(){


    // TEXT STATS
    $('.edit_textstat').click(function(){
        var stat_field = $(this).find('input[type=text]'),
            stat_text = $(this).find('.edit_textstat_val'),
            stat_origval = stat_text.text(),
            stat_id = stat_field.attr('id');
        //alert(stat_field.attr('class'));
        if(stat_field.hasClass('hide')){
            stat_text.addClass('hide');
            stat_field.val(stat_origval);
            stat_field.removeClass('hide');
        }
    });
    
    // TEXT STATS - no change
    $(document).mouseup(function(){
        var stat_field = $('.edit_textstat').find('input[type=text]'),
            stat_text = $('.edit_textstat').find('.edit_textstat_val');
            
        stat_field.addClass('hide');
        stat_text.removeClass('hide');
    });
    
    $('.edit_textstat input[type=text]').change(function(){
            $(this).addClass('hide');
            $('#action_box').val('save_stat');
            
            var primary_string = $('#stats_form').serialize(),
                boxval = $(this).val(),
                boxid = $(this).attr('id'),
                stat_text = $('.edit_textstat').find('.val_'+boxid),
                data_string = primary_string;
            
            $.ajax({
                type: "POST",
                url: "",
                data: data_string,
                cache: false,
                success: function(html){
                    /* success message */
                }
            });
    });
    
}
