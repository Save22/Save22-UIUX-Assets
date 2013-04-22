<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li class="current"><a href="admin-retailers.php">Retailers</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>List of Retailers</h2>

          <form>
            <div class="row">
              <div class="large-8 columns">
                <div class="row collapse">
                  <div class="small-10 columns">
                    <input type="text" placeholder="Find a retailer by name">
                  </div>
                  <div class="small-2 columns">
                    <a href="#" class="button prefix">Search</a>
                  </div>
                </div>
              </div>
              <div class="large-4 columns">
                <a href="admin-add-retailer.php" class="small button" style="float: right;">Add a Retailer</a>
              </div>
            </div>
          </form>

          
        </header>

        <table style="width: 100%;">
          <thead>
            <tr>
              <th width="30">ID</th>
              <th>Retailer Name</th>
              <th width="120">Created Time</th>
              <th width="150">Branches</th>
              <th width="120">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>4-30-2013</td>
              <td><a href="admin-view-retailer.php#branches">View Branches</a></td>
              <td>
                <a href="admin-view-retailer.php" class="tiny button inline">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>4-30-2013</td>
              <td><a href="admin-view-retailer.php#branches">View Branches</a></td>
              <td>
                <a href="admin-view-retailer.php" class="tiny button inline">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>4-30-2013</td>
              <td><a href="admin-view-retailer.php#branches">View Branches</a></td>
              <td>
                <a href="admin-view-retailer.php" class="tiny button inline">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>4-30-2013</td>
              <td><a href="admin-view-retailer.php#branches">View Branches</a></td>
              <td>
                <a href="admin-view-retailer.php" class="tiny button inline">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>4-30-2013</td>
              <td><a href="admin-view-retailer.php#branches">View Branches</a></td>
              <td>
                <a href="admin-view-retailer.php" class="tiny button inline">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
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

  <div id="deleteModal" class="reveal-modal medium">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Delete this retailer?</h2>
    <p class="lead">You are deleting: <strong>SM Hypermart</strong></p>
    <p>This action cannot be undone!</p>
    <div class="row">
      <div class="small-6 columns">
        <a href="#" class="button expand">Delete!</a>
      </div>
      <div class="small-6 columns">
        <a href="#" class="button alert expand close-reveal-modal">Cancel</a>
      </div>
    </div>
  </div>
  

<?php include('footer.php'); ?>