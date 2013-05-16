<?php include('header.php'); ?>
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

    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['London Eye, London', 51.503454,-0.119562],
        ['Palace of Westminster, London', 51.499633,-0.124755]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
</script>

<?php include('footer.php'); ?>