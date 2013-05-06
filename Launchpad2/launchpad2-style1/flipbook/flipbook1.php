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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="../js/turn.js"></script>
  <script type="text/javascript" src="../js/zoom.js"></script>
  <!-- <script type="text/javascript" src="../js/turn.html4.min.js"></script> -->
  <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="../js/hash.js"></script>
  <script type="text/javascript" src="../js/magazine.js"></script>
  <script src="../js/scripts.js"></script>
  <style type="text/css">
  body{
    background:#fdfdfd;
  }
  #flipbook{
    width:1152px;
    height:752px;
  }
  #flipbook .turn-page{
    background-color:#ccc;
    background-size:100% 100%;
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
    <div class="small-12 large-9 columns flipbook-container">

      <div class="magazine-viewport">
        <div class="magazine-container">
              <div class="magazine row" style="max-width: none;">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
              </div>
        </div><!-- container -->

        <div class="row hide-zoom">
          <div class="page-numbers">
            <span class="current-page">Page 1-2</span> of 9
            <a href="#" ignore="1" class="left prev-button2"></a>
            <div ignore="1" class="left prev-button2">Previous</div>
            <a href="#" ignore="1" class="right next-button2"></a>
            <div ignore="1" class="right next-button2">Next</div>
          </div>
        </div>

      </div><!-- viewport -->
      <!-- 
      <a href="#" ignore="1" id="flipbook-prev" class="previous-button page-button">Prev <span></span></a>
      <a href="#" ignore="1" id="flipbook-next" class="next-button page-button">Next <span></span></a>
      -->
    </div>

    <div class="small-12 large-3 columns hide-zoom">
      <section class="sidebar flipbook info">
        <div class="store-link flipbook">
          <a href="#store-page"><img src="../img/retailer-logo4.jpg" alt="Retailer Name"></a>
        </div>
        <div class="expiry">
          <p>
            Valid until <strong>April 12, 2013</strong>
          </p>
        </div>
      </section>

      <section class="sidebar flipbook pages">

        <h3 class="sidebar-header">pages</h3>
        
        <p>
          <img src="../img/catsample1.jpg" page-id="1" class="thumbnail" style="height: 100px;">
        </p>
        <p>
          <img src="../img/catsample2.jpg" page-id="2" class="thumbnail" style="height: 100px;">
        </p>
      </section>

      <section class="sidebar flipbook list-links panel-links">
        <a href="#" class="pull-down">
          <h3 class="sidebar-header">In this catalog <span class="arrow-down right arrow"></span></h3>
        </a>
        <div class="pull-content hide">
          <ul class="quick-categories">
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
          </ul>
        </div>

      </section>

      <section class="sidebar flipbook related-catalogs">
        <a href="#" class="pull-down">
          <h3 class="sidebar-header">Related Catalogs <span class="arrow-down right arrow"></span></h3>
        </a>
        <div class="pull-content">
          <?php include('../elements/carousel-promos-flipbook.php'); ?>
        </div>
      </section>
    </div>
  </div>
</body>
<script type="text/javascript">
var turner;
    $(document).ready(function() {
    	var numPages = 12;
    	setLastPage(numPages);
		turner = $('.magazine').turn({
		    // Magazine width
		    width: 800,
		    // Magazine height
		    height: 600,
		    // Elevation will move the peeling corner this number of pixels by default
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
		
		// Zoom.js
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
		            $('.hide-zoom').hide();
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
		
		// URIs - Format #/page/1 
		Hash.on('^page\/([0-9]*)$', {
		    yep: function(path, parts) {
		        var page = parts[1];
		        if (page !== undefined) {
		            if ($('.magazine').turn('is'))
		                $('.magazine').turn('page', page);
		        }
		    },
		    nop: function(path) {
		        if ($('.magazine').turn('is'))
		            $('.magazine').turn('page', 1);
		    }
		});
		
		$(window).resize(function() {
		    resizeViewport();
		}).bind('orientationchange', function() {
		    resizeViewport();
		});
		
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
		
		
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
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
    });
    
    function setCurrentPage(currentPage){
    	console.log(currentPage);
    	console.log(currentPage % 2 == 0);
    	if ((currentPage % 2 == 0) && (currentPage != 1)){
    		$('.current-page').html('PAGE ' + currentPage + '-' + (currentPage + 1));
    	} else if (currentPage == 1){
    		$('.current-page').html('PAGE ' + currentPage);
    	} else {
    		$('.current-page').html('PAGE ' + (currentPage - 1) + '-' + currentPage);
    	}
    }
    
    function setLastPage(lastPage){
    	$('.last-page').html(lastPage);
    }
</script>
</html>
