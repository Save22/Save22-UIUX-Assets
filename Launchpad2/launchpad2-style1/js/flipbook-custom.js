var serverAspectRatio = 2.0234741784;
    $(document).ready(function() {
});

var turner;

var numPages = 1;
var backHandler;
$(document).ready(function() {
        largeImageLoadOff();
        setLastPage(numPages);
        backHandler = new BackHandler();
        $('#id_back').click(function() {
            backHandler.launchBack();
        });
        turner = $('.magazine').turn({
            elevation: 50,
            // Hardware acceleration
            acceleration: !isChrome(),
            // Enables gradients
            gradients: true,
            // Auto center this flipbook
            autoCenter: true,
            // The number of pages
            pages: numPages,
            // Events
            when: {
                turning: function(event, page, view) {
                    var book = $(this);
                    currentPage = book.turn('page');
                    if (page <= numPages){
                        setCurrentPage(page);
                        // Update the current URI
                        Hash.go('page/' + page).update();
                        // Show and hide navigation buttons
                        disableControls(page);
                        $('.thumbnails .page-'+currentPage).
                            parent().
                            removeClass('current');
                        $('.thumbnails .page-'+page).
                            parent().
                            addClass('current');
                    }
                    backHandler.notifyBack();
                },
                turned: function(event, page, view) {
                    disableControls(page);
                    $(this).turn('center');
                    if (page==1) { 
                        $(this).turn('peel', 'br');
                    }
                },
                missing: function (event, pages) {
                    // Add pages that aren't in the magazine
                    for (var i = 0; i < pages.length; i++){
                        addPage((pages[i]), $(this));
                    }
                },
                start: function(event, pageObject, corner){
                    if (pageObject.page == numPages){
                        event.preventDefault();
                    }
                }
            }
        });
        resizeFlipbook();
});

function BackHandler() {
    this.count=0;
}

BackHandler.prototype.notifyBack = function() {
    return ++this.count;
}

BackHandler.prototype.launchBack = function() {
    history.go(-(this.count*2)-1);
}
/* RESIZING */
$(document).ready(function() {
    resizeFlipbook();
    var resizeTimer;
    $(window).resize(function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout( function(){
            resizeFlipbook();
        }, 10);
    });
});

function resizeFlipbook(){
    var container_width = $('.flipbook-container').width() - 15;
    var page_width = container_width / 2;
    var window_height = $(window).height();
    var header_height = $('.top-bar').outerHeight(true);
    var pagination_height = $('#main-footer').outerHeight(true);
    var container_height = window_height - (header_height + pagination_height);
    $('.flipbook-container').css('height', container_height);
    $('.page-button').css('height', container_height);
    //$('.magazine').turn('size', container_width, container_height);
    refreshDisplayTypeResize();
    var isSinglePage = fnIsSinglePage();
    if (!isSinglePage){
        scaleFlipbook(container_width, container_height);
    } else {
        scaleFlipbookSingle(container_width, container_height);
    }
}

function fnIsSinglePage(){
    var displayType = $('.magazine').turn('display');
    if (displayType == "single")
        return true;
    else
        return false;
}

function getAspectRatio(){
    if (serverAspectRatio != null){
        return serverAspectRatio;
    } else {
        var screenImage = $('.page img')[0];
        var image = new Image();
        image.src = screenImage.src;
        return (image.width/image.height);
    }
}

function refreshDisplayTypeResize(){
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    if (responsive_viewport < 979) {
        $('.magazine').turn('display', 'single');
    } else {
        refreshDisplayType();
    }
    // if the display type was reset, reset the page numbering as well
    var currentPage = turner.turn('page');
    setCurrentPage(currentPage);
}

function refreshDisplayType(){
    var isSinglePage = fnIsSinglePage();
    if ($('.magazine').width() >= $('.magazine').height()){
        isSinglePage = true;
    } else if ($('.magazine').turn('pages') == 1) {
        isSinglePage = true;
    }
    if (isSinglePage){
        $('.magazine').turn('display', 'single');
    } else {
        $('.magazine').turn('display', 'double');
    }
    // if the display type was reset, reset the page numbering as well
    var currentPage = turner.turn('page');
    setCurrentPage(currentPage);
    return isSinglePage;
}

function scaleFlipbook(containerWidth, containerHeight){
    var aspectRatio = getAspectRatio();
    // get new aspect ratio
    var new_ratio = containerWidth/containerHeight;
    if (new_ratio >= aspectRatio){
        new_width = (containerHeight*aspectRatio)*2;
        new_height= containerHeight;
    } else {
        new_width = (containerWidth*2);
        new_height= containerWidth/aspectRatio;
    }
    if (new_width <= containerWidth){
        $('.magazine').turn('size', new_width, new_height);
    } else {
        new_width = containerWidth;
        new_height = ((containerWidth/2)/aspectRatio);
        $('.magazine').turn('size', new_width, new_height);
    }
    
    // center vertically
    if (containerHeight > new_height){
        var difference = containerHeight-new_height;
        var padding_top = difference/2;
        $(".magazine-container").css('padding-top', padding_top);
    }
}

function scaleFlipbookSingle(containerWidth, containerHeight){
    var aspectRatio = getAspectRatio();
    // get new aspect ratio
    var new_ratio = containerWidth/containerHeight;
    if (new_ratio >= aspectRatio){
        new_width = (containerHeight*aspectRatio);
        new_height= containerHeight;
    } else {
        new_width = (containerWidth);
        new_height= containerWidth/aspectRatio;
    }
    if (new_width <= containerWidth){
        $('.magazine').turn('size', new_width, new_height);
    } else {
        new_width = containerWidth;
        new_height = ((containerWidth)/aspectRatio);
        $('.magazine').turn('size', new_width, new_height);
    }
    
    // center vertically
    if (containerHeight > new_height){
        var difference = containerHeight-new_height;
        var padding_top = (difference/2);
        $(".magazine-container").css('padding-top', padding_top);
    }
}

/* SHOW THUMBNAILS */
$(document).ready(function() {
    var page_numbers = $('.page-numbers'),
        thumbnails = $('.flipbook.pages');
    $(page_numbers, thumbnails).hover(function(){
      if($('.flipbook.pages').hasClass('hide')) {
        $('.flipbook.pages').removeClass('hide').addClass('active');
      }
    });
    $('.magazine').hover(function(){
      thumbnails.addClass('hide');
    });
});

function largeImageLoadOff(){
    return $('#id_large_image_loading').fadeOut();
}
function largeImageLoadOn(){
    return $('#id_large_image_loading').fadeIn();
}
/* ZOOM */
$(document).ready(function() {
    $('.magazine-viewport').zoom({
        flipbook: $('.magazine'),
        max: function() {
            return 4;
        },
        when: {
            tap: function(event) {
                if($.isTouch){
                    if ($(this).zoom('value') == 1) {
                        $('.magazine').removeClass('animated').addClass('zoom-in');
                        $(this).zoom('zoomIn', event);
                        $('.hide-zoom').fadeOut();
                    } else {
                        $(this).zoom('zoomOut');
                    }
                }
            },
            doubleTap: function(event) {
                if ($(this).zoom('value') == 1) {
                    $('.magazine').removeClass('animated').addClass('zoom-in');
                    $(this).zoom('zoomIn', event);
                    $('.hide-zoom').fadeOut();
                } else {
                    $(this).zoom('zoomOut');
                }
            },
            resize: function(event, scale, page, pageElement) {
                //offset for page 0
                page = page - 1;
                if (scale == 1)
                    loadPage(page, pageElement);
                else {
                    loadLargePage(page, pageElement);
                    largeImageLoadOn();
                }
            },
            zoomIn: function() {
                $('.thumbnails').hide();
                $('.made').hide();
                $('.magazine').addClass('zoom-in');
                $('#btnZoom').text('Zoom Out');
                if (!window.escTip && !$.isTouch) {
                    escTip = true;
                    $('<div />', {
                        'class': 'esc'
                    }).html('<div>Press ESC to exit</div>').appendTo($('body')).delay(2000).animate({
                        opacity: 0
                    }, 500, function() {
                        $(this).remove();
                    });
                }
            },
            zoomOut: function() {
                $('.esc').hide();
                $('.hide-zoom').fadeIn();
                $('.thumbnails').fadeIn();
                $('.made').fadeIn();
                $('#btnZoom').text('Zoom In');
                setTimeout(function() {
                    $('.magazine').addClass('animated').removeClass('zoom-in');
                    resizeViewport();
                    resizeFlipbook();
                }, 0);
            },
            swipeLeft: function() {
                $('.magazine').turn('next');
            },
            swipeRight: function() {
                $('.magazine').turn('previous');
            }
        }
    });
    
    $('#btnZoom').click(function() {
        if ($('.magazine-viewport').zoom('value') == 1){
            $('.magazine-viewport').zoom('zoomIn');
        } else {
            $('.magazine-viewport').zoom('zoomOut');
        }
        
    });
});

/* BUTTON, TOUCH AND ARROW KEY EVENTS */
$(document).ready(function() {
    // Regions
    if ($.isTouch) {
        $('.magazine').bind('touchstart', regionClick);
    } else {
        $('.magazine').click(regionClick);
    }
    
    // Events for the next button
    $('.next-button').bind($.mouseEvents.over, function() {
        $(this).addClass('next-button-hover');
    }).bind($.mouseEvents.out, function() {
        $(this).removeClass('next-button-hover');
    }).bind($.mouseEvents.down, function() {
        $(this).addClass('next-button-down');
    }).bind($.mouseEvents.up, function() {
        $(this).removeClass('next-button-down');
    }).click(function() {
        $('.magazine').turn('next');
    });
    
    // Events for the next button
    $('.previous-button').bind($.mouseEvents.over, function() {
        $(this).addClass('previous-button-hover');
    }).bind($.mouseEvents.out, function() {
        $(this).removeClass('previous-button-hover');
    }).bind($.mouseEvents.down, function() {
        $(this).addClass('previous-button-down');
    }).bind($.mouseEvents.up, function() {
        $(this).removeClass('previous-button-down');
    }).click(function() {
        $('.magazine').turn('previous');
    });
    
    $('.prev-button2').click(function() {
        turner.turn('previous');
    });
    $('.next-button2').click(function() {
        turner.turn('next');
    });
    $('.thumbnail').click(function() {
        var pageID = $(this).attr('page-id');
        turner.turn('page', pageID);
    });
    
    
    // Using arrow keys to turn the page
    $(document).keydown(function(e) {
        var previous = 37,
        next = 39,
        esc = 27;
        switch (e.keyCode) {
        case previous:
            // left arrow
            $('.magazine').turn('previous');
            e.preventDefault();
            break;
        case next:
            //right arrow
            $('.magazine').turn('next');
            e.preventDefault();
            break;
        case esc:
            $('.magazine-viewport').zoom('zoomOut');
            e.preventDefault();
            break;
        }
    });
});

function setCurrentPage(currentPage){
    var displayType = $('.magazine').turn('display');
    if (currentPage <= numPages){
        if (displayType == "double"){
            var lastPage = numPages;
            if (currentPage == 1){
                $('.current-page').html('PAGE ' + currentPage);
            } else if (((currentPage % 2 == 0) && (currentPage != 1)) && (currentPage != lastPage)){
                $('.current-page').html('PAGE ' + currentPage + '-' + (currentPage + 1));
            } else if (currentPage == lastPage){
                $('.current-page').html('PAGE ' + currentPage);
            } else {
                $('.current-page').html('PAGE ' + (currentPage - 1) + '-' + currentPage);
            }
        } else {
            $('.current-page').html('PAGE ' + currentPage);
        }
    }
}

function setLastPage(lastPage){
    //offset for extra page 0
    $('.last-page').html(lastPage);
}