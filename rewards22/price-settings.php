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

      <a href="#panel" class="panel-link">
        <span class="selector"></span>
        Price List Details
      </a>

      <h1 class="page-header">
         <span class="input-pricelname name">Gaisano A</span> <span class="page-type"> - Price List Settings</span></h1> 

         <div class="oc" id="panel">

              <?php require_once('elements/pricesettings-info.php'); ?>
              <?php require_once('elements/pricesettings-versions.php'); ?>
         </div>
      <div id="content" class="content mod">

         <dl class="tabs two-up">
           <dd class="active"><a href="#docs">Upload  Document(s)</a></dd>
           <dd><a href="#updates">Check for Updates</a></dd>
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
<?php require_once('elements/pricesettings-upload.php'); ?>
<?php require_once('elements/pricesettings-instructions.php'); ?>
<?php require_once('footer.php'); ?>