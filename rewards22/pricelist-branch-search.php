<?php require_once('header.php'); ?>

<div class="group breadcrumbs">
   <ul class="breadcrumbs right">
      <li><a href="#">Home</a></li>
      <li><a href="#">Branch Name</a></li>
      <li><a href="#">Price List Settings</a></li>
      <li class="current"><a href="#">PriceList</a></li>
   </ul>
</div>

<div id="container">
  <form class="custom">

    <div class="sub-box">
      <div class="row">
        <div class="nine columns centered">
          <h2>Branch pricelist entries associated with the chunk</h2>
          <div class="row search-main">
            <div class="search nine columns">
              <input id="txtSearch" type="text" placeholder="Search branch pricelist" />
            </div>
            <div class="three columns">
              <a id="btnSearch" class="button radius">Search</a>
            </div>
          </div><!-- row -->
      </div><!-- columns -->
    </div><!-- row -->
    <div class="row hide" id="search-results-container">
      <div class="nine columns centered">
        <hr>
        <h2>Search Results</h2>
          <div id="branch-search-results">
                       
            <ul class="nolist list-results">

              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox this is a super duper long title with really long descriptions like omg what is happening</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox this is a super duper long title with really long descriptions like omg what is happening</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox this is a super duper long title with really long descriptions like omg what is happening</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox this is a super duper long title with really long descriptions like omg what is happening</span></label></li>
              
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
                    
              <li><label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
            </ul>
                        
          </div>
          <input type="submit" class="button radius" value="Add to Chunk" disabled>
      </div>
    </div>

  </form>
</div>

<form class="custom">
<div class="row">
  <div class="nine columns centered">
    <h2>Pricelist Entries assigned to chunk</h2>
    <div id="save-chunk" class="results">
      <!-- if no prices --> 
      <div class="none">
        <h3>None yet</h3>
        <p>There are no entries added. Use the search box above to add items.</p>
      </div>

      <ul class="nolist list-results hide">

        <li><label for="checkbox1"><input type="checkbox" id="checkbox1" checked><span class="custom checkbox"></span> <span class="desc">Label for Checkbox this is a super duper long title with really long descriptions like omg what is happening</span></label></li>
              
        <li><label for="checkbox1"><input type="checkbox" id="checkbox1" checked><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
        <li><label for="checkbox1"><input type="checkbox" id="checkbox1" checked><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
        <li><label for="checkbox1"><input type="checkbox" id="checkbox1" checked><span class="custom checkbox"></span> <span class="desc">Label for Checkbox</span></label></li>
              
      </ul>
                        
      <input type="submit" class="button radius" value="Save">
    </div>
  </div>
</div>
</form>

</div>

<?php require_once('footer.php'); ?>