<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="add-catalogue.php">Add a Catalogue</a></li>
      <li><a href="view-catalogue.php">Catalogue Name</a></li>
      <li class="current"><a href="add-pages-data.php">Edit Pages</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add information to page</h2>
        </header>

        <form>
          <div class="row keywords">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Keywords</label>
            </div>
            <div class="small-9 columns">
              <textarea class="input-keywords"></textarea>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-9 small-offset-3 columns">
              <div class="input-alert alert-box success">
                Saved!
              </div>

              <textarea class="input-keywords"></textarea>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-9 small-offset-3 columns">
              <div class="input-alert alert-box alert">
                Deleted!
              </div>

              <textarea class="input-keywords"></textarea>
            </div>
          </div><!-- row -->


        </form>

        <div class="row">
          <div class="small-12 large-12 large-centered small-centered columns">
            <a class="th radius" href="img/sample-page.jpg" target="_blank">
              <img src="img/sample-page.jpg" alt="">
            </a>
          </div>
        </div>

        <br><br>

        <hr>

        <div class="pagination-centered">
          <ul class="pagination">
            <li class="arrow unavailable"><a href="">&laquo; Previous</a></li>
            <li class="current"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="arrow"><a href="">Next &raquo;</a></li>
          </ul>
        </div>

      </section>

    </div>
  </div>
  

<?php include('footer.php'); ?>