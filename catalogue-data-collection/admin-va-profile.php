<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li><a href="admin-va-reports.php">VA Reports</a></li>
      <li class="current"><a href="admin-va-profile.php">VA Profile</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <div class="section-container auto" data-section data-options="deep_linking: true">
        <section>
          <p class="title" data-section-title><a href="#info">Info</a></p>
          <div class="content" data-section-content data-slug="info">
            <section>
              <form>
                <div class="row">
                  <div class="small-3 columns">
                    <label for="va-name" class="right inline">Name</label>
                  </div>
                  <div class="small-9 columns">
                    <input type="text" id="va-name" placeholder="Name" value="">
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="small-3 columns">
                    <label class="right inline">Date Hired</label>
                  </div>
                  <div class="small-9 columns">
                    July 5, 2013
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="small-3 columns">
                    <label for="right-label" class="right inline">Status</label>
                  </div>
                  <div class="small-9 columns">
                    <select>
                      <option>- Select -</option>
                      <option selected>hired</option>
                      <option>quit</option>
                    </select>
                  </div>
                </div><!-- row -->

              </form>

            </section>
            <hr>
            <section>
              <h3 class="inline left">Catalogs Created &nbsp; </h3> 
              <a href="#" class="button dropdown inline" data-dropdown="catalogs-created"><span class="result">total of 5</span></a>

              <ul id="catalogs-created" class="f-dropdown">
                <li>From <input type="text" placeholder="Date from" id="datepicker1"></li>
                <li>Until <input type="text" placeholder="Date until" id="datepicker2"></li>
              </ul>

              <div class="results-table results-catalogs-created">
                <table style="width: 100%;">
                  <thead>
                    <tr>
                      <th>Catalog Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <hr>
            <section>
              <h3 class="inline left">Pages Uploaded &nbsp; </h3>
              <a href="#" class="button dropdown inline" data-dropdown="pages-uploaded"><span class="result">total of 5</span></a>
              
              <ul id="pages-uploaded" class="f-dropdown">
                <li>From <input type="text" placeholder="Date from" id="datepicker3"></li>
                <li>Until <input type="text" placeholder="Date until" id="datepicker4"></li>
              </ul>

              <div class="results-table results-pages-uploaded">
                <table style="width: 100%;">
                  <thead>
                    <tr>
                      <th>Catalog Name</th>
                      <th width="120"># of Pages</th>
                      <th width="120">Cost</th>
                      <th width="180">Date Edited</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 5 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 5 </td>
                      <td> PhP 100.00 </td>
                      <td> July 11, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 1 </td>
                      <td> PhP 10.00 </td>
                      <td> July 10, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 5 </td>
                      <td> PhP 100.00 </td>
                      <td> July 9, 2013 </td>
                    </tr>
                  </tbody>
                </table>

                <!-- COMPUTE TOTAL -->
                <table style="width: 100%;" class="total">
                  <thead>
                    <tr>
                      <th>TOTAL</th>
                      <th width="120"># of Pages</th>
                      <th width="120">Total Cost</th>
                      <th width="180">Date Range</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> </td>
                      <td> 16 </td>
                      <td> PhP 310.00 </td>
                      <td> <span class="starting-date">July 9, 2012</span> - <span class="end-date">July 12, 2012</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
            <hr>
            <section>
              <h3 class="inline left">Keywords Added &nbsp; </h3>
              <a href="#" class="button dropdown inline" data-dropdown="keywords-added"><span class="result">total of 1,450,235</span></a>
              
              <ul id="keywords-added" class="f-dropdown">
                <li>From <input type="text" placeholder="Date from" id="datepicker5"></li>
                <li>Until <input type="text" placeholder="Date until" id="datepicker6"></li>
              </ul>

              <div class="results-table results-pages-uploaded">
                <table style="width: 100%;">
                  <thead>
                    <tr>
                      <th>Catalog Name</th>
                      <th width="80">Page #</th>
                      <th width="120">Keyword Count</th>
                      <th width="120">Cost</th>
                      <th width="180">Date Edited</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 5 </td>
                      <td> 250 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 4 </td>
                      <td> 250 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 3 </td>
                      <td> 250 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 2 </td>
                      <td> 250 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                    <tr>
                      <td><a href="view-catalogue.php">Catalog Name</a></td>
                      <td> 5 </td>
                      <td> 250 </td>
                      <td> PhP 100.00 </td>
                      <td> July 12, 2013 </td>
                    </tr>
                  </tbody>
                </table>

                <!-- COMPUTE TOTAL -->
                <table style="width: 100%;" class="total">
                  <thead>
                    <tr>
                      <th>Catalog Name</th>
                      <th width="80">Page #</th>
                      <th width="120">Keyword Count</th>
                      <th width="120">Cost</th>
                      <th width="180">Date Range</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> </td>
                      <td> 5 </td>
                      <td> 1,250 </td>
                      <td> PhP 500.00 </td>
                      <td> <span class="starting-date">July 9, 2012</span> - <span class="end-date">July 12, 2012</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </section>
          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#activities">Activities</a></p>
          <div class="content" data-section-content data-slug="activities">

              <header>
                <h2>Activities</h2>

                <form>
                  <div class="row">
                    <div class="small-12 columns">
                      <h4 class="inline left label">Filter by &nbsp; </h4>
                      <div class="button-bar va-filter">
                        <ul class="button-group">
                          <li><a href="#" class="small button secondary dropdown" data-dropdown="date-range">Date range</a></li>
                        </ul>

                        <ul class="button-group">
                          <li><a href="#" class="small button secondary">Uploaded Pages</a></li>
                          <li><a href="#" class="small button secondary">Added Keywords</a></li>
                          <li><a href="#" class="small button secondary">Catalogues Created</a></li>
                        </ul>

                        <ul id="date-range" class="f-dropdown">
                          <li>From <input type="text" placeholder="Date from" id="datepicker1"></li>
                          <li>Until <input type="text" placeholder="Date until" id="datepicker2"></li>
                        </ul>

                    </div>
                  </div>
                </form>
                
              </header>


            <ul class="list-history">
              <li class="item-history">
                Uploaded 1 page to <a href="view-catalogue.php" class="cat-name" data-tooltip class="has-tip" title="pages added: 1 = PhP 100">Name of Catalog</a>  <small class="date-history">- June 8, 2013</small>
              </li>
              <li class="item-history">
                Uploaded 12 pages to <a href="view-catalogue.php" class="cat-name" data-tooltip class="has-tip" title="pages added: 12 = PhP 1200">Name of Catalog</a>  <small class="date-history">- June 7, 2013</small>
              </li>
              <li class="item-history">
                Deleted 1 page from <a href="view-catalogue.php" class="cat-name">Name of Catalog</a>  <small class="date-history">- June 6, 2013</small>
              </li>
              <li class="item-history">
                200 keywords added to <a href="view-catalogue.php" class="cat-name" data-tooltip class="has-tip" title="keywords added: 200 = PhP 100">Name of Catalog</a> on page 5  <small class="date-history">- June 6, 2013</small>
              </li>
              <li class="item-history">
                200 keywords added to <a href="view-catalogue.php" class="cat-name" data-tooltip class="has-tip" title="keywords added: 200 = PhP 100">Name of Catalog</a> on page 4  <small class="date-history">- June 6, 2013</small>
              </li>
              <li class="item-history">
                200 keywords added to <a href="view-catalogue.php" class="cat-name" data-tooltip class="has-tip" title="keywords added: 200 = PhP 100">Name of Catalog</a> on page 3 <small class="date-history"> - June 6, 2013</small>
              </li>
              <li class="item-history">
                <a href="view-catalogue.php">Name of Catalog</a> created - June 5, 2013</small>
              </li>
            </ul>
          </div>
        </section>
      </div>

    </div>
  </div>


  <!-- JS FOR CALENDAR / https://github.com/dbushell/Pikaday -->
  <script src="js/pikaday.js"></script>
  <script>

    var picker1 = new Pikaday(
    {
        field: document.getElementById('datepicker1'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });
    var picker2 = new Pikaday(
    {
        field: document.getElementById('datepicker2'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });
    var picker3 = new Pikaday(
    {
        field: document.getElementById('datepicker3'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });
    var picker4 = new Pikaday(
    {
        field: document.getElementById('datepicker4'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });
    var picker5 = new Pikaday(
    {
        field: document.getElementById('datepicker5'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });
    var picker6 = new Pikaday(
    {
        field: document.getElementById('datepicker6'),
        format: 'D MMM YYYY',
        firstDay: 1,
        minDate: new Date('2013-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2013,2020]
    });

  </script>


<?php include('footer.php'); ?>