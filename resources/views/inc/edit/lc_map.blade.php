
<div id="map"></div>            
<div class="form-group">                      
    <div class="col-md-4 pull-right">
        <input id="lat" type="text" value="{{$property->lat}}" class="form-control get_lat_lng" name="lat" placeholder="lat" autocomplete="off" />
    </div>
    <div class="col-md-4 pull-right">
        <input id="lng" type="text" value="{{$property->lng}}" class="form-control get_lat_lng" name="lng" placeholder="lng" autocomplete="off" />
    </div>
    <div class="col-md-1 pull-right">
        <button type="button" value="https://www.google.com/maps/@'.{{$property->lat}},{{$property->lng}}.',255m/data=!3m1!1e3?hl=ar" target="_blank" class="btn btn btn-primary" style="width:100%" onclick="myFunction_map(this.value)">معاينة</button>
    </div>
    <div class="col-md-2 pull-right">
        <button type="button" class="btn btn btn-success" id="go_map" onclick="getLocation()" style="width:100%">موقعي</button>
    </div>
</div>

<script type="text/javascript">
	
    function myFunction_map(my_url) {
    window.open(my_url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=0,width=755,height=755");
    }
       
    var iconBase = 'maker/';
    var geocoder;
    var map;
    var infoWindow;
       
    function initMap() {
    
    var get_lat = JSON.parse("{{ json_encode($property->lat) }}");
    var get_lng = JSON.parse("{{ json_encode($property->lng) }}");
    
    var icons = {
              pushpin: {
                icon: 'https://maps.google.com/mapfiles/kml/pushpin/ylw-pushpin.png'
              }
    };
       
    var myLatlng = {lat: get_lat, lng: get_lng};
    var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.HYBRID
    });
       
    var gmarkers = [];
    var fmarkers = [];
       
    var marker_p = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable:true,
       center: myLatlng
    });
    
    var marker_f = new google.maps.Marker({
        position: myLatlng,
        map: map,
        center: myLatlng,
        icon: iconBase + 'grn-pushpin.png'
    });
       
    $(".get_lat_lng").keyup(function() {
       
    marker_p.setMap(null);
       
    for (i = 0; i < gmarkers.length; i++) {
       gmarkers[i].setMap(null);
    }
       
       var glat = $("#lat").val();
       var glng = $("#lng").val();
       
       var getLatlng = new google.maps.LatLng(glat,glng);
       
       map.setCenter(getLatlng);
       
       var marker_g = new google.maps.Marker({
        position: getLatlng,
        map: map,
        draggable:true,
       center: getLatlng
    });
    gmarkers.push(marker_g);
    
    google.maps.event.addListener(marker_g, 'dragend', function (evt_g) {
       
       var get_lat = evt_g.latLng.lat().toFixed(5);
       var get_lng = evt_g.latLng.lng().toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
       
   
          
    });
       
    google.maps.event.addListener(marker_g, 'dragstart', function (evt_l) {	
       $("#lat").val('جاري التحديث ...');
       $("#lng").val('جاري التحديث ...');
    });
       
    });
       
       
    $('#go_map').click(function() {
    
    infoWindow = new google.maps.InfoWindow;
    
    if (navigator.geolocation) {
       
              navigator.geolocation.getCurrentPosition(function(position) {
                
             var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };
               
                  
    marker_p.setMap(null);
       
    for (i = 0; i < gmarkers.length; i++) {
       gmarkers[i].setMap(null);
    }
                
    var marker_l = new google.maps.Marker({
        position: pos,
        map: map,
        draggable:true,
       center: pos
    });
    gmarkers.push(marker_l);
    
    var Circle_l = new google.maps.Circle({
                strokeColor: '#00acac',
                strokeOpacity: 0.75,
                strokeWeight: 1,
                fillColor: '#00acac',
                fillOpacity: 0.35,
                map: map,
                center: pos,
                radius: 111
    });
    gmarkers.push(Circle_l);
    
    map.setCenter(pos);
    
    var get_lat = position.coords.latitude.toFixed(5);
    var get_lng = position.coords.longitude.toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
               
   
       
       
    google.maps.event.addListener(marker_l, 'dragend', function (evt_l) {
       
       var get_lat = evt_l.latLng.lat().toFixed(5);
       var get_lng = evt_l.latLng.lng().toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
       
   
       
       
    });
    
    google.maps.event.addListener(marker_l, 'dragstart', function (evt_l) {	
       $("#lat").val('جاري التحديث ...');
       $("#lng").val('جاري التحديث ...');
    });
             
    },
            
    function() { handleLocationError(true, infoWindow, map.getCenter()); });
    
    }
    
    });
    
    google.maps.event.addListener(marker_p, 'dragend', function (evt) {
       
       var get_lat = evt.latLng.lat().toFixed(5);
       var get_lng = evt.latLng.lng().toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
       
   
       
       
    });
    
    google.maps.event.addListener(marker_p, 'dragstart', function (evt) {	
       $("#lat").val('جاري التحديث ...');
       $("#lng").val('جاري التحديث ...');
    });
    
    google.maps.event.addListener(map, 'dblclick', function(event) {
       
       map.setOptions({disableDoubleClickZoom: true });
       
       marker_p.setMap(null);
       
       for (i = 0; i < gmarkers.length; i++) {
        gmarkers[i].setMap(null);
       }
    
       placeMarker(event.latLng);
       
       var get_lat = event.latLng.lat().toFixed(5);
       var get_lng = event.latLng.lng().toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
       
  
       
       
    });
    
       
    function placeMarker(location) {
    var marker_n = new google.maps.Marker({
            position: location, 
            map: map,
            draggable:true,
          center: location
        });
       gmarkers.push(marker_n);
       
    google.maps.event.addListener(marker_n, 'dragend', function (evt) {
       
       var get_lat = evt.latLng.lat().toFixed(5);
       var get_lng = evt.latLng.lng().toFixed(5);
       
       $("#lat").val(get_lat);
       $("#lng").val(get_lng);
       
    $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + get_lat + "," + get_lng + "&key=AIzaSyA_OXU8m9x06roE94gEbKVUcNjYvbT3Qfg&language=ar", function( json ) {
         $("#lc_a").val(json.results[0].address_components[4].long_name );
        $("#lc_b").val(json.results[0].address_components[3].long_name );
        $("#lc_c").val(json.results[0].address_components[2].long_name );
        $("#lc_d").val(json.results[0].address_components[1].long_name );
     });
       
       
    });
    
    google.maps.event.addListener(marker_n, 'dragstart', function (evt) {	
       $("#lat").val('جاري التحديث ...');
       $("#lng").val('جاري التحديث ...');
    });
    }
       
    }
       
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            //infoWindow.setPosition(pos);
            alert('متصفحك لا يدعم تحديد الموقع');
            infoWindow.open(map);
    }
    </script>
                     
