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
    .price-option .price-header .store span.branch { font-size: 0.75em; }
    .price-option .price.impt { font-weight: 400; }
    .price-option .freebie span {
        display: block;
        border-top: 1px dotted #ccc;
        padding: 12px;
        margin: 12px 0;
    }
    .price-option .ugc-info { font-size: 0.875em; float: right; }
    .price-option .shop-more { padding-left: 12px; }
    .price-option .price-details { display: none; }
    .price-option .viewmore {
        margin-right: 12px;
        position: relative;
        top: 8px;
    }

    .view-all { 
        display: block;
        color: #000;
        font-weight: 900;
        padding: 12px;
        border: 3px solid #4d4d4d;
        margin: 12px 0 24px 0;
    }
        .view-all:hover { 
            background: #000;
            color: #fff;
        }
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

                    <div class="product-comments">

                        <h3 class="mobile-hidden-header"><span class="mobile-visible">View </span> Comments <span class="arrow"></span></h3>

                        <div class="comments mobile-hide">
                            PRODUCT COMMENTS HERE
                        </div>
                    </div>
                </div>

                <div class="eight columns mtop">
                    <article id="item-description">
                        <p>The thinnest and lightest iPhone ever, completely redesigned to feature a stunning new 4-inch Retina display; an Apple-designed A6 chip for blazing fast performance; and ultrafast wireless technology—all while delivering even better battery life.</p>
                        <p><a href="http://www.apple.com/pr/products/iphone/iphone.html">http://www.apple.com/pr/products/iphone/iphone.html</a></p>
                    </article>

            <section class="group">
                <header class="group">
                    <h2 class="left">Price Options</h2> 
                    <a href="#" class="view-all right">Show All Details</a>
                </header>
                    <ol id="price-list" class="nolist group">

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>

                                    <a href="option detail page.php">₱24,500.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php">Widget City Gadgets</a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    <span>Comes with free silicon case.</span>
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>

                                <div class="ugc-info">
                                    last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>
                                    <a href="option detail page.php">₱39,950.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php"> Accent Micro/SM City Marikina<br>
                                    <span class="branch">2/L Cyberzone SM Southmall</span>
                                    </a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    &nbsp;
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>
                                
                                <div class="ugc-info">
                                    last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>

                                    <a href="option detail page.php">₱24,500.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php">Widget City Gadgets</a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    <span>Comes with free silicon case.</span>
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>

                                <div class="ugc-info">
                                    last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>
                                    <a href="option detail page.php">₱39,950.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php"> Accent Micro/SM City Marikina<br>
                                    <span class="branch">2/L Cyberzone SM Southmall</span>
                                    </a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    &nbsp;
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>
                                
                                <div class="ugc-info">
                                    last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>

                                    <a href="option detail page.php">₱24,500.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php">Widget City Gadgets</a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    <span>Comes with free silicon case.</span>
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>

                                <div class="ugc-info">
                                    last updated by <span class="detail-author"><strong>fiddo</strong></span> <span class="timestamp">3 days ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="group price-option">
                            <div class="price-header">
                                <div class="price detail-price impt innercol">
                                    <a href="#"><img src="img/pricelist-arrow-down@2x.png" width="35" height="35" class="viewmore" alt="View Details" title="View Details"></a>
                                    <a href="option detail page.php">₱39,950.00</a>
                                </div>
                                <div class="store innercol">
                                    <a href="store page.php"> Accent Micro/SM City Marikina<br>
                                    <span class="branch">2/L Cyberzone SM Southmall</span>
                                    </a>
                                </div>
                            </div>
                            <div class="group price-details">
                                <div class="freebie">
                                    &nbsp;
                                </div>
                                <div class="shop-more">

                                    <a href="#"  data-reveal-id="mapModal" class="store-details" onclick="initialize();">
                                    <span class="button radius">store details</span>
                                </a>
                                
                                </div>
                                
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

        </div><!-- ninecol group -->

    </div><!-- row -->

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
        <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

    <a class="close-reveal-modal">×</a>
</div>

<?php require_once('footer.php'); ?>