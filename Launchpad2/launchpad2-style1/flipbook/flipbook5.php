<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Save22 | Launchpad 2.0 - Flipbook</title>

  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/magazine.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  
  <script src="../js/vendor/custom.modernizr.js"></script>

</head>

<body class="flipbook">

  <header id="main-header" class="row" style="max-width: none;">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="#">Save22.com.ph</a></h1>
        </li>
        <li class="toggle-topbar"><a href="#previous-page" class="back-link"><span>Back</span></a></li>
      </ul>

      <section class="top-bar-section flipbook">
        <ul class="left">
          <li class="divider"></li>
          <li class="store-link"><a href="#store-page"><img src="../img/retailer-logo4.jpg" alt="Retailer Name"></a></li>
          <li class="divider"></li>
          <li class="expiry">Valid until <strong>April 12, 2013</strong></li>
        </ul>
      </section>
    </nav>

    <section class="mobile-search mobile-only hide">
      <form>
        <div class="row collapse">
          <div class="small-8 columns">
            <input type="search" placeholder="Search for promos, items, prices, or stores">
          </div>
          <div class="small-4 columns">
            <a href="#" class="button">Search</a>
          </div>
        </div>
      </form>
    </section>
  </header>


  <div class="row main-container" style="max-width: none;">
    <div class="small-12 large-9 columns flipbook-container">

      <div class="magazine-viewport">
        <div class="magazine-container">
          <div class="magazine">
          </div>
        </div><!-- container -->
      </div><!-- viewport -->

      <div class="page-numbers hide-zoom">
        <span class="current-page">Page 1</span> of <span class="last-page">9</span>
        <a href="#" ignore="1" class="left prev-button2">Previous</a>
        <a href="#" ignore="1" class="right next-button2">Next</a>
      </div>


      <a href="#" ignore="1" id="flipbook-prev" class="previous-button page-button hide-zoom">Prev <span></span></a>
      <a href="#" ignore="1" id="flipbook-next" class="next-button page-button hide-zoom">Next <span></span></a>

    </div>
    <div class="small-12 large-3 columns sidebar flipbook">
      <a href="#" class="hide-sidebar">Hide Sidebar <span class="arrow-right arrow"></span></a>
      
      <div class="sidebar flipbook related-catalogs">
        <div class="section-container auto" data-section>
          <section>
            <p class="title" data-section-title><a href="#panel1">Search</a></p>
            <div class="content" data-section-content>
              
              <h3 class="sidebar-header">Search Results</h3>
              <div class="flipbook-search">
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Search for a catalog" value="Tissue Paper">
                  </div>
                  <div class="small-3 columns">
                    <button class="postfix">search</span>
                  </div>
                </div>
              </div>
              <?php include('../elements/carousel-promos-flipbook.php'); ?>

            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#panel2">What's Near</a></p>
            <div class="content" data-section-content>

              <h3 class="sidebar-header">Promos near you</h3>
              <div class="flipbook-search">
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Find a location" value="Ortigas">
                  </div>
                  <div class="small-3 columns">
                    <button class="postfix">search</span>
                  </div>
                </div>
              </div>
              <?php include('../elements/carousel-promos-flipbook.php'); ?>

            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#panel3">Browse</a></p>
            <div class="content" data-section-content>

              <h3 class="sidebar-header">From this category</h3>
              <div class="flipbook-category-list">
                <a href="#" data-dropdown="drop1" class="category-list-link">
                  <span class="arrow-left arrow"> </span> <span class="current">Supermarkets</span>
                </a>

                <ul id="drop1" class="f-dropdown" data-dropdown-content>
                  <li><a href="#">Optical Shop</a></li>
                  <li><a href="#">Department Store</a></li>
                  <li><a href="#">Electronics Store</a></li>
                  <li><a href="#">Apparel</a></li>
                  <li><a href="#">Sporting Goods</a></li>
                  <li><a href="#">Gardens &amp; Plants</a></li>
                  <li><a href="#">Automotive Parts and Service</a></li>
                  <li><a href="#">Drugstore/Pharmacy</a></li>
                  <li><a href="#">Toys</a></li>
                  <li><a href="#">Fast Food</a></li>
                  <li><a href="#">Specialty Store</a></li>
                  <li><a href="#">Supermarket</a></li>
                  <li><a href="#">Hardware Store</a></li>
                  <li><a href="#">Organic Market</a></li>
                  <li><a href="#">Shoe Store</a></li>
                  <li><a href="#">Bookstore</a></li>
                  <li><a href="#">Bank</a></li>
                  <li><a href="#">Pet shop</a></li>
                  <li><a href="#">Fashion</a></li>
                  <li><a href="#">Furniture Store</a></li>
                  <li><a href="#">Watches &amp; Jewellery</a></li>
                  <li><a href="#">Clearance Stores &amp; Bazaars</a></li>
                  <li><a href="#">Outlet Stores</a></li>
                  <li><a href="#">Other Establishments</a></li>
                </ul>
              </div>
              <?php include('../elements/carousel-promos-flipbook.php'); ?>


            </div>
          </section>
        </div>
      </div>
      
    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '../js/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation/foundation.js"></script>
  <script src="../js/foundation/foundation.dropdown.js"></script>
  <script src="../js/foundation/foundation.section.js"></script>
  <script src="../js/foundation/foundation.joyride.js"></script>

  <script src="../js/turn.js"></script>
  <script src="../js/zoom.js"></script>
  <!-- <script src="../js/turn.html4.min.js"></script> -->
  <script src="../js/jquery.mousewheel.min.js"></script>
  <script src="../js/hash.js"></script>
  <script src="../js/jquery.actual.min.js"></script>
  <script src="../js/magazine.js"></script>
  <script src="../js/scripts.js"></script>

<script type="text/javascript">

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
</script>

</body>

</html>
