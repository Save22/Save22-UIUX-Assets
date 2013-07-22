<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li class="current"><a href="admin-va-reports.php">VA Reports</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <div class="section-container auto" data-section data-options="deep_linking: true">
        <section>
          <p class="title" data-section-title><a href="#catalogues">Recent Catalogues</a></p>
          <div class="content" data-section-content data-slug="catalogues">

            <section>
              <header>
                <div class="row">
                  <div class="small-12 large-6 columns">
                    <h2>Recent Catalogues</h2>
                  </div>
                  <div class="small-12 large-6 columns">
                    <form>
                      <div class="row collapse">
                        <div class="small-8 columns">
                          <input type="text" placeholder="Find a catalogue by title or retailer">
                        </div>
                        <div class="small-4 columns">
                          <a href="#" class="button prefix">Search</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <form>
                  <div class="row">
                    <div class="small-12 columns">
                      <h4 class="inline left">Filter by &nbsp; </h4>
                      <div class="button-bar va-filter">
                        <ul class="button-group">
                          <li><a href="#" class="small button secondary dropdown" data-dropdown="expiry-range">Expiration date range</a></li>
                          <li><a href="#" class="small button dropdown" data-dropdown="upload-range">Upload date range</a></li><!-- remove class secondary if active -->
                          <li><a href="#" class="small button secondary dropdown" data-dropdown="va-uploader">VA - Uploader</a></li>
                          <li><a href="#" class="small button secondary dropdown" data-dropdown="va-keywords">VA - Keywords</a></li>
                        </ul>

                        <ul id="expiry-range" class="f-dropdown">
                          <li>From <input type="text" placeholder="Date from" id="datepicker1"></li>
                          <li>Until <input type="text" placeholder="Date until" id="datepicker2"></li>
                        </ul>
                        <ul id="upload-range" class="f-dropdown">
                          <li>From <input type="text" placeholder="Date from" id="datepicker3"></li>
                          <li>Until <input type="text" placeholder="Date until" id="datepicker4"></li>
                        </ul>
                        <ul id="va-uploader" class="f-dropdown">
                          <li><input type="text" placeholder="Name of VA"></li>
                        </ul>
                        <ul id="va-keywords" class="f-dropdown">
                          <li><input type="text" placeholder="Name of VA"></li>
                        </ul>

                    </div>
                  </div>
                </form>
                
              </header>

              <table style="width: 100%;">
                <thead>
                  <tr>
                    <th width="30">ID</th>
                    <th>Catalogue Name</th>
                    <th width="120">Upload Date</th>
                    <th width="120">Expiry Date</th>
                    <th width="80"># Pages</th>
                    <th width="100"># Keywords</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <section class="info">
                        <p><strong><a href="#link-to-website" target="_blank">SM Hypermart July 2013</a></strong>
                          <a href="view-catalogue.php" class="button small secondary">edit</a><br>
                          <span class="promo-info">uploaded by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="pages added: 1  / PhP 100">name_of_va</a><br>
                          <span class="promo-info">keywords added by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="keywords added: 450  / PhP 100">name_of_va</a>
                        </p>
                      </section>
                    </td>
                    <td>5-8-2013</td>
                    <td>4-30-2013</td>
                    <td>1</td>
                    <td>245</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>
                      <section class="info">
                        <p><strong><a href="#link-to-website" target="_blank">SM Hypermart July 2013</a></strong>
                          <a href="view-catalogue.php" class="button small secondary">edit</a><br>
                          <span class="promo-info">uploaded by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="pages added: 1 / PhP 100">name_of_va</a>, 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="pages added: 2 / PhP 200">second_va</a><br>
                          <span class="promo-info">keywords added by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="keywords added: 450 / PhP 100">name_of_va</a>
                        </p>
                      </section>
                    </td>
                    <td>5-8-2013</td>
                    <td>4-30-2013</td>
                    <td>1</td>
                    <td>245</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>
                      <section class="info">
                        <p><strong><a href="#link-to-website" target="_blank">SM Hypermart July 2013</a></strong>
                          <a href="view-catalogue.php" class="button small secondary">edit</a><br>
                          <span class="promo-info">uploaded by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="pages added: 1  / PhP 100">name_of_va</a><br>
                          <span class="promo-info">keywords added by:</span> 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="keywords added: 450 / PhP 450">name_of_va</a>, 
                            <a href="admin-va-profile" class="va-name" data-tooltip class="has-tip" title="keywords added: 12 / PhP 100">second_va</a>
                        </p>
                      </section>
                    </td>
                    <td>5-8-2013</td>
                    <td>4-30-2013</td>
                    <td>1</td>
                    <td>245</td>
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
        </section>
        <section>
          <p class="title" data-section-title><a href="#va">VA List</a></p>
          <div class="content" data-section-content data-slug="va">

          </div>
        </section>

        <section>
          <p class="title" data-section-title><a href="#pricing">Pricing</a></p>
          <div class="content" data-section-content data-slug="pricing">

          </div>
        </section>
      </div><!-- section-container -->

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

  </script>


<?php include('footer.php'); ?>