
<div class="map-container">

  <div class="map" id="map">

  </div>

  <a name="near"></a>
  <div class="row home-featured main-row home-content">
      <div class="row">
        <div class="small-12 large-6 columns right location-ads">

          <nav class="header-tabs">
            <ul>
              <li><a href="#near" class="active">What's Near</a></li>
              <li><a href="#popular">Popular Promos</a></li>
            </ul>
          </nav>

          <?php include('elements/carousel-promos-home.php'); ?>
        </div>
      </div>
  </div>

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

  var mapOptions = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: false,
    styles: styles,
    scrollwheel: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.DEFAULT,
      position: google.maps.ControlPosition.LEFT_CENTER
    }
  };

  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  /* https://developers.google.com/maps/documentation/javascript/controls#Adding_Controls_to_the_Map */

  var html_text = '<div class="map-catalog"><h3>Abenson</h3><a href="#">Catalog Name<br><img src="img/catsample1.jpg" class="map-catalog"></a></div>';
          
  var infowindow = new google.maps.InfoWindow({
      content: html_text
  });

  var retailer_logo1 = {
    url: 'img/retailer-abenson.jpg',
    size: new google.maps.Size(100, 50),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 34),
    scaledSize: new google.maps.Size(100, 50)
  };

  var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: retailer_logo1,
      title:'Abenson'
  });


  google.maps.event.addListener(marker, 'mouseover', function() {
      infowindow.open(map,marker);
  });
  
</script>