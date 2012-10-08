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

<header id="main-header" class="ext-widget">
    <div class="row">
        
        <div class="two columns">
            <a href="http://save22.com">
                    <h1 id="logo" class="block" style="background: url('img/poweredby-logoC.png') no-repeat;">Save22</h1>
                </a>
        </div><!-- two -->
        <div class="ten columns">
            <div id="searchbox">
                <input type="text" id="site_search" placeholder="Search for a product">
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
                    <a href="#" class="download-apple">
                        <img src="img/footer-dlappstore.png">
                    </a>
                    <a href="#" class="download-google">
                        <img src="img/footer-dlplaystore.png">
                    </a>
                </div>
                
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsave22ph&amp;width=200&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=296833577072818" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:62px;" allowTransparency="true"></iframe>

            </div> <!-- sidebar -->

            <div class="nine columns">

                <section>
                    <a href="#">
                        <div id="featured-header" class="block group" style="background:url('img/hub-sample-featured2.png') #4a2f1c no-repeat;">

                            <div class="intro-copy right relative text-light">
                                What are you giving 
                                this Christmas season?
                                <span href="#" class="button radius red-button block mtop">See Christmas deals!</span>
                            </div>

                        </div>
                    </a>
                </section>

                <?php include_once('widgets/featured-moms.php'); ?>

            </div>

        </div><!-- row -->
</div><!-- content -->




  
  <!-- Included JS Files (Compressed) -->
  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/extwidget-scripts.js"></script>

</body>

</html>
