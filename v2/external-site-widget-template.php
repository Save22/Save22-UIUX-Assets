<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Save22</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css">

    <link rel="stylesheet" href="css/widget-page.css" type="text/css" media="screen" />

    <script src="js/modernizr.foundation.js"></script>

</head>


<body>

<?php require_once('widgets/notice-shopsmarter.php'); ?>
<header id="main-header" class="ext-widget">
    <div class="row">
        
        <div class="three columns logo-container">
            <a href="http://save22.com">
                <h1 id="logo" class="block right" style="background: url('img/poweredby-logoC.png') no-repeat;">Save22</h1>
                </a>
        </div><!-- two -->
        <div class="nine columns">

            <div class="row collapse" id="searchbox">
              <div class="ten mobile-three columns">
                <input type="text" id="site_search" placeholder="Search for a product" />
              </div>
              <div class="two mobile-one columns">
                <a class="button expand postfix">Search</a>
              </div>
            </div>
            <div id="popular-searches">
                    <ul class="list-nav nolist">
                        <li class="label uppercase">popular: </li>
                        <li><a href="#">computers</a></li>
                        <li><a href="#">mobile</a></li>
                        <li><a href="#">SLR</a></li>
                        <li><a href="#">iPhone</a></li>
                    </ul>
            </div>
        </div><!-- four -->
    </div><!-- row -->
</header>

<div id="content">

        <div class="row">
            <div class="three columns">
                <div id="sidebar" class="widget">
                    <h3>Download the app and find prices on the go!</h3>

                      <ul class="nolist download">
                        <li><a href="https://itunes.apple.com/ag/app/save22/id460343551?mt=8" class="dl-ios dl-button">
                        <img src="img/dl-appstore2.png" class="left"> 
                        <div class="dl-copy left">
                        Available on the <br><span class="bigger">app store</span></div>
                        </a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=com.save22.client.android&hl=en" class="dl-android dl-button">
                        <img src="img/dl-googleplay.png" class="left"> 
                        <div class="dl-copy left">
                        Get it on<br><span class="bigger">Google Play</span></div>
                        </a></li>
                      </ul>

                </div>
                <div class="fb">

                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsave22ph&amp;width=200&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=296833577072818" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:62px;" allowTransparency="true"></iframe>

                </div>
            </div> <!-- sidebar -->

            <div class="nine columns">

                <h2 class="single-header page-header no-border-top">Featured Items</h2>

                <!-- ONLY IF RETURNING SEARCH RESULTS --> 
                <!-- <p>Viewing results <strong>1-10</strong> of <strong>24</strong></p> -->

                <?php include_once('widgets/featured-diapers.php'); ?>

            </div>

        </div><!-- row -->
</div><!-- content -->




<?php require_once('widgets/categories.php'); ?>

  
  <!-- Included JS Files (Compressed) -->
  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/app.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script src="js/extwidget-scripts.js"></script>

</body>

</html>
