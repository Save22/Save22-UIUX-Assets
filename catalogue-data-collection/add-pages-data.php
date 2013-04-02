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

        <div class="row">
          <div class="small-12 large-12 large-centered small-centered columns">
            <a class="th radius" href="img/sample-page.jpg" target="_blank">
              <img src="img/sample-page.jpg" alt="">
            </a>
          </div>
        </div>

        <br><br>

        <form>
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Keywords</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Tags">
              * separate keywords with spaces<br><br>
            </div>
          </div><!-- row -->


          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Save" class="button centered expand">
            </div>
          </div>
        </form>

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