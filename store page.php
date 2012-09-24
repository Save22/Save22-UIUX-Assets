<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<div id="content" class="store">
        <div class="row">
            <div class="nine columns">

                <!-- CRUMBS NAVIGATION: so people know where they are -->
                <nav id="crumbs">
                    <a href="#" class="home">Home</a> &rsaquo; 
                    <a href="#">Stores</a> &rsaquo; 
                    <a href="#" class="current-page">Gaisano Interpace, Gilmore, QC</a>
                </nav>

                <section class="group mtop row">
                    <div class="six columns innercol">
                        <h2 class="store-name">Gaisano Interpace</h2>
                        <h3 class="branch-name">Gilmore, QC</h3>

                        <article class="branch-address mtop">
                            Unit B, Gilmore Commercial Plaza<br>
                            Gilmore Ave. cor Aurora Blvd<br>
                            New Manila, Quezon City
                        </article>
                        <article class="branch-contact mtop">
                            <ul class="nolist">
                                <li><span class="telefax-label">Telefax #</span>
                                <span class="telefax-number">(+63) 2 721-89-09</span></li>
                                <li> <span class="phone-number">(+63) 2 721-91-09</span></li>
                                <li><span class="mobile-label">Mobile #</span>
                                    <span class="mobile-number">(+63) 917 716-76-16</span></li>
                            </ul>
                            <p class="branch-hours mtop">Weekdays: 8am to 9pm<br>
                                Weekends: 9am to 10pm</p>
                        </article>
                        <article class="branch-list">
                            Branches: 
                            <ul>
                                <li><a href="#">Gilmore, Quezon City</a></li>
                                <li><a href="#">Gaisano City Mall, CDO</a></li>
                                <li><a href="#">Limketkai Center, CDO</a></li>
                                <li><a href="#">Hernan Cortez, Cebu</a></li>
                                <li><a href="#">Gaisano Country Mall, Cebu</a></li>
                            </ul>
                        </article>
                    </div><!-- group -->

                    <div class="six columns innercol">
                        <div id="map">
                            <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Gaisano+Interpace+Computer+System+-+Gilmore,+Quezon+City,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=Gaisano+I&amp;sll=14.614196,121.034451&amp;sspn=0.014576,0.022702&amp;ie=UTF8&amp;hq=Gaisano+Interpace+Computer+System+-&amp;hnear=Gilmore,+Novaliches,+Quezon+City,+Metro+Manila,+Philippines&amp;t=m&amp;ll=14.657997,121.031914&amp;spn=0.159431,0.219727&amp;z=12&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                        </div>
                    </div><!-- group -->
                </section>

                <section class="group block mtop">
                    <div class="group store-header">
                        <h2 class="single-header left innercol">Featured Products</h2>
                        <a href="#" class="right button red-button radius innercol">See all products</a>
                    </div>

                    <?php require_once('widgets/featured-gadgets.php'); ?>
                </section>

            </div>

            <div class="three columns" id="sidebar">

                <?php require_once('widgets/intro-widget.php'); ?>

                <?php require_once('widgets/top-contributors.php'); ?>

                <?php require_once('widgets/fb-widget.php'); ?>

            </div> <!-- sidebar -->

        </div>
</div>


<?php require_once('footer.php'); ?>