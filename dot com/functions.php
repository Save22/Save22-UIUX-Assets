<?php

function page_class(){

   $currentFile = $_SERVER["PHP_SELF"];
   $parts = Explode('/', $currentFile);
   $parts = $parts[count($parts) - 1];
   $class = basename($parts, ".php"); 
   echo $class;
   
}


?>