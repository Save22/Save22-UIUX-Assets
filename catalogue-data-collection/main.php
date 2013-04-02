<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li class="current"><a href="main.php">Home</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>List of Catalogues</h2>

          <form>
            <div class="row">
              <div class="large-8 columns">
                <div class="row collapse">
                  <div class="small-10 columns">
                    <input type="text" placeholder="Find a catalogue title, brand, or location">
                  </div>
                  <div class="small-2 columns">
                    <a href="#" class="button prefix">Search</a>
                  </div>
                </div>
              </div>
              <div class="large-4 columns">
                <a href="add-catalogue.php" class="small button" style="float: right;">Add a Catalogue</a>
              </div>
            </div>
          </form>

          
        </header>

        <table style="width: 100%;">
          <thead>
            <tr>
              <th width="30">ID</th>
              <th>Catalogue Name</th>
              <th width="120">Creation Date</th>
              <th width="120">Expiry Date</th>
              <th width="120">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><a href="view-catalogue.php">SM Hypermart July 2013</a></td>
              <td>5 days ago</td>
              <td>4-30-2013</td>
              <td>active</td>
            </tr>
            <tr>
              <td>2</td>
              <td><a href="view-catalogue.php">SM Hypermart June 2013</a></td>
              <td>30 days ago</td>
              <td>4-30-2013</td>
              <td>active</td>
            </tr>
            <tr>
              <td>3</td>
              <td><a href="view-catalogue.php">SM Hypermart May 2013</a></td>
              <td>5-1-2013</td>
              <td>4-30-2013</td>
              <td>removed</td>
            </tr>
          </tbody>
        </table>

      </section>

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
    </div>
  </div>
  

<?php include('footer.php'); ?>