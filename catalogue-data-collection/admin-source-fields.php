<?php include('header.php'); ?>

  <div class="row">
    <ul class="breadcrumbs">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">ADMIN</a></li>
      <li class="current"><a href="admin-source-fields.php">Source Fields</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="small-12 large-12 small-centered columns">

      <div class="section-container auto" data-section data-options="deep_linking: true">
        <section>
          <p class="title" data-section-title><a href="#types">Source Types</a></p>
          <div class="content" data-section-content data-slug="types">

            <header>
              <h3>Source Types</h3>
            </header>

            <section>

              <div class="row collapse item-sourcetype">
                <div class="small-6 large-8 columns">
                  <input type="text" placeholder="Type here to add new source type" value="Newspaper">
                </div>
                <div class="small-6 large-4 columns">
                  <ul class="button-group">
                    <li><a href="#" class="small button" data-reveal-id="editModal">edit fields</a></li>
                    <li><a href="#" class="small button alert" data-reveal-id="deleteModal">delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="row collapse item-sourcetype">
                <div class="small-6 large-8 columns">
                  <input type="text" placeholder="Type here to add new source type" value="Facebook">
                </div>
                <div class="small-6 large-4 columns">
                  <ul class="button-group">
                    <li><a href="#" class="small button" data-reveal-id="editModal">edit fields</a></li>
                    <li><a href="#" class="small button alert" data-reveal-id="deleteModal">delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="row collapse item-sourcetype">
                <div class="small-6 large-8 columns">
                  <input type="text" placeholder="Type here to add new source type" value="Twitter">
                </div>
                <div class="small-6 large-4 columns">
                  <ul class="button-group">
                    <li><a href="#" class="small button" data-reveal-id="editModal">edit fields</a></li>
                    <li><a href="#" class="small button alert" data-reveal-id="deleteModal">delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="row collapse item-sourcetype">
                <div class="small-6 large-8 columns">
                  <input type="text" placeholder="Type here to add new source type" value="Retailer Website">
                </div>
                <div class="small-6 large-4 columns">
                  <ul class="button-group">
                    <li><a href="#" class="small button" data-reveal-id="editModal">edit fields</a></li>
                    <li><a href="#" class="small button alert" data-reveal-id="deleteModal">delete</a></li>
                  </ul>
                </div>
              </div>

              <!-- new -->
              <div class="row collapse item-sourcetype">
                <div class="small-6 large-8 columns">
                  <input type="text" placeholder="Type here to add new source type">
                </div>
              </div>

            </section>

          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#options">Source Options</a></p>
          <div class="content" data-section-content data-slug="options">

            <header>
              <h3>Source Options Management Tool</h3>
            </header>

            <section>

              <fieldset>
                <div class="row">
                  <div class="small-3 columns">
                    <label class="right inline">Filed Name</label>
                  </div>
                  <div class="small-9 columns">
                    <div class="row collapse">
                      <div class="small-10 columns">
                        <input type="text" placeholder="Field Name" value="Ad Size">
                      </div>
                      <div class="small-2 columns">
                        <ul class="button-group">
                          <li><a href="#" class="small button alert">delete</a></li>
                        </ul>
                      </div>
                    </div><!-- field name -->
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="small-3 columns">
                    <label class="right inline">Applicable Sources</label>
                  </div>
                  <div class="small-9 columns">
                    <!-- USE Tokenization -->
                    <input type="text" placeholder="Add from Source Types" value="Newspaper">
                  </div>
                </div>
                <div class="row">
                  <div class="large-3 small-12 columns">
                    <label class="right inline">Options</label>
                  </div>
                  <div class="large-9 small-12 columns">
                    <section class="field-options">

                      <div class="row collapse">
                        <div class="small-8 columns">
                          <input type="text" placeholder="Type here to add new option" value="Full Page">
                        </div>
                        <div class="small-4 columns">
                          <ul class="button-group">
                            <li><a href="#" class="small button secondary">delete</a></li>
                          </ul>
                        </div>
                      </div><!-- option -->
                      <div class="row collapse">
                        <div class="small-8 columns">
                          <input type="text" placeholder="Type here to add new option" value="Half Page">
                        </div>
                        <div class="small-4 columns">
                          <ul class="button-group">
                            <li><a href="#" class="small button secondary">delete</a></li>
                          </ul>
                        </div>
                      </div><!-- option -->

                      <!-- new -->
                      <div class="row collapse item-field">
                        <div class="small-8 columns">
                          <input type="text" placeholder="Type here to add new option">
                        </div>
                      </div>

                    </section>
                  </div>
                </div><!-- row -->
              </fieldset>

              <fieldset>
                <div class="row">
                  <div class="small-3 columns">
                    <label class="right inline">Filed Name</label>
                  </div>
                  <div class="small-9 columns">
                    <div class="row collapse">
                      <div class="small-10 columns">
                        <input type="text" placeholder="Field Name" value="Date of Publication">
                      </div>
                      <div class="small-2 columns">
                        <ul class="button-group">
                          <li><a href="#" class="small button alert">delete</a></li>
                        </ul>
                      </div>
                    </div><!-- field name -->
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="small-3 columns">
                    <label class="right inline">Applicable Sources</label>
                  </div>
                  <div class="small-9 columns">
                    <!-- USE Tokenization -->
                    <input type="text" placeholder="Add from Source Types" value="Newspaper, Facebook, Twitter, Retailer Website">
                  </div>
                </div>
                <div class="row">
                  <div class="large-3 small-12 columns">
                    <label class="right inline">Options</label>
                  </div>
                  <div class="large-9 small-12 columns">
                    <section class="field-options">

                      <!-- new -->
                      <div class="row collapse item-field">
                        <div class="small-8 columns">
                          <input type="text" placeholder="Type here to add new option">
                        </div>
                      </div>

                    </section>
                  </div>
                </div><!-- row -->
              </fieldset>
              
            </section>

          </div>
        </section>

      </div><!-- section-container -->

    </div>
  </div>



  <div id="editModal" class="reveal-modal large">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Edit Source Type: Newspaper</h2>
    <h3>Fields</h3>

    <p>Edit the kinds of fields for this specific source type.</p>
    <p>You can add options for each field in the <a href="#options">Source Options tab</a>

    <section>

        <div class="row collapse">
          <div class="small-8 columns">
            <input type="text" placeholder="Type here to add new field" value="Retailer Name">
          </div>
          <div class="small-4 columns">
            <ul class="button-group">
              <li><a href="#" class="small button secondary">delete</a></li>
            </ul>
          </div>
        </div>
        <div class="row collapse">
          <div class="small-8 columns">
            <input type="text" placeholder="Type here to add new field" value="Newspaper Name">
          </div>
          <div class="small-4 columns">
            <ul class="button-group">
              <li><a href="#" class="small button secondary">delete</a></li>
            </ul>
          </div>
        </div>
        <div class="row collapse">
          <div class="small-8 columns">
            <input type="text" placeholder="Type here to add new field" value="Size of Ad">
          </div>
          <div class="small-4 columns">
            <ul class="button-group">
              <li><a href="#" class="small button secondary">delete</a></li>
            </ul>
          </div>
        </div>

        <!-- new -->
        <div class="row collapse item-field">
          <div class="small-10 columns">
            <input type="text" placeholder="Type here to add new field">
          </div>
        </div>

    </section>

  </div>
  
  <div id="deleteModal" class="reveal-modal large">
    <a class="close-reveal-modal">&#215;</a>
    <h2>Delete this source type?</h2>
    <p class="lead">You are deleting: <strong>Newspaper</strong></p>
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