<?php require_once('header.php'); ?>

<div class="group breadcrumbs">
   <ul class="breadcrumbs right">
      <li><a href="#">Home</a></li>
      <li><a href="#">Gaisano A</a></li>
      <li class="current"><a href="#">Price List Settings</a></li>
   </ul>
</div>

<div id="container">
   <div id="wrap" class="wrap">

      <a href="#panel" class="panel-link">Price List Details</a>

      <h1 class="page-header">
         <span class="input-pricelname name">Gaisano A</span> <span class="page-type"> - Price List Settings</span></h1> 

         <div class="oc" id="panel">
            <div id="price-info" class="page-info">
               <p><label>Price List Name:</label> <span class="input-pricelname">Gaisano A</span></p>
               <p><label>Retailer Name:</label> Gaisano Interpace</p>
               <p><label>Contact Information:</label> email@gaisano.com.ph</p>
               <p><label>Operating Hours:</label> 10am - 5pm</p>
            </div>

            <?php require_once('elements/pricesettings-versions.php'); ?>
         </div>
      <div id="content" class="content mod">

         <dl class="tabs two-up">
           <dd class="active"><a href="#docs">Upload New Source Document(s)</a></dd>
           <dd><a href="#updates">Check for Store Updates</a></dd>
         </dl>
         <ul class="tabs-content">
           <li class="active" id="docsTab">
               <?php require_once('elements/pricesettings-table.php'); ?>
           </li>
           <li id="updatesTab">

               <?php require_once('elements/pricesettings-assignva.php'); ?>

           </li>
         </ul>
      </div>

   </div>
</div>
<?php require_once('footer.php'); ?>