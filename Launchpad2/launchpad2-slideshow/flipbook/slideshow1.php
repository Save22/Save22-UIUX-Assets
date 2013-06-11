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

  <script src="../js/vendor/custom.modernizr.js"></script>

  <link href="../css/photoswipe.css" type="text/css" rel="stylesheet" />
  
  <script type="text/javascript" src="../js/klass.min.js"></script>
  <script type="text/javascript" src="../js/code.photoswipe-3.0.5.min.js"></script>
  
  
  <!--[if IE 8]> <script src="../js/vendor/jquery.js"></script><![endif]-->
  <!--[if IE 8]> <script type="text/javascript" src="../js/code.photoswipe.jquery-3.0.5.min.js"></script> <![endif]-->
  
  
  <script type="text/javascript">

    (function(window, PhotoSwipe){
    
      document.addEventListener('DOMContentLoaded', function(){
      
        var
          options = {},
          instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
          
          
          // onBeforeShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeShow, function(e){
            console.log('onBeforeShow');
          });
          
          // onShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onShow, function(e){
            console.log('onShow');
          });
          
          // onBeforeHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeHide, function(e){
            console.log('onBeforeHide');
          });
          
          // onHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onHide, function(e){
            console.log('onHide');
          });
          
          // onDisplayImage
          instance.addEventHandler(PhotoSwipe.EventTypes.onDisplayImage, function(e){
            console.log('onDisplayImage{');
            console.log('onDisplayImage - e.action = ' + e.action);
            console.log('onDisplayImage - e.index = ' + e.index);
            console.log(instance.getCurrentImage());
            console.log('onDisplayImage}');
          });
          
          // onResetPosition
          instance.addEventHandler(PhotoSwipe.EventTypes.onResetPosition, function(e){
            console.log('onResetPosition');
          });
          
          // onSlideshowStart
          instance.addEventHandler(PhotoSwipe.EventTypes.onSlideshowStart, function(e){
            console.log('onSlideshowStart');
          });
          
          // onSlideshowStop
          instance.addEventHandler(PhotoSwipe.EventTypes.onSlideshowStop, function(e){
            console.log('onSlideshowStop');
          });
          
          // onTouch
          instance.addEventHandler(PhotoSwipe.EventTypes.onTouch, function(e){
            console.log('onTouch{');
            console.log('onTouch - e.action = ' + e.action);
            console.log('onTouch - e.point = ');
            console.log(e.point);
            console.log('onTouch}');
          });
          
          // onBeforeCaptionAndToolbarShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeCaptionAndToolbarShow, function(e){
            console.log('onBeforeCaptionAndToolbarShow');
          });
          
          // onCaptionAndToolbarShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onCaptionAndToolbarShow, function(e){
            console.log('onCaptionAndToolbarShow');
          });
          
          // onBeforeCaptionAndToolbarHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeCaptionAndToolbarHide, function(e){
            console.log('onBeforeCaptionAndToolbarHide');
          });
          
          // onCaptionAndToolbarHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onCaptionAndToolbarHide, function(e){
            console.log('onCaptionAndToolbarHide');
          });
          
          // onToolbarTap
          instance.addEventHandler(PhotoSwipe.EventTypes.onToolbarTap, function(e){
            console.log('onToolbarTap');
            console.log(e);
          });
          
          // onBeforeZoomPanRotateShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeZoomPanRotateShow, function(e){
            console.log('onBeforeZoomPanRotateShow');
          });
          
          // onZoomPanRotateShow
          instance.addEventHandler(PhotoSwipe.EventTypes.onZoomPanRotateShow, function(e){
            console.log('onZoomPanRotateShow');
          });
          
          // onBeforeZoomPanRotateHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onBeforeZoomPanRotateHide, function(e){
            console.log('onBeforeZoomPanRotateHide');
          });
          
          // onZoomPanRotateHide
          instance.addEventHandler(PhotoSwipe.EventTypes.onZoomPanRotateHide, function(e){
            console.log('onZoomPanRotateHide');
          });
          
          // onZoomPanRotateTransform
          instance.addEventHandler(PhotoSwipe.EventTypes.onZoomPanRotateTransform, function(e){
            console.log('onZoomPanRotateTransform');
            console.log(e);
          });
          
      }, false);
      
      
    }(window, window.Code.PhotoSwipe));
    
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
      
      <ul id="Gallery" class="gallery">
        
        <li><a href="pages/full/1.jpg"><img src="pages/thumb/1.jpg" alt="Page 001" /></a></li>
        <li><a href="pages/full/2.jpg"><img src="pages/thumb/2.jpg" alt="Page 002" /></a></li>
        <li><a href="pages/full/3.jpg"><img src="pages/thumb/3.jpg" alt="Page 003" /></a></li>
        <li><a href="pages/full/4.jpg"><img src="pages/thumb/4.jpg" alt="Page 004" /></a></li>
        <li><a href="pages/full/5.jpg"><img src="pages/thumb/5.jpg" alt="Page 005" /></a></li>
        <li><a href="pages/full/6.jpg"><img src="pages/thumb/6.jpg" alt="Page 006" /></a></li>
        
      </ul>
      
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
