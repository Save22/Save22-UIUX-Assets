<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<style type="text/css">
    .price-option a:hover { text-decoration: underline; }
    .price-option .price, .price-option .freebie { width: 40%; float: left; padding-left: 12px; margin-right: 1.5%; }
    .price-option .store, .price-option .shop-more { width: 58%; float: left; }
    .price-option .price-header { overflow: auto; }
    .price-option .price-header .price, 
    .price-option .price-header .store { font-size: 1.813em; }
        .price-option .price-header .store a { color: #4b4b4b; }
        .shop-more .button { margin: 12px 0;}
    .price-option .price-header .store span.branch { font-size: 0.75em; }
    .price-option .price.impt { font-weight: 400; }
    .price-option .freebie span {
        display: block;
        border-top: 1px dotted #ccc;
        padding: 12px;
        margin: 12px 0;
    }
    .price-option .ugc-info { font-size: 0.875em; float: left; color: #999; padding-left: 12px; }
    .price-option .shop-more { padding-left: 12px; }
    .price-option .price-details { display: block; }
    .price-option .viewmore {
        margin-right: 12px;
        position: relative;
        top: 4px;
        float: left;
    }

    a.view-all { 
        display: block;
        color: #000;
        font-weight: 900;
        padding: 12px;
        border: 3px solid #4d4d4d;
        margin: 12px 0 24px 0;
    }
        a.view-all:hover { 
            background: #000;
            color: #fff;
        }

    #item-description {
        -webkit-transition: all 0.5s ease-in;  
        -moz-transition: all 0.5s ease-in;  
        -o-transition: all 0.5s ease-in; 
        transition: all 0.5s ease-in;
        margin-bottom: 24px;
    }
    #item-description a { color: #6fb7b7; border-bottom: 1px solid #f7f7f7; }
    #item-description a:hover { color:#208787; }
    #item-description.read-more { 
        height: 181px;
        overflow: hidden; 
        margin: 0 0 24px 0;
        padding: 0 0 48px 0;
        position: relative;
    }
    #item-description.read-more p { z-index: -1; }
    #item-description .more-link { position: absolute; top: 100px; width: 100%;
        -webkit-transition: all 0.5s ease-in;  
        -moz-transition: all 0.5s ease-in;  
        -o-transition: all 0.5s ease-in; 
        transition: all 0.5s ease-in; }
    #item-description .more-link a { display: block; background: url('img/readmore.png') bottom center repeat-x; width: 100%; height: 100px; color: #000;
        font-weight: 900;
        text-align: center; text-transform: uppercase;
        letter-spacing: 1px; 
        padding-top: 35px; 
    }  
        .more-link a span { 
            background: #f2f2f2; 
            padding: 12px;
            border-bottom: 2px solid #ccc;
        }
        .more-link a:hover span { box-shadow: 0 -2px 4px rgba(0,0,0,0.2);}

    .product-detail .social { 
        border-top: 2px solid #3b3b3b;
        border-bottom: 1px solid #3b3b3b;
        padding: 12px; 
        text-align: center;
    }
    .personal ul { margin: 0; }
    .personal ul li { 
        list-style-type: none;
        padding: 0;
        font-size: 1.25em;
    }
    .personal ul li a { display: block; padding: 12px 12px 12px 56px; color: #3b3b3b; border-bottom: 1px solid #ccc;  }
        .personal ul li a:hover { background-color: #d0eaea; border-color: #6fb7b7; }
    .personal ul li a.alerts { background: #299b9b; color: #fff; text-align: center; padding: 12px; }
    .personal ul li a.list-want { background: url('img/icon-lists@2x.png') 12px 8px no-repeat #fff; background-size: 25px;}
    .personal ul li a.list-bought { background: url('img/icon-lists@2x.png') 12px -36px no-repeat #fff; background-size: 25px;}
    .product-comments{border-top: 2px solid #3b3b3b; }

    #related-products {
        width: 100%;
        background: #333;
        padding: 24px 16px;
        overflow: auto; 
    }
        #related-products #container { margin: auto; }
        #related-products #container .item { width: 280px; margin: 10px; }

</style>

<div id="content" class="product-detail">

    <div class="row">
        <div class="twelve columns">
        <!-- CRUMBS NAVIGATION: so people know where they are -->
            <nav id="crumbs">
                <a href="#" class="home">Home</a> &rsaquo; 
                    <a href="#" class="current-page">iPhone 4s 32gb Black</a>
            </nav>

            <header class="single-header page-header product-header group">
                <h2 class="left">iPhone 4s 32gb Black </h2>
                <div class="right group">
                    <div class="price-range left">
                        <span class="impt">P 27,800</span> - P 33,500
                    </div>
                    <div class="price-saved right">
                        22% <br />
                        difference
                    </div> 
                </div>
            </header>

            <div class="row">
                <div class="four columns">
                    <div id="item-info">
                        <img id="item-thumbnail" src="img/sample_iphone4sblack.png">
                    </div><!-- item info -->

                    <div class="social">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        <fb:like send="true" layout="button_count" width="160" show_faces="false"></fb:like>
                    </div>

                </div>

                <div class="eight columns mtop">
                    <article id="item-description">
                        <p>The thinnest and lightest iPhone ever, completely redesigned to feature a stunning new 4-inch Retina display; an Apple-designed A6 chip for blazing fast performance; and ultrafast wireless technology—all while delivering even better battery life.</p>
                        <p><a href="http://www.apple.com/pr/products/iphone/iphone.html">http://www.apple.com/pr/products/iphone/iphone.html</a></p>
                        <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. </p>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla.</p>
                        <div class="more-link"><a href="#"><span>Read More</span></a></div>
                    </article>

                <section class="group">
                    <header class="group">
                        <h2 class="left">Price Options</h2> 
                        <!-- 
                        <a href="#" class="view-all right open">Hide Details</a>
                        -->
                    </header>
                        <ol id="price-list" class="nolist group">

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱24,500.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Widget City Gadgets</a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱39,950.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Accent Micro/SM City Marikina<br>
                                        <span class="branch">2/L Cyberzone SM Southmall</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱24,500.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Widget City Gadgets</a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱39,950.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Accent Micro/SM City Marikina<br>
                                        <span class="branch">2/L Cyberzone SM Southmall</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱24,500.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Widget City Gadgets</a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱39,950.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Accent Micro/SM City Marikina<br>
                                        <span class="branch">2/L Cyberzone SM Southmall</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱24,500.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Widget City Gadgets</a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="group price-option">
                                <div class="price-header">
                                    <div class="price detail-price impt innercol">
                                        <a href="option detail page.php">₱39,950.00</a>
                                    </div>
                                    <div class="store innercol">
                                        <a href="store page.php">Accent Micro/SM City Marikina<br>
                                        <span class="branch">2/L Cyberzone SM Southmall</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="group price-details open">
                                    <div class="ugc-info">
                                        last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                    </div>
                                </div>
                            </li>

                        </ol>
                </section>

                <!-- tags -->
                <section class="tags-box group">
                    <h3>tags</h3>
                        <ul id="item-tags" class="list-nav">
                            <li><a href="#">mobile</a></li>
                            <li><a href="#">phones</a></li>
                            <li><a href="#">apple</a></li>
                            <li><a href="#">iphone</a></li>
                            <li><a href="#">mobile</a></li>
                            <li><a href="#">phones</a></li>
                            <li><a href="#">apple</a></li>
                            <li><a href="#">iphone</a></li>
                        </ul>
                </section>

                </div><!-- item -->
                
            </div><!-- row -->

        </div><!-- group -->

    </div><!-- row -->

    <?php require_once('widgets/pdp-addprices.php'); ?>

</div><!-- content -->



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=332386333535453";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php require_once('footer.php'); ?>