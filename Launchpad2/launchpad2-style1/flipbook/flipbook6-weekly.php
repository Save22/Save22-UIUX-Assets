<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <title>Save22 | Launchpad 2.0 - Flipbook</title>

  <link rel="stylesheet" href="../css/styles-flipbook.css" />
  
  <!--[if IE 8]>
  <![endif]-->

  <!--[if IE 7]>
  <![endif]-->

  <link rel="icon" href="../img/favicon_16x16.png" sizes="32x32" type="image/png">
  <link rel="icon" href="../img/favicon_32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="../img/favicon_64x64.png" sizes="64x64" type="image/png">
  <link rel="icon" href="../img/favicon_128x128.png" sizes="128x128" type="image/png">

  <!-- home screen for iphones without the gloss effect -->
  <link rel="apple-touch-icon-precomposed" href="img/icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icon-iphone4.png">

</head>

<body class="flipbook">

  <header id="main-header">
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
          <li class="back"><a href="#">&lsaquo; Back to Search</a></li><!-- just 'back' if not coming from search -->
          <li class="divider"></li>
          <li class="store-link"><a href="#store-page">Fairprice Blah Blah Blah</a></li>
          <li class="divider"></li>
          <li class="expiry"><span>Valid until <strong>April 12, 2013</strong></span></li>
        </ul>
      </section>
    </nav>
  </header>


  <div class="main-container">
    <div class="flipbook-container">
      <div class="magazine-viewport">
        <div class="magazine-container">

          <div class="alert-flipbook hide">
            <img src="../img/loading.gif" alt="loading"> 
            <span>Please wait while the image loads.</span>
          </div>

          <div class="magazine">
          </div>
        </div><!-- container -->
      </div><!-- viewport -->
    </div>
  </div><!-- main-container -->

  <div class="sidebar-tray">
    <ul>
      <li><a href="#" class="tab-search"><img src="../img/icon-flipbook-info.svg" border="0"> Info</a></li>
      <li><a href="#" class="tab-search"><img src="../img/icon-flipbook-search.svg" border="0"> Search</a></li>
      <li><a href="#" class="tab-near"><img src="../img/icon-flipbook-nearby.svg" border="0"> What's Near</a></li>
      <li><a href="#" class="tab-browse"><img src="../img/icon-flipbook-browse.svg" border="0"> Browse</a></li>
    </ul>
  </div>

    <div class="sidebar flipbook">

      <div class="related-catalogs">
        <div class="section-container tabs" data-section="tabs" data-options="deep_linking:true;">
          <div class="section">
            <div class="content" data-slug="search" data-section-content>
              
              <?php // include('../elements/loader-flipbook.php'); ?>
              <?php include('../elements/flipbook-info.php'); ?>

            </div>
          </div>
        </div><!-- tabs -->
      </div>
      
    </div><!-- large-3 -->

  <div id="main-footer">
    <div class="page-switch">
      <a href="#">&larr; Previous</a> <a href="#">Next &rarr;</a>
    </div>
    <div class="zoom-icon">
      <a href="#" title="Double click on page to Zoom In. 
            Press ESC to Zoom Out"><img src="../img/icon-flipbook-zoom.svg" border="0"> Zoom In</a>
    </div>
    <div class="page-numbers">
      <span class="current">Page 1</span> of <span class="total">4</span>
    </div>
  </div>

  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/scripts-flipbook.js"></script>

  <script src="../js/turn.js"></script>
  <script src="../js/zoom.js"></script>

  <!--[if IE 8]><script src="../js/turn.html4.min.js"></script><![endif]-->

  <script src="../js/hash.js"></script>
  <script src="../js/jquery.actual.min.js"></script>
  <script src="../js/magazine.js"></script>

  <script>
  var serverAspectRatio = 2.0234741784;
    $(document).ready(function() {
  });
  </script>

  <script src="../js/flipbook-custom.js"></script>

  <script>
    function supportsSVG() {
        return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;  
    }
    if (supportsSVG()) {
        document.documentElement.className += ' svg';
    } else {
        document.documentElement.className += ' no-svg';
        var imgs = document.getElementsByTagName('img');
        var dotSVG = /.*\.svg$/;
        for (var i = 0; i != imgs.length; ++i) {
            if(imgs[i].src.match(dotSVG)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
            }
        }
    }
  </script>

</body>

</html>
