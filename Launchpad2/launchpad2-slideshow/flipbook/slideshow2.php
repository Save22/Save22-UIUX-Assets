<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Save22 | Launchpad 2.0 - Flipbook</title>

  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  
  <!--[if IE 8]>
    <link rel="stylesheet" href="../css/ie8-grid-foundation-4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/ie8.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if IE 7]>
    <link rel="stylesheet" href="../css/ie8-grid-foundation-4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/ie7.css" type="text/css" media="screen" />
  <![endif]-->

  <link rel="icon" href="../img/favicon_16x16.png" sizes="32x32" type="image/png">
  <link rel="icon" href="../img/favicon_32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="../img/favicon_64x64.png" sizes="64x64" type="image/png">
  <link rel="icon" href="../img/favicon_128x128.png" sizes="128x128" type="image/png">

  <!-- home screen for iphones without the gloss effect -->
  <link rel="apple-touch-icon-precomposed" href="img/icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icon-iphone4.png">

  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/vendor/custom.modernizr.js"></script>

  <link href="../css/photoswipe.css" type="text/css" rel="stylesheet" />
  
  <script type="text/javascript" src="../js/klass.min.js"></script>
  <script type="text/javascript" src="../js/code.photoswipe.jquery-3.0.5.min.js"></script>
  
  
  <script type="text/javascript">
    
    /* 
      Overview: 
      ---------
      
      Demonstrates inline functionality. This demo sets the images using an array.
      There is nothing stopping you basing this on image dom elements like other examples
    
    */
    
    (function(window, Util, PhotoSwipe){
      
      Util.Events.domReady(function(e){
        
        var instance;
        
        instance = PhotoSwipe.attach(
          [
            { url: 'pages/full/1.jpg', caption: 'Page 1'},
            { url: 'pages/full/2.jpg', caption: 'Page 2'},
            { url: 'pages/full/3.jpg', caption: 'Page 3'},
            { url: 'pages/full/4.jpg', caption: 'Page 4'},
            { url: 'pages/full/5.jpg', caption: 'Page 5'},
            { url: 'pages/full/6.jpg', caption: 'Page 6'},
          ],
          {
            target: window.document.querySelectorAll('#PhotoSwipeTarget')[0],
            preventHide: true,
            getImageSource: function(obj){
              return obj.url;
            },
            getImageCaption: function(obj){
              return obj.caption;
            }
          }
        );
        instance.show(0);
        
      });
      
      
    }(window, window.Code.Util, window.Code.PhotoSwipe));
    
  </script>
  
</head>

<body class="flipbook">

  <header id="main-header" class="row" style="max-width: none;">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="#"><img src="../img/logo-ph-white.svg" alt="Save22" class="logo-img">Save22.com.ph</a></h1>
        </li>
        <li class="toggle-topbar menu-icon flipbook-sidebar-trigger"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section flipbook">
        <ul class="left">
          <li class="divider"></li>
          <li class="store-link"><a href="#store-page">Fairprice</a></li>
          <li class="divider"></li>
          <li class="expiry">Valid until <strong>April 12, 2013</strong></li>
        </ul>
        <ul class="right">
          <li><a href="#" title="Double click on page to Zoom In. 
            Press ESC to Zoom Out">Zoom In</a></li>
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


      <div id="MainContent">

        <div id="PhotoSwipeTarget"></div>

      </div>


    </div>
    <div class="small-12 large-3 columns sidebar flipbook">
      <!-- <a href="#" class="hide-sidebar">Hide Sidebar <span class="arrow-right arrow"></span></a> -->
      
      <div class="sidebar flipbook related-catalogs">
        <div class="section-container tabs" data-section="tabs" data-options="deep_linking:true;">
          <div class="section">
            <div class="content" data-slug="search" data-section-content>
              
              <h3 class="sidebar-header">Search <!-- Results --></h3>

              <div class="flipbook-search">
                <div class="row collapse">
                  <div class="small-9 columns">
                    <input type="text" placeholder="Search for a catalog" value="Tissue Paper">
                  </div>
                  <div class="small-3 columns">
                    <button class="postfix">search</button>
                  </div>
                </div>
              </div>

              <?php // include('../elements/loader-flipbook.php'); ?>
              <?php include('../elements/carousel-promos-flipbook.php'); ?>

            </div>
          </div>
        </div><!-- tabs -->
      </div>
      
    </div><!-- large-3 -->
  </div><!-- main-container -->

  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation/foundation.js"></script>
  <script src="../js/foundation/foundation.dropdown.js"></script>
  <script src="../js/foundation/foundation.section.js"></script>
  <script src="../js/foundation/foundation.joyride.js"></script>
  <script src="../js/jquery.actual.min.js"></script>
  <script src="../js/scripts-flipbook.js"></script>

  <script>
    if (!Modernizr.svg) {
      var imgs = document.getElementsByTagName('img');
      var endsWithDotSvg = /.*\.svg$/
      var i = 0;
      var l = imgs.length;
      for(; i != l; ++i) {
          if(imgs[i].src.match(endsWithDotSvg)) {
              imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
          }
      }
  }

  </script>

</body>

</html>
