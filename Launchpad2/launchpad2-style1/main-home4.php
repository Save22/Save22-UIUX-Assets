<?php include('header.php'); ?>
  <a name="near"></a>
  <div class="row home-featured main-row home-content">
    <div class="location-ads">
      <nav class="header-tabs">
        <ul>
          <li><a href="#near" class="active">What's Near</a></li>
          <li><a href="#popular">Popular Promos</a></li>
        </ul>
      </nav>
      <section>
        <?php include('elements/carousel-promos-home.php'); ?>
      </section>
    </div>
<!--
    <div class="small-12 large-3 columns sidebar">
      <?php include_once('elements/sidebar-hot.php'); ?>
    </div> -->
  </div>

  <a name="popular"></a>
  <section class="home-preview home-content">

    <div class="row main-row">
      <div class="small-12 large-9 columns">

        <h3 class="sub-header">Popular Promotions</h3>
          <?php include('elements/grid-featured.php'); ?>

          <a href="#category-link" class="button-minor home-more">view more</a>

        <h3 class="sub-header">Brands</h3>
          <?php include('elements/carousel-brands.php'); ?>
      </div>
      <div class="small-12 large-3 columns">
        
        <?php include('elements/sidebar-categories.php'); ?>

      </div>
    </div>
  </section>

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