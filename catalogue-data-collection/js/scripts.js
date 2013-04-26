
    $(document).foundation();


  /* LONG - LAT PLUGIN INTEGRATION */
  
    var address = '';

    $('#branch-address').focus(function(){
    });

    $('#branch-address').blur(function(){
      address = $('#branch-address').val();
      if(address != null) {
        $('#branchlnglat').val(address);
      }
    });