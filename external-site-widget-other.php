<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Save22</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- 1140px Grid styles for IE -->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
    
    <link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/dropkick.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="css/widget-page.css" type="text/css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

</head>


<body>

<header id="main-header" class="ext-widget">
    <div class="container">
        <div class="row">
            <div class="twocol">
                <a href="http://save22.com">
                    <h1 id="logo" class="block">Save22</h1>
                </a>
            </div>
            <div class="tencol last">
                <div id="searchbox">
                    <input type="text" id="site_search" placeholder="Search for a product">
                </div> 
            </div>
        </div><!-- row -->
        <div class="row">
                <div id="popular-searches" class="block group">
                    <ul class="list-nav nolist">
                        <li class="label uppercase">popular: </li>
                        <li><a href="#">computers</a></li>
                        <li><a href="#">mobile</a></li>
                        <li><a href="#">SLR</a></li>
                        <li><a href="#">iPhone</a></li>
                    </ul>
                </div>
        </div>
    </div>
</header>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="threecol" id="sidebar">
                <div class="widget">
                    <h3>Download the app</h3>
                    <p>Find prices on the go: </p>
                    <a href="#" class="download-apple">
                        <img src="images/footer-dlappstore.png">
                    </a>
                    <a href="#" class="download-google">
                        <img src="images/footer-dlplaystore.png">
                    </a>

                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsave22ph&amp;width=200&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=296833577072818" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:62px;" allowTransparency="true"></iframe>

                </div>
            </div> <!-- sidebar -->

            <div class="ninecol last">

                <section>
                    <div id="featured" class="slider block group" style="background:url('images/hub-sample-featured2.png') #4a2f1c no-repeat;">

                        <div class="intro-copy right relative text-light">
                            What are you giving 
                            this Christmas season?
                            <a href="#" class="red-button block">See great Christmas deals!</a>
                        </div>

                    </div>
                    <div id="featured-promos" class="group">
                        <ul class="nolist">
                            <li class="innercol"><a href="#">Apple retailers</a></li>
                            <li class="innercol"><a href="#">Promo 2</a></li>
                            <li class="innercol"><a href="#">Promo 3</a></li>
                            <li class="innercol"><a href="#">Promo 4</a></li>
                        </ul>
                    </div>
                </section>

                <?php require_once('widgets/featured-gadgets.php'); ?>

            </div>

        </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->
