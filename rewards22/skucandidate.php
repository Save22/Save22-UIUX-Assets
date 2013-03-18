<?php require_once('header.php'); ?>
<link rel="stylesheet" href="/static/save22/rewards22/css/datatables/demo_table.css">
<link rel="stylesheet" href="/static/save22/rewards22/css/datatables/demo_page.css">
<style>
  #screenshot{
    position:absolute;
    border:1px solid #ccc;
    background:#333;
    padding:5px;
    display:none;
    color:#fff;
    }
  #gtaxonomy-select { margin-top: 24px; }
  .results {
      border: 2px solid #ccc;
      width: 90%;
      margin: auto;
      max-height: 300px;
      overflow: auto;
      background: #fff;
      padding: 15px;
      margin-bottom: 24px;

  }
      .results .button {
          display: block;
          margin: 24px auto;
      }
  .alert-box ul {
      margin: 6px 24px;
  }

  .selector-filter {
      margin-bottom: 12px !important;
      border: 0 !important;
      overflow: visible;
      height: 40px;
  }
  .selector-filter img {float:left;}

  .hide { display: none; }
  .show { display: block; }
  .search-main { margin-top: 24px; }
  .trigger-taxonomy-filter { display: block; color: #000; padding: 12px; font-weight: bold; border: 1px solid #333; border-right: 6px solid #333;  }

</style>

<div class="group breadcrumbs">
   <ul class="breadcrumbs right">
      <li><a href="#">Home</a></li>
      <li><a href="#">Branch Name</a></li>
      <li><a href="#">Branch Location</a></li>
      <li><a href="#">Price List Settings</a></li>
      <li class="current"><a href="#">PriceList</a></li>
   </ul>
</div>

<div id="container">
  <div id="wrap" class="wrap">

    <div class="content">

      <div class="group">
          <div id="pricelist-info" class="group sub-box">
            <h2>Retailer Name</h2>
          </div>
      </div>

      <div id="gtaxonomy-select" class="content-group group sub-box">
        <h2>Search for SKU or Product</h2>
          <form method="POST">

            <div class="row search-taxonomy hide">
              <div class="twelve columns">
                <tr><th><label for="id_taxonomy_items">Categories:</label></th><td><select multiple="multiple" class="selectfilter" name="taxonomy_items" id="id_taxonomy_items">
                <option value="1">Animals</option>
                <option value="2">-- Live Animals</option>
                <option value="3">-- Pet Supplies</option>
                <option value="4">-- -- Bird Supplies</option>
                <option value="5">-- -- -- Bird Cages and Stands</option>
                <option value="6">-- -- -- Bird Food</option>
                <option value="7">-- -- -- Bird Ladders and Perches</option>
                <option value="8">-- -- -- Bird Toys</option>
                <option value="9">-- -- -- Bird Treats</option>
                <option value="10">-- -- Cat Supplies</option>
                            </select>
                <script type="text/javascript">addEvent(window, "load", function(e) {SelectFilter.init("id_taxonomy_items", "GTaxonomyItems", 0, "/static/admin/"); });</script>
                </td></tr>
              </div>
            </div>

            <div class="row search-main">
              <div class="three columns">
                <a href="#" class="trigger-taxonomy-filter">Filter search by Category or Taxonomy</a>
              </div>
              <div class="search six columns">
                <input id="txtSearch" type="text" placeholder="Search" />
              </div>
              <div class="three columns">
                <a id="btnSearch" class="button radius">Search</a>
              </div>
            </div><!-- row -->

          </form>
      </div><!-- end id gtaxonomy select -->

        <div class="row">
            <div class="twelve columns">
                <div id="save-results">
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">

            <?php require_once('elements/loader.php'); ?>
            
            <h3>Search Results</h3>
            <p>Use the search box below to filter through the search results. You may look for Title, Brand, Model #, Updated Time, etc.</p>

                <form method="POST" class="custom results">
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="table_search_result" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Brand</th>
                                    <th>Model#</th>
                                    <th>Updated Time</th>
                                    <th>Picture</th>
                                    <th>Missions</th>
                                </tr>
                            </thead>
                            <tbody id="tbody"></tbody>
                        </table>
                        <input type="submit" value="Submit" class="button radius" />
                    </form>
            </div>
        </div>

    </div> <!-- .content -->


  </div><!-- #wrap -->
</div>




<?php require_once('footer.php'); ?>