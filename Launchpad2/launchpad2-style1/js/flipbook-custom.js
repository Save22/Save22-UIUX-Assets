
  $(document).ready(function() {
    $('.hide-sidebar').click(function(){
      var sidebar = $('.columns.sidebar.flipbook'),
          flipbook = $('.columns.flipbook-container');

      var sidebar_width = $('.related-catalogs').width(),
          flipbook_width = flipbook.width();

      var arrow = $(this).find('.arrow');

      arrow.removeClass('arrow-right').addClass('arrow-left');
      $('.main-container').css('overflow', 'hidden');
      sidebar.css('margin-right', -sidebar_width);
      flipbook.css('width', flipbook_width + sidebar_width - 4);

    });
  });

  var catalog_list_height = $(window).height() - ($('.top-bar').height() + $('.flipbook-search').actual('height') + 
    $('.related-catalogs .sidebar-header').outerHeight(true) + $('p.title a').outerHeight(true) + 22);
  $('.list-flip-related').css('height', catalog_list_height);

  var sidebar_height = $(window).height() - $('.top-bar').height();
  $('.columns.sidebar').css('height', sidebar_height);


  /* turnjs */
    var turner;
    var numPages = 12;

    $(document).ready(function() {

        setLastPage(numPages);
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
                    var book = $(this),
                    currentPage = book.turn('page'),
                    pages = book.turn('pages');
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
                },
                turned: function(event, page, view) {
                    disableControls(page);
                    setCurrentPage(page);
                    $(this).turn('center');
                    if (page==1) { 
                        $(this).turn('peel', 'br');
                    }
                },
                missing: function (event, pages) {
                    // Add pages that aren't in the magazine
                    for (var i = 0; i < pages.length; i++)
                        addPage(pages[i], $(this));
                }
            }
        });
    });

  /* RESIZING */
    $(document).ready(function() {

        function get_display(){
            /* getting viewport width */
            var responsive_viewport = $(window).width();
            
            if (responsive_viewport < 979) {
                $('.magazine').turn('display', 'single');
            } 
            if (responsive_viewport > 979) {
                $('.magazine').turn('display', 'double');
            } 
        }

        get_display();

        var container_width = $('.flipbook-container').width() - 15;
        var page_width = container_width / 2;

        var window_height = $(window).height();
        var header_height = $('.top-bar').outerHeight(true);
        var pagination_height = $('.page-numbers').outerHeight(true);
        var container_height = window_height - (header_height + pagination_height);

        // not sure
        // $('.magazine').css('width', container_width);
        // $('.magazine').height(container_height);
        
        $('.flipbook-container').css('height', container_height);
        $('.page-button').css('height', container_height);
        $('.magazine').turn('size', container_width, container_height);
        var resizeTimer;

        $(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout( function(){
                var container_width = $('.flipbook-container').width() - 15;
                var page_width = Math.floor(container_width / 2);
                var window_height = $(window).height();
                var header_height = $('.top-bar').outerHeight(true);
                var pagination_height = $('.page-numbers').outerHeight(true);
                var container_height = Math.floor(window_height - (header_height + pagination_height));
                var page_height = $('.page img').actual('height');
                $('.flipbook-container').css('height', container_height);
                $('.page-button').css('height', container_height);
                $('.magazine').turn('size', container_width, container_height);

                get_display();

                /* SIDEBAR */
                var catalog_list_height = $(window).height() - ($('.top-bar').height() + $('.flipbook-search').actual('height') + 
                  $('.related-catalogs .sidebar-header').outerHeight(true) + $('p.title a').outerHeight(true) + 4);
                $('.list-flip-related').css('height', catalog_list_height);

                var sidebar_height = $(window).height() - $('.top-bar').height();
                $('.columns.sidebar').css('height', sidebar_height);

            }, 10);
        });
     });

  /* ZOOM */
    $(document).ready(function() {
        $('.magazine-viewport').zoom({
            flipbook: $('.magazine'),
            max: function() {
                return largeMagazineWidth() / $('.magazine').width();
            },
            when: {
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
                    if (scale == 1)
                        loadSmallPage(page, pageElement);
                    else
                        loadLargePage(page, pageElement);
                },
                zoomIn: function() {
                    $('.thumbnails').hide();
                    $('.made').hide();
                    $('.magazine').addClass('zoom-in');
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
                    setTimeout(function() {
                        $('.magazine').addClass('animated').removeClass('zoom-in');
                        resizeViewport();
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
        var lastPage =  $('.magazine').turn('pages');
        if (((currentPage % 2 == 0) && (currentPage != 1)) && (currentPage != lastPage)){
            $('.current-page').html('PAGE ' + currentPage + '-' + (currentPage + 1));
        } else if (currentPage == 1){
            $('.current-page').html('PAGE ' + currentPage);
        } else if (currentPage == lastPage){
            $('.current-page').html('PAGE ' + currentPage);
        } else {
            $('.current-page').html('PAGE ' + (currentPage - 1) + '-' + currentPage);
        }
    }

    function setLastPage(lastPage){
        $('.last-page').html(lastPage);
    }

