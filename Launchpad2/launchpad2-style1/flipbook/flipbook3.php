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
  <!-- <link rel="stylesheet" href="../css/magazine.css" /> -->

  <script src="../js/vendor/custom.modernizr.js"></script>
  
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
    background: rgba(0,0,0,0.5);
    overflow-x: scroll;
    overflow-y: hidden;
    height: 160px;
  }

  .flipbook.pages ul {
    white-space: nowrap;
    padding: 0 24px;
  }
  .flipbook.pages img {
    height: 100px;
    width: auto; 
    border: 3px solid #fff;
    box-shadow: 0 2px 2px rgba(0,0,0,0.5);
    margin-right: 12px;
  }
  .flipbook.pages li {
    display: inline-block;
    float: none;
  }
  .flipbook.pages img:last-child {
    margin-right: 24px;
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
          <div class="magazine">
            <div> <img src="pages/1.jpg" class="individual-page"> </div>
            <div> <img src="pages/2.jpg" class="individual-page"> </div>
            <div> <img src="pages/3.jpg" class="individual-page"> </div>
            <div> <img src="pages/4.jpg" class="individual-page"> </div>
            <div> <img src="pages/5.jpg" class="individual-page"> </div>
            <div> <img src="pages/6.jpg" class="individual-page"> </div>
            <div> <img src="pages/7.jpg" class="individual-page"> </div>
            <div> <img src="pages/8.jpg" class="individual-page"> </div>
            <div> <img src="pages/9.jpg" class="individual-page"> </div>
          </div>
        </div><!-- container -->
      </div><!-- viewport -->

      <section class="flipbook pages hide">
        <ul>
          <li><img src="pages/1.jpg" page-id="1"> </li>
          <li><img src="pages/2.jpg" page-id="2"></li>
          <li><img src="pages/3.jpg" page-id="3"></li>
          <li><img src="pages/4.jpg" page-id="4"> </li>
          <li><img src="pages/5.jpg" page-id="5"></li>
          <li><img src="pages/6.jpg" page-id="6"></li>
          <li><img src="pages/1.jpg" page-id="1"> </li>
          <li><img src="pages/2.jpg" page-id="2"></li>
          <li><img src="pages/3.jpg" page-id="3"></li>
          <li><img src="pages/4.jpg" page-id="4"> </li>
          <li><img src="pages/5.jpg" page-id="5"></li>
          <li><img src="pages/6.jpg" page-id="6"></li>
        </ul>
      </section>

      <div class="page-numbers">
        <span class="current-page">Page 1-2</span> of 9
        <a href="#" ignore="1" class="left prev-button2">Previous</a>
        <a href="#" ignore="1" class="right next-button2">Next</a>
      </div>


      <a href="#" ignore="1" id="flipbook-prev" class="previous-button page-button">Prev <span></span></a>
      <a href="#" ignore="1" id="flipbook-next" class="next-button page-button">Next <span></span></a>

    </div>

    <div class="small-12 large-3 columns sidebar flipbook">
      <section class="sidebar flipbook info hide">
        <div class="store-link flipbook">
          <a href="#store-page"><img src="../img/retailer-logo4.jpg" alt="Retailer Name"></a>
        </div>
        <div class="expiry">
          <p>
            Valid until <strong>April 12, 2013</strong>
          </p>
        </div>
      </section>

      <section class="sidebar flipbook list-links panel-links hide">
        <a href="#" class="pull-down">
          <h3 class="sidebar-header">In this catalog <span class="arrow-down right arrow"></span></h3>
        </a>
        <div class="pull-content">
          <ul class="quick-categories">
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
          </ul>d
        </div>
      </section>
      
      <div class="sidebar flipbook related-catalogs">
        <div class="section-container auto" data-section>
          <section>
            <p class="title" data-section-title><a href="#panel1">Search</a></p>
            <div class="content" data-section-content>
              
             <h3 class="sidebar-header">Search Results</h3>
              <div class="flipbook-search">
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Search for a catalog">
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
              <p>Content of section 2.</p>
            </div>
          </section>
          <section>
            <p class="title" data-section-title><a href="#panel3">Browse</a></p>
            <div class="content" data-section-content>
              <p>Content of section 3.</p>
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
  <script src="../js/foundation/foundation.alerts.js"></script>
  <script src="../js/foundation/foundation.cookie.js"></script>
  <script src="../js/foundation/foundation.dropdown.js"></script>
  <script src="../js/foundation/foundation.forms.js"></script>
  <script src="../js/foundation/foundation.orbit.js"></script>
  <script src="../js/foundation/foundation.placeholder.js"></script>
  <script src="../js/foundation/foundation.reveal.js"></script>
  <script src="../js/foundation/foundation.section.js"></script>
  <script src="../js/foundation/foundation.tooltips.js"></script>
  <script src="../js/foundation/foundation.joyride.js"></script>

  <script src="../js/turn.js"></script>
  <script src="../js/zoom.js"></script>
  <!-- <script src="../js/turn.html4.min.js"></script> -->
  <script src="../js/jquery.mousewheel.min.js"></script>
  <script src="../js/hash.js"></script>
  <script src="../js/jquery.actual.min.js"></script>
  <!-- <script src="../js/magazine.js"></script> -->
  <script src="../js/scripts.js"></script>

  <script>

    var catalog_list_height = $(window).height() - ($('.top-bar').height() + $('.sidebar.flipbook.info').outerHeight(true) + 
      $('.related-catalogs .sidebar-header').outerHeight(true) + 40);
    $('.list-flip-related').css('height', catalog_list_height);

    var sidebar_height = $(window).height() - $('.top-bar').height();
    $('.columns.sidebar').css('height', sidebar_height);



    var container_width = $('.flipbook-container').width() - 15;
    var page_width = container_width / 2;

    var window_height = $(window).height();
    var header_height = $('.top-bar').outerHeight(true);
    var pagination_height = $('.page-numbers').outerHeight(true);
    var container_height = window_height - (header_height + pagination_height);
    var page_height = $('.page img').actual('height');

    $('.magazine').css('width', container_width);
    $('.flipbook-container').css('height', container_height);
    $('.page-button').css('height', container_height);
    $('.magazine').height(container_height);

    $('.magazine').turn({
      gradients: true, 
      acceleration: true/*,
      width: container_width */
    });



  /* SHOW THUMBNAILS */

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

  /* RESIZING */


    var resizeTimer;

      /*
      $('.flipbook-container').css('height', container_height);
      $('.page-button').css('height', container_height);
      $('.magazine').css('height', container_height);
      $('.magazine').css('width', container_width);
      $('.magazine').turn('size', container_width, container_height);
      
      $('.page-wrapper').css('width', page_width);
      $('.page-wrapper div').css('width', page_width);
      $('.page-wrapper div').css('height', page_height);
      $('.page img').css('width', page_width);
      $('.page img').css('max-height', 'auto');

      }, 10);
      */

    $(window).resize(function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function(){
            
        var container_width = $('.flipbook-container').width() - 15;
        var page_width = Math.floor(container_width / 2);

        var window_height = $(window).height();
        var header_height = $('.top-bar').outerHeight(true);
        var pagination_height = $('.page-numbers').outerHeight(true);
        var container_height = Math.floor(window_height - (header_height + pagination_height));
        var page_height = $('.page img').actual('height');


        $('.flipbook-container').css('height', container_height);
        $('.page-button').css('height', container_height);
        $('.magazine').css('height', container_height);
        $('.magazine').css('width', container_width);
        $('.page-wrapper').css('width', page_width);
        $('.page-wrapper div').css('width', page_width);
        $('.page-wrapper div').css('height', page_height);
        $('.page-wrapper div').turn('width', page_width);
        $('.page-wrapper div').turn('height', page_height);
        $('.shadow').turn('height', page_height);

        $('.page img').css('width', page_width);
        $('.page img').css('max-height', 'auto');
        }, 10);

        $('.magazine').turn({
          height: page_height
        });

  });

  </script>

</body>

</html>
