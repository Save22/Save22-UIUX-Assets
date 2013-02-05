<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Save22</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css">

    <link rel="stylesheet" href="css/widget-page.css" type="text/css" media="screen" />

  <!--[if IE 9]>
    <link rel="stylesheet" href="css/widget-page-ie9.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if IE 8]>
    <link rel="stylesheet" href="css/widget-page-ie8.css" type="text/css" media="screen" />
  <![endif]-->

  <!--[if IE 7]>
    <link rel="stylesheet" href="css/widget-page-ie7.css" type="text/css" media="screen" />
  <![endif]-->

    <script src="js/modernizr.foundation.js"></script>

</head>


<body>

<?php require_once('widgets/notice-shopsmarter.php'); ?>
<header id="main-header" class="ext-widget">
    <div class="row">
        
        <div class="three columns logo-container">
            <a href="http://save22.com">
                <h1 id="logo" class="block right" style="background: url('img/poweredby-logoC.png') no-repeat;">Save22</h1>
                </a>
        </div><!-- two -->
        <div class="nine columns">

            <div class="row collapse" id="searchbox">
              <div class="ten mobile-three columns">
                <input type="text" id="site_search" placeholder="Search for a product" />
              </div>
              <div class="two mobile-one columns">
                <a class="button expand postfix">Search</a>
              </div>
            </div>
            <div id="popular-searches">
                    <ul class="list-nav nolist">
                        <li class="label uppercase">popular: </li>
                        <li><a href="#">computers</a></li>
                        <li><a href="#">mobile</a></li>
                        <li><a href="#">SLR</a></li>
                        <li><a href="#">iPhone</a></li>
                    </ul>
            </div>
        </div><!-- four -->
    </div><!-- row -->
</header>