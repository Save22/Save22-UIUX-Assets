<?php require_once('header-sitewidget.php'); ?>

<div id="content">

        <div class="row">
            <div class="twelve columns">

                <h2 class="single-header page-header no-border-top">Featured Items</h2>

                <!-- ONLY IF RETURNING SEARCH RESULTS --> 
                <!-- <p>Viewing results <strong>1-10</strong> of <strong>24</strong></p> -->

                <?php include_once('widgets/featured-diapers.php'); ?>

            </div>

        </div><!-- row -->
</div><!-- content -->


<?php require_once('widgets/categories.php'); ?>

<?php require_once('footer-sitewidget.php'); ?>
