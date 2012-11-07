<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<div id="content" class="hub">
    <div class="row">
            <div class="nine columns">
                <section>
                    <div id="featured-header" class="block group" style="background:url('img/hub-sample-featured.png');">

                        <div class="intro-copy right relative">
                            The best diaper deals from
                            your favorite stores
                            <a href="#" class="button radius red-button block mtop">Get them now</a>
                        </div>

                    </div>
                </section>

                <?php require_once('widgets/featured-moms.php'); ?>

                <div class="pagination group">
                    <a href="#" class="see-more right">see more products &raquo; </a>
                </div>

            </div><!-- ninecol group -->

            <div class="three columns" id="sidebar">

                <?php require_once('widgets/intro-widget.php'); ?>
                <?php require_once('widgets/fb-widget.php'); ?>

            </div> <!-- sidebar -->
    </div><!-- row -->
</div><!-- content -->


<?php require_once('footer.php'); ?>