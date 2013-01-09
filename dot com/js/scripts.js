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



    /* FULL WIDTH PAGES */

    fullheight('.error-page', '#main-footer');
    fullheight('#media', '#media-nav');

}); /* end of as page load scripts */


function fullheight(div_name, bottom_div) {

    var header_height = $('#main-header').outerHeight(),
        footer_height = $(bottom_div).outerHeight(),
        window_height = $(window).height();

    if ($(bottom_div).attr('id') == 'media-nav') {
        footer_height = footer_height + 84;
    }

    var content_total = window_height - (header_height + footer_height);


    $(div_name).css('min-height', content_total + 'px');
}
