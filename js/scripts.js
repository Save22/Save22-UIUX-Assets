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
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /** TOPMOST HEADER **/
        var div = $('#main-header');
        var start = $(div).offset().top;

        $(window).scroll(function(){         
            var p = $(window).scrollTop(),
                w_width = $(window).width();

            if(p >= 220) {
                $(div).css('top',((p)>start) ? '0px' : '');
                $(div).addClass('floating-header'); 
            }
            else {
                $(div).removeClass('floating-header');
            }
        });

    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    

    /* dropkick plugin */
    $('.dk').dropkick();


    /* featured prodcuts - same height for header */

    var header_sizes = [];
    $('.item-header').each(function() { header_sizes.push($(this).outerHeight()) });
    var tallest_header = Math.max.apply( null, header_sizes );

    $('.item-header').each(function(){

        var item_width = $(this).parent().width();

        $(this).css('height', tallest_header);
        $(this).css('width', item_width); 

    });
 

}); /* end of as page load scripts */

