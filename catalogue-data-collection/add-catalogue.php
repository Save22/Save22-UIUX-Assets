<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li class="current"><a href="add-catalogue">Add a Catalogue</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <section>
        <header>
          <h2>Add a Catalogue</h2>
        </header>

        <form>
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Catalogue Title</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Title">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Category</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Category">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Retailer</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Retailer Name">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="right-label" class="right inline">Branch</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="right-label" placeholder="Branch Location">
              <a href="#" class="button small radius secondary">add another branch</a>
              <a href="#" class="button small radius secondary" data-reveal-id="newBranch">create new branch</a>
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <input type="submit" value="Add New Catalogue" class="button centered expand">
            </div>
          </div>
        </form>

      </section>

    </div>
  </div>
  

  <div id="newBranch" class="reveal-modal large">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Create a new Branch</h2>

        <form class="custom">
          <div class="row">
            <div class="small-3 columns">
              <label for="branchTitle" class="right inline">Branch Title</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchTitle" placeholder="Title">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchTel" class="right inline">Contact No.</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchTel" placeholder="Telephone Number">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchEmail" class="right inline">Contact Email</label>
            </div>
            <div class="small-9 columns">
              <input type="email" id="branchEmail" placeholder="Email">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchURL" class="right inline">URL</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchURL" placeholder="http://">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchDesc" class="right inline">Description</label>
            </div>
            <div class="small-9 columns">
              <textarea id="branchDesc"></textarea>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="meta_branchDesc" class="right inline">Meta Description</label>
            </div>
            <div class="small-9 columns">
              <textarea id="meta_branchDesc"></textarea>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchBanner" class="right inline">Image Banner</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchBanner" placeholder="http://">
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-3 columns">
              <label for="branchHours" class="right inline">Office Hours</label>
            </div>
            <div class="small-9 columns">
              <input type="text" id="branchHours" placeholder="Ex: 10am - 11pm">
            </div>
          </div><!-- row -->
          <div class="row">
            <div class="small-3 columns">
              <label for="branchPayOptions" class="right inline">Payment Options</label>
            </div>
            <div class="small-9 columns">
              <label for="checkbox1"><input type="checkbox" id="checkbox1" CHECKED><span class="custom checkbox"></span> Cash</label>
              <label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> Debit</label>
              <label for="checkbox2"><input type="checkbox" id="checkbox2"><span class="custom checkbox checked"></span> Visa</label>
              <label for="checkbox3"><input type="checkbox" id="checkbox3"><span class="custom checkbox checked"></span> MasterCard</label>
            </div>
          </div><!-- row -->

          <div class="row">
            <div class="small-12 large-3 large-centered columns">
              <br><br>
              <input type="submit" value="Add New Branch" class="button centered expand">
            </div>
          </div>
        </form>

  </div>


  <script src="js/pikaday.js"></script>
  <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });

  </script>

<?php include('footer.php'); ?>