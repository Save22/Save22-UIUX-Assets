<?php require_once('header.php'); ?>

<div id="content" class="search">
    <div class="row">

      <div class="three columns">
        <div id="sidebar">
           <?php require_once('widgets/related-products.php'); ?>
        </div>
      </div>
      
      <div class="nine columns">

                <?php require_once('widgets/search-results.php'); ?>

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

    </div><!-- row -->
</div><!-- content -->

<?php require_once('footer.php'); ?>