<?php include('header.php'); ?>
  
  <div class="row home-featured main-row home-content" style="height: 650px">
    <div class="small-12 large-9 columns main-content">
      <?php include('elements/home-map.php'); ?>
    </div>
<!--
    <div class="small-12 large-3 columns sidebar">
      <?php include_once('elements/sidebar-hot.php'); ?>
    </div> -->
  </div>

  <section class="home-preview home-content">

    <div class="row main-row">
      <div class="small-12 large-9 columns">

        <h3 class="sub-header">Popular Promotions</h3>
          <?php include('elements/grid-featured.php'); ?>

          <a href="#category-link" class="button-minor home-more">view more</a>

        <h3 class="sub-header">Brands</h3>
          <?php include('elements/carousel-brands.php'); ?>
      <!--
      <section class="home-new home-content">
        <h3 class="sub-header">What's New</h3>
          <?php include('elements/grid-new.php'); ?>
      </section>
      -->

      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>

<!-- 
  <div class="row main-row">
    <div class="small-12 columns">

      <?php include_once('elements/footerlinks-popularcategories.php'); ?>
-->
<!-- 
      <section class="section section-links">
        <div class="row">
          <div class="small-12 large-4 columns">
            <h2>Popular Stores in Ortigas</h2>
              <ul class="small-block-grid-1">
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
                <li><a href="#">Retailer Name in City</a></li>
              </ul>
          </div>
          <div class="small-12 large-8 columns">
            <h2>Popular Shopping Destinations</h2>
              <ul class="small-block-grid-1 large-block-grid-3">
                <li>
                  <h3>City</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
                <li>
                  <h3>Neighborhood</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
                <li>
                  <h3>Shopping Center</h3>
                  <ul>
                    <li><a href="#">Makati</a></li>
                    <li><a href="#">Ortigas</a></li>
                    <li><a href="#">Pasay</a></li>
                    <li><a href="#">Taguig</a></li>
                    <li><a href="#">Cebu</a></li>
                    <li><a href="#">Davao</a></li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </section>

    </div>
</div>
-->


<div class="map" id="map">

</div>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
  var latlng = new google.maps.LatLng(14.58512,121.057277);

  var styles = [
  {
    "featureType": "water",
    "stylers": [
      { "visibility": "on" },
      { "color": "#4ea4c6" },
      { "lightness": 48 },
      { "saturation": 1 }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "landscape.natural.terrain",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "administrative.country",
    "stylers": [
      { "visibility": "on" },
      { "weight": 0.1 },
      { "lightness": -100 }
    ]
  },{
    "featureType": "road.highway",
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "road.arterial",
    "stylers": [
      { "saturation": -100 },
      { "lightness": 53 },
      { "weight": 0.1 }
    ]
  },{
    "featureType": "road.local",
    "stylers": [
      { "visibility": "on" },
      { "weight": 0.1 },
      { "saturation": -100 },
      { "lightness": 45 }
    ]
  },{
    "featureType": "poi.medical",
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "poi.school",
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "poi.government",
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "poi.park",
    "stylers": [
      { "color": "#e6e4ed" },
      { "saturation": -100 }
    ]
  },{
    "featureType": "poi.business",
    "elementType": "geometry.fill",
    "stylers": [
      { "saturation": -100 },
      { "visibility": "simplified" }
    ]
  }
  ];

  var myOptions = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    styles: styles,
    scrollwheel: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.LARGE,
      position: google.maps.ControlPosition.LEFT_BOTTOM
    }
  };

  map = new google.maps.Map(document.getElementById('map'), myOptions);

  /* https://developers.google.com/maps/documentation/javascript/controls#Adding_Controls_to_the_Map */

</script>

<?php include('footer.php'); ?>