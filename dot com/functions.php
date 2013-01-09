<?php

function page_class(){

   $currentFile = $_SERVER["PHP_SELF"];
   $parts = Explode('/', $currentFile);
   $parts = $parts[count($parts) - 1];
   $class = basename($parts, ".php"); 
   echo $class;

   if ($class == 'error-404' || $class == 'error-500') {
      echo ' fullheight error';
   }
}


?>