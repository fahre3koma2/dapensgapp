@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> FAQ</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <button type="button" onclick="showPosition();">Show My Position on Google Map</button>
                <div id = "map" style = "width: 600px; height: 400px"></div>
                <input type="text" id="lat" value="">
                <input type="text" id="long" value="">
            </div>
        </div>
        <div class="card">
        <div class="card-body">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Q1. Anim pariatur cliche reprehenderit?</a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Q2. Food truck quinoa nesciunt laborum eiusmod?</a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Q3. Brunch 3 wolf moon tempor sunt squid aliqua?</a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Q4. Nihil anim keffiyeh helvetica craft beer labore?</a> </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Q5. Ad vegan excepteur butcher vice lomo squid aliqua?</a> </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Q6. Craft beer labore wes anderson cred nesciunt excepteur?</a> </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeven">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Q7. Non cupidatat skateboard dolor sunt squid aliqua?</a> </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEight">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Q8. Brunch keffiyeh wolf moon tempor sunt squid aliqua?</a> </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Q9. Nihil anim brunch wolf moon tempor sunt squid aliqua?</a> </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTen">
              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Q10. keffiyeh helvetica moon tempor sunt squid aliqua?</a> </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen" aria-expanded="false">
              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single origin coffee nulla assumenda shoreditchet. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente.</div>
            </div>
          </div>
        </div>
      </div></div>
    </div>
@endsection
@section('injs')
        <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
        <script>
            function showPosition() {
                if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showMap, showError);
                } else {
                    alert("Sorry, your browser does not support HTML5 geolocation.");
                }
            }

            function showMap(position) {
                // Get location data
                lat = position.coords.latitude;
                long = position.coords.longitude;
                document.getElementById("lat").value = lat;
                document.getElementById("long").value = long;
                //var latlong = new google.maps.LatLng(lat, long);

                // Creating map options
                var mapOptions = {
                center: [lat,long],
                zoom: 15
                }

                // Creating a map object
                var map = new L.map('map', mapOptions);

                // Creating a Layer object
                var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

                // Adding layer to the map
                map.addLayer(layer);
                let marker = new L.Marker([lat,long]);
                marker.addTo(map);

            }


            // Define callback function for successful attempt
            /*function showMap(position) {
                // Get location data
                lat = position.coords.latitude;
                long = position.coords.longitude;
                var latlong = new google.maps.LatLng(lat, long);

                var myOptions = {
                    center: latlong,
                    zoom: 16,
                    mapTypeControl: true,
                    navigationControlOptions: {
                        style:google.maps.NavigationControlStyle.SMALL
                    }
                }

                var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
                var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
            } */

            // Define callback function for failed attempt
            function showError(error) {
                if(error.code == 1) {
                    result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
                } else if(error.code == 2) {
                    result.innerHTML = "The network is down or the positioning service can't be reached.";
                } else if(error.code == 3) {
                    result.innerHTML = "The attempt timed out before it could get the location data.";
                } else {
                    result.innerHTML = "Geolocation failed due to unknown error.";
                }
            }
        </script>
@endsection

