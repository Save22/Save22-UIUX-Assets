<?php require_once('header.php'); ?>

<div id="container">
   <div class="row">
      <ul class="breadcrumbs right">
         <li><a href="#">Home</a></li>
         <li><a href="#">Gaisano A</a></li>
         <li class="current"><a href="#">Price List Settings</a></li>
      </ul>
   </div><!-- row -->

   <div class="row">

      <h1 class="page-header">Price List Settings - <span class="input-pricelname">Gaisano A</span></h1> 

      <div class="page-info three panel columns">
         <p><label>Price List Name:</label> <span class="input-pricelname">Gaisano A</span></p>
         <p><label>Retailer Name:</label> Gaisano Interpace</p>
         <p><label>Contact Information:</label> email@gaisano.com.ph</p>
         <p><label>Operating Hours:</label> 10am - 5pm</p>
      </div>

      <div class="work-division nine columns">

         <nav class="page-options">
            Pricesheet version:
         </nav>

         <dl class="tabs two-up">
           <dd class="active"><a href="#docs">Upload New Source Document(s)</a></dd>
           <dd><a href="#updates">Check for Store Updates</a></dd>
         </dl>
         <ul class="tabs-content">
           <li class="active" id="docsTab">
               <?php require_once('elements/pricesettings-table.php'); ?>
           </li>
           <li id="updatesTab">

               <h2>Assign VA to check for Store Updates</h2>

           </li>
         </ul>

      </div>

   </div>
</div>

<?php require_once('footer.php'); ?>