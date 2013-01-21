<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<style type="text/css">
/* shop column width different without freebie column */

    .price-option .option-col { width: 42%; }
    .price-option .option-col.shop { width: 54%;}

    .detail-shop, .detail-area { display: block; }
    .price-option a:hover { text-decoration: underline; } 
    .price-option .detail-price, .price-option .detail-shop { font-size: 1.813em; font-weight: 400; }
        .price-option .price-header .store a { color: #4b4b4b; }
    .price-option .price-header .store span.branch { font-size: 0.75em; }
    .price-option .detail-price.impt { font-weight: 400; }
    .detail-author { font-size: 0.813em; padding-top: 24px;}
    .price-option .freebie span {
        display: block;
        border-top: 1px dotted #ccc;
        padding: 12px;
        margin: 12px 0;
    }
    .price-option .ugc-info { font-size: 0.875em; float: right; }
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

            <h2 class="single-header">iPhone 4s 32gb Black</h2>

            <div class="row">
                <div class="four columns">
                    <div id="item-info">
                        <img id="item-thumbnail" src="img/sample_iphone4sblack.png">
                        
                        <p>
                            from <span class="impt">P 27,800</span><br>
                            to <strong>P 33,500</strong> out of 4 options
                        </p>
                    </div><!-- item info -->

                    <div class="social">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        <fb:like send="true" layout="button_count" width="160" show_faces="false"></fb:like>
                    </div>

                    <div class="personal">
                        <ul>
                            <li>
                                <a href="#" class="alerts">Subscribe to <strong>Price Alerts</strong></a>
                            </li>
                            <li>
                                <a href="#" class="list-want">Add to <strong>Want List</strong></a>
                            </li>
                            <li>
                                <a href="#" class="list-bought">Add to <strong>Bought List</strong></a>
                            </li>
                        </ul>
                    </div>

                    <div class="product-comments">

                        <h3 class="mobile-hidden-header"><span class="mobile-visible">View </span> Comments <span class="arrow"></span></h3>

                        <div class="comments mobile-hide">
                            PRODUCT COMMENTS HERE
                        </div>

                    </div><!-- product comments -->


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
                        <div class="list-options right">

                        </div>
                    </header>


                    <ol id="price-list" class="nolist">

                        <li class="group price-option">
                            
                            <div class="innercol option-col left price">
                                <span class="detail-price impt"><a href="#option-detail">₱42,150.00</a></span>

                                <div class="detail-author">added by <strong>GangstaGuy</strong><br>
                                <span class="post-date"><a href="#option-detail">Oct. 25, 2011, 3:22 p.m.</a></div>
                            </div>

                            <!-- 
                            <div class="innercol option-col left more-info">
                                <p>Comes with free silicon case.</p>
                            </div>
                            -->

                            <div itemprop="seller" itemscope itemtype="http://data-vocabulary.org/Organization" class="innercol option-col lastcol left shop">
                                
                                <a href="store page.php">
                                <span itemprop="name" class="detail-shop">Beeper City</span>
                                <span itemprop="address" class="detail-area">
                                3rd Floor Virra Mall Complex
                                 </span>
                                </a>
                                
                                <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                <span class="button radius">store details</span>
                                </a>
                                
                            </div>
                        </li>

                        <li class="group price-option">
                            
                            <div class="innercol option-col left price">
                                <span class="detail-price impt"><a href="#option-detail">₱34,900.00</a></span>

                                <div class="detail-author">added by <strong>GangstaGuy</strong><br>
                                <span class="post-date"><a href="#option-detail">Oct. 25, 2011, 3:22 p.m.</a></div>
                            </div>
                            
                            <div itemprop="seller" itemscope itemtype="http://data-vocabulary.org/Organization" class="innercol option-col lastcol left shop">
                                
                                <a href="store page.php">
                                <span itemprop="name" class="detail-shop">BABC Store/V-Mall</span>
                                </a>
                                
                                <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                <span class="button radius">store details</span>
                                </a>
                                
                            </div>
                        </li>

                        <li class="group price-option">
                            
                            <div class="innercol option-col left price">
                                <span class="detail-price impt"><a href="#option-detail">₱34,100.00</a></span>

                                <div class="detail-author">added by <strong>GangstaGuy</strong><br>
                                <span class="post-date"><a href="#option-detail">Oct. 25, 2011, 3:22 p.m.</a></div>
                            </div>
                            
                            <div itemprop="seller" itemscope itemtype="http://data-vocabulary.org/Organization" class="innercol option-col lastcol left shop">
                                
                                <a href="store page.php">
                                <span itemprop="name" class="detail-shop">Compex/Festival Mall</span>
                                </a>
                                
                                <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                <span class="button radius">store details</span>
                                </a>
                                
                            </div>
                        </li>

                        <li class="group price-option">
                            
                            <div class="innercol option-col left price">
                                <span class="detail-price impt"><a href="#option-detail">₱32,500.00</a></span>

                                <div class="detail-author">added by <strong>GangstaGuy</strong><br>
                                <span class="post-date"><a href="#option-detail">Oct. 25, 2011, 3:22 p.m.</a></div>
                            </div>
                            
                            <div itemprop="seller" itemscope itemtype="http://data-vocabulary.org/Organization" class="innercol option-col lastcol left shop">
                                
                                <a href="store page.php">
                                <span itemprop="name" class="detail-shop">Premium Logic Computers</span>
                                </a>
                                
                                <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                <span class="button radius">store details</span>
                                </a>
                                
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


    <div id="related-products" class="row">
        <div class="twelve columns">
            <h2>Related Products</h2>

            <?php require_once('widgets/pdp-related-products.php'); ?>
        </div>
    </div>

</div><!-- content -->


<div id="mapModal" class="reveal-modal twelve columns">
    <div class="row">
        <div class="twelve columns">
            <a href="#link-to-store"><h2 class="single-header">Gaisano Interpace</h2></a>
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <article class="branch-address">
                Unit B, Gilmore Commercial Plaza<br>
                Gilmore Ave. cor Aurora Blvd<br>
                New Manila, Quezon City
            </article>
            
            <article class="branch-contact">
                <ul class="nolist">
                    <li><span class="telefax-label">Telefax #</span>
                        <span class="telefax-number">(+63) 2 721-89-09</span></li>
                    <li> <span class="phone-number">(+63) 2 721-91-09</span></li>
                    <li><span class="mobile-label">Mobile #</span>
                        <span class="mobile-number">(+63) 917 716-76-16</span></li>
                 </ul>
            </article>
        </div>

        <div class="six columns">
            <h3>How do I get there?</h3>
            <div id="map-directions">
                <label for="">Start Address (e.g. 123 Main St.)</label>
                <input type="text" id="" name="" placeholder="">
                <label for="">End: <a href="#">Gaisano Interpace</a></label>
                <input type="text" id="pointID" class="left pointB" name="" placeholder="" value="Unit B, Gilmore Commercial Plaza, Gilmore Ave.">
                <input type="submit" class="button radius" value="Get Directions">
            </div><!-- #map-directions -->
        </div>
    </div>
    <!-- map -->
        <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

    <a class="close-reveal-modal">×</a>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=332386333535453";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php require_once('footer.php'); ?>