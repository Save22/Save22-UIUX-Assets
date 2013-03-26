<?php require_once('header.php'); ?>

<div class="group breadcrumbs">
   <ul class="breadcrumbs right">
      <li><a href="#">Home</a></li>
      <li class="current"><a href="#">Admin</a></li>
   </ul>
</div>

<div id="container">
   <div id="wrap" class="wrap">

    <div class="content">

      <dl class="tabs three-up">
        <dd class="active"><a href="#productQueue">Post-Processing Queue</a></dd>
      </dl>

      <ul class="tabs-content contained">
        <li class="active" id="productQueue">

          <form id="queueSearch" class="custom">
            <div class="row collapse">
              <div class="five mobile-three columns">
                <input type="text" placeholder="search for an item" />
              </div>
              <div class="two mobile-one columns">
                <a class="button expand postfix">Search</a>
              </div>
              <div class="mobile-one five columns">
                <ul class="button-group radius right">
                  <li><a href="#" class="button radius">Only SG Prices</a></li>
                  <li><a href="#" class="button radius">Only PH Prices</a></li>
                  <li><a href="#" class="button radius">Show All</a></li>
                </ul>
              </div>
            </div>
          </form>

          <form id="queueList" class="custom">
            <table class="twelve">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Search in ELMO</th>
                  <th class="archive-checkbox"><a href="#">check all</a></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 
                    <h3>Brand + Model # + Size / Type / Color</h3>

                    <div class="product-info">
                      <strong>Retailer:</strong> <a href="#">Branch Name</a><br>
                      <strong>Chunk Name:</strong> <a href="#">Default</a><br>
                      <strong>Chunk Type:</strong> Update<br>
                      <strong>VA Assigned:</strong> test.va 
                    </div>
                  </td>
                  <td>Php 10.00</td>
                  <td><a href="#" class="button radius">Search</a></td>
                  <td class="archive-checkbox"><input type="checkbox" name="archive"><span class="custom checkbox checked"></span> </td>
                </tr>
                <tr>
                  <td> 
                    <h3>Brand + Model # + Size / Type / Color</h3>

                    <div class="product-info">
                      <strong>Retailer:</strong> <a href="#">Branch Name</a><br>
                      <strong>Chunk Name:</strong> <a href="#">Default</a><br>
                      <strong>Chunk Type:</strong> Update<br>
                      <strong>VA Assigned:</strong> test.va 
                    </div>
                  </td>
                  <td>SGD 12.00</td>
                  <td><a href="#" class="button radius">Search</a></td>
                  <td class="archive-checkbox"><input type="checkbox" name="archive"><span class="custom checkbox checked"></span> </td>
                </tr>
                <tr>
                  <td> 
                    <h3>Brand + Model # + Size / Type / Color</h3>

                    <div class="product-info">
                      <strong>Retailer:</strong> <a href="#">Branch Name</a><br>
                      <strong>Chunk Name:</strong> <a href="#">Default</a><br>
                      <strong>Chunk Type:</strong> Update<br>
                      <strong>VA Assigned:</strong> test.va 
                    </div>
                  </td>
                  <td>Php 20.00</td>
                  <td><a href="#" class="button radius">Search</a></td>
                  <td class="archive-checkbox"><input type="checkbox" name="archive"><span class="custom checkbox checked"></span> </td>
                </tr>
              </tbody>
            </table>

          <!-- SHOW 50 items per page -->

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


            <div class="row">
              <input type="submit" value="Marked all checked as done" class="button right">
              <a href="#" class="button right" style="margin-right: 24px;">View Archive</a> 
            </div>
          </form>

        </li>
      </ul>

    </div>

   </div>
</div>

<?php require_once('footer.php'); ?>