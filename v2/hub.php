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

                <div class="group">

                    <ul class="pagination">
                      <li class="arrow unavailable"><a href="">&laquo;</a></li>
                      <li class="current"><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li class="unavailable"><a href="">&hellip;</a></li>
                      <li><a href="">12</a></li>
                      <li><a href="">13</a></li>
                      <li class="arrow"><a href="">&raquo;</a></li>
                    </ul>

                </div>

            </div><!-- ninecol group -->

            <div class="three columns" id="sidebar">

                <?php require_once('widgets/intro-widget.php'); ?>
                <?php require_once('widgets/fb-widget.php'); ?>

            </div> <!-- sidebar -->
    </div><!-- row -->
</div><!-- content -->


<?php require_once('footer.php'); ?>