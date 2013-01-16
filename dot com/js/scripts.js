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
    fullheight('#contact', '#main-footer');


    /* STICKING HEADERS */

    var top_media_nav = $('#main-header').outerHeight(true) + $('#media').outerHeight(true);
    stick_div_top('#media-nav', top_media_nav);

    shifting_nav();


    /* SMOOTH SCROLLING */

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                   if (target.length) {
                     $('html,body').animate({
                         scrollTop: target.offset().top
                    }, 1000);
                    //return false;
                }
            }
        });

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

function stick_div_top(div_id, top_height) {
    var p = $(window).scrollTop();

        $(window).scroll(function(){         
             var p = $(window).scrollTop();

            if(p >= top_height) {
                $(div_id).css('top',((p)>top_height) ? 'px' : ''); 
                $(div_id).addClass('floating-header'); 
            }
            else {
                $(div_id).removeClass('floating-header');
            }
        });

}


/* 
function shifting_nav() {

    var p = $(window).scrollTop();

    $(window).scroll(function(){ 

        $('.nav-counter').each(function(){
            var start_height = $('#main-header').outerHeight(true) + $('#media').outerHeight(true);
            var top_height = $(this).prevUntil($(this), '.segment').outerHeight(true);

            var counter = start_height + top_height + $('#media-nav').outerHeight(true); 
            var link_name = '.link-' + $(this).attr('name');

            if(p >= counter) {
                $(link_name).addClass('current');
            }
            else { $(link_name).removeClass('current'); }
        });
    });

}
*/

function shifting_nav() {
    var p = $(window).scrollTop();
    var start_height = $('#main-header').outerHeight(true) + $('#media').outerHeight(true);
    var top_height = $('.link-coverage').prevUntil($('.link-coverage'), '.segment').outerHeight(true);

    var counter = start_height + top_height + $('#media-nav').outerHeight(true); 

    $(window).scroll(function(){ 

        if(p >= counter) {
            $('.link-coverage').addClass('current');
        }
        else { $('.link-coverage').removeClass('current'); }
    });


}
