<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Save22 | Launchpad 2.0</title>

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/styles.css" />
  
  <!--[if IE 8]>
    <link rel="stylesheet" href="css/ie8-grid-foundation-4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/ie8.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if IE 7]>
    <link rel="stylesheet" href="css/ie8-grid-foundation-4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
  <![endif]-->

  <link rel="icon" href="img/favicon_16x16.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/favicon_32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/favicon_64x64.png" sizes="64x64" type="image/png">
  <link rel="icon" href="img/favicon_128x128.png" sizes="128x128" type="image/png">

  <!-- home screen for iphones without the gloss effect -->
  <link rel="apple-touch-icon-precomposed" href="img/icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icon-iphone4.png">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
  <a name="top"></a>    
  <header id="main-header">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="#"><img src="img/logo-ph-white.svg" alt="Save22" class="logo-img">Save22.com.ph</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#" class="header-cat-link"><span></span></a></li>
        <li class="toggle-topbar search-icon"><a href="#" class="search-link"><span class="icon"></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="left">
          <li class="divider"></li>
          <li class="has-dropdown"><a href="#" class="header-cat-link text-link">Categories</a>
          </li>
          <li class="divider"></li>
          <li class="has-form search">
            <form>
              <div class="row collapse wide">
                <div class="small-8 columns">
                  <input type="search" placeholder="Find store, brand, or item">
                </div>
                <div class="small-4 columns">
                  <a href="#" class="button">Search</a>
                </div>
              </div>
            </form>
          </li>
        </ul>
      </section>
    </nav>

    <section class="mobile-search mobile-only hide">
      <form>
        <div class="row collapse">
          <div class="small-8 columns">
            <input type="search" placeholder="Find store, brand, or item">
          </div>
          <div class="small-4 columns">
            <a href="#" class="button">Search</a>
          </div>
        </div>
      </form>
    </section>

    <nav class="all-category-links hide row main-row">
      <ul class="small-block-grid-1 large-block-grid-4">
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
    </nav>
  </header>

  <div class="home-intro row main-row">
    <section class="top-bar-section">
      <ul>
        <li class="copy desktop-only"><label class="inline loc-suggestions-trigger" for="header-location">
        Flip through brochures and promos of places near you!</label></li>
          <li class="has-form location-search">
            <form>
              <div class="row collapse">
                <div class="small-3 large-6 columns">
                  <label class="inline loc-suggestions-trigger" for="header-location"><span class="left">You're browsing at </span> <img src="img/icon-loc.svg" alt="Change Location" class="right loc-icon"> </label>
                </div>
                <div class="small-9 large-6 columns location-form">
                  <input name="location" id="header-location" type="text" placeholder="Ortigas" value="Ortigas">

                  <nav class="location-suggestions hide">
                    <h3>Suggested Places</h3>
                    <ul>
                      <li><a href="#">Cainta</a></li>
                      <li><a href="#">Mandaluyong</a></li>
                      <li><a href="#">Makati</a></li>
                      <li><a href="#">Manila</a></li>
                      <li><a href="#">Ortigas</a></li>
                      <li><a href="#">Parañaque</a></li>
                      <li><a href="#">Pasig</a></li>
                      <li><a href="#">Taguig</a></li>
                    </ul>
                  </nav>

                  <div class="location-autocomplete hide">
                    
                    <!--
                    <div class="error message">
                      <h3>Place not found</h3>

                      <p>I'm sorry but we couldn't find the place you were looking for.</p>
                    </div>
                    -->

                    <ul>
                      <li><a href="#">Result 1</a></li>
                      <li><a href="#">Result 2</a></li>
                      <li><a href="#">Result 3</a></li>
                      <li><a href="#">Result 4</a></li>
                    </ul>

                  </div>

                </div><!-- col -->
              </div><!-- rows -->
            </form>
          </li><!-- loc search -->
      </ul>

      <ul class="right map-view">
        <li><a href="page-map.php" class="link-map-view"><img src="img/icon-map.svg" alt="View Map" class="left">Map View</a></li>
      </ul>
    </section>
  </div>
