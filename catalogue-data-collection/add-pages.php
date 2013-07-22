<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="add-catalogue.php">Add a Catalogue</a></li>
      <li class="current"><a href="#">Catalogue Name</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add Pages to 
            <a href="#link-to-catalogue">*Catalogue Title*</a></h2>
        </header>

        I originally want to implement: <a href="http://blueimp.github.com/jQuery-File-Upload/">http://blueimp.github.com/jQuery-File-Upload/</a>
      </section>

    </div>
  </div>
  
  <div class="row">
    <div class="small-12 large-12 columns">

      <table style="width: 100%;" class="upload-images">
        <thead>
          <tr>
            <th width="120">Page Number</th>
            <th>Image</th>
            <th width="120">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pageno">0 (cover)</td>
            <td><img src="img/sample-page.jpg" alt=""></td>
            <td><a href="#" class="button inline secondary" data-reveal-id="deleteModal">delete</a></td>
          </tr>
          <tr>
            <td class="pageno">1</td>
            <td><img src="img/sample-page.jpg" alt=""></td>
            <td><a href="#" class="button inline secondary" data-reveal-id="deleteModal">delete</a></td>
          </tr>
          <tr>
            <td class="pageno">2</td>
            <td><img src="img/sample-page.jpg" alt=""></td>
            <td><a href="#" class="button inline secondary" data-reveal-id="deleteModal">delete</a></td>
          </tr>
          <tr>
            <td class="pageno">3</td>
            <td><img src="img/sample-page.jpg" alt=""></td>
            <td><a href="#" class="button inline secondary" data-reveal-id="deleteModal">delete</a></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

  <div id="deleteModal" class="reveal-modal small">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Delete page 4?</h2>
    <p><img src="img/sample-page.jpg" alt=""></p>
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