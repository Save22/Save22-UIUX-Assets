<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Save22 | Launchpad 2.0 - Flipbook</title>

  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/magazine.css" />
  
  <script src="../js/vendor/custom.modernizr.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="../js/turn.js"></script>
  <script src="../js/zoom.js"></script>
  <!-- <script src="../js/turn.html4.min.js"></script> -->
  <script src="../js/jquery.mousewheel.min.js"></script>
  <script src="../js/hash.js"></script>
  <script src="../js/jquery.actual.min.js"></script>
  <script src="../js/magazine.js"></script>
  <script src="../js/scripts.js"></script>
  <style type="text/css">
  body{
    background:#fdfdfd;
  }

  .flipbook-container {
    padding: 0 !important;
  }

  .magazine {
    overflow: hidden;
  }

  .magazine .turn-page{
    background-color:#ccc;
    background-size:100% 100%;
  }

  .magazine .page {
    position: relative;
  }

  .magazine .page.odd img {
    border: 3px solid #ccc;
    border-left: 0;
  }

  .magazine .page.even img {
    border: 3px solid #ccc;
    border-right: 0;
  }

  .magazine img {
    width: 100%;
    height: auto;
    max-width: none;
  }

  .page-numbers {
    position: absolute;
    bottom: -38px;
    width: 100%;
  }

  .magazine-viewport {
    right: 0;
  }

  .flipbook.pages {
    position: absolute;
    bottom: 0;
    text-align: center;
    width: 100%;
    padding-top: 24px;
    background: rgba(255,255,255,0.5);
  }

  .flipbook.pages img {
    height: 100px;
    width: auto; 
    border: 3px solid #fff;
    box-shadow: 0 2px 2px rgba(0,0,0,0.5);
    margin-right: 12px;
  }
  .flipbook.pages img:last-child {
    margin: 0;
  }

  </style>
</head>

<body>

  <header id="main-header" class="row" style="max-width: none;">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="#">Save22.com.ph</a></h1>
        </li>
        <li class="toggle-topbar"><a href="#previous-page" class="back-link"><span>Back</span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="left">
          <li class="divider"></li>
          <li><a href="#">Catalog Name</a></li>
          <li class="divider"></li>
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

    <section class="browse-catalogs hide">
      <?php include('../elements/carousel-promos-flipbook.php'); ?>
    </section>
  </header>


  <div class="row" style="max-width: none;">
    <div class="small-12 columns flipbook-container">

      <div class="magazine-viewport">
        <div class="magazine-container">
          <div class="magazine">
          </div>
        </div><!-- container -->
      </div><!-- viewport -->

      <section class="flipbook pages hide">
        <p>
          <img src="pages/1.jpg" page-id="1"> 
          <img src="pages/2.jpg" page-id="2">
          <img src="pages/3.jpg" page-id="3">
          <img src="pages/4.jpg" page-id="4"> 
          <img src="pages/5.jpg" page-id="5">
          <img src="pages/6.jpg" page-id="6">
        </p>
      </section>

      <div class="page-numbers hide-zoom">
        <span class="current-page">Page 1</span> of <span class="last-page">9</span>
        <a href="#" ignore="1" class="left prev-button2">Previous</a>
        <a href="#" ignore="1" class="right next-button2">Next</a>
      </div>


      <a href="#" ignore="1" id="flipbook-prev" class="previous-button page-button hide-zoom">Prev <span></span></a>
      <a href="#" ignore="1" id="flipbook-next" class="next-button page-button hide-zoom">Next <span></span></a>

    </div>
  </div>


<script type="text/javascript">
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
        }, 10);
    });
 });

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
