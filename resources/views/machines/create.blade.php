<!-- TODO: draggable marker should be allowed only inside Bucharest area -->
<!-- TODO: clean/reformat code -->

@extends('layouts.admin_layout')

@section('breadcrumbs')
<div class="col-sm-4">
  <div class="page-header float-left">
    <div class="page-title">
      <h1>Adaugă Utilaj</h1>
    </div>
  </div>
</div>
<div class="col-sm-8">
  <div class="page-header float-right">
    <div class="page-title">
      <ol class="breadcrumb text-right">
        <li><a href="#">Administrare</a></li>
        <!-- <li><a href="#">Table</a></li> -->
        <li class="active">Adaugă utilaj</li>
      </ol>
    </div>
  </div>
</div>
@endsection

@section('content')

<div class="content container">

  <div>
   <form method="post" action="{{ route('machines.store') }}"
   onsubmit="updateLocations()">
    @csrf
    <div class="form-group">
      <label for="name">Nume</label>
      <input type="text" class="form-control" name="name"
      placeholder="Denumire utilaj" />
    </div>
           <!--  <div class="form-group">
                <label for="operator_id">Id operator:</label>
                <input type="text" class="form-control" name="operator_id"/>
              </div> -->

              <!-- Hidden for now -->
          <!--   <div class="form-group">
                <label for="level_equipment">Nivel echipament:</label>
                <input type="text" class="form-control" name="level_equipment"/>
              </div> -->
              <div class="form-group">
                <label for="type">Tip:</label>
                <input type="text" class="form-control" name="type" placeholder="Tip utilaj" />
              </div>
              <!-- <div class="form-group"> -->

                <label for="location_details">Cauta locaţie:</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="location_details" id="location_details" placeholder="Cauta locatie..." />
                  <div class="input-group-append">
                   <button class="btn" type="button" onclick="searchOnMap();return false;"> ok</button>
                   <!-- <a class="btn" type="button"> ok</a> -->

                 </div>  </div>
               <!-- </div> -->

               <input type="hidden" name="lat" id="lat">
               <input type="hidden" name="lng" id="lng">
<!-- 
             <div class="form-group">
                <button class="btn" type="button" onclick="searchOnMap();return"> ok</button>
              </div> -->

              <link rel='stylesheet' type='text/css' href="{{asset('css/tomtom/map.css')}}"/> 

              <style>
              #map {
                height: 40vh;
                width: 70vw;// Using a callback function
                tomtom.fuzzySearch()
                .query(query)
                .callback(showResults)
                .go();

              }
            </style>

            <div class="row container">
             <div id='map'></div> 
           </div>
           <button type="submit" class="btn btn-danger">Adaugă utilaj</button>

           <br>
           <div class="pt-3">
            <a href="{{route('machines.index')}}">
              <i class="fa fa-chevron-left"></i>
              Înapoi la lista utilaje
            </a>
          </div>
        </form>
      </div>
    </div>



    <!-- </div> -->
  @endsection

    @section('scripts')
    <script src="{{asset('js/tomtom.min.js')}}"></script> 
    <script> 
      var markerOptions = 
      [
         // {
         //      icon: tomtom.L.icon({
         //          iconUrl: '{{asset("images/markers/b1.png")}}',
         //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
         //          iconSize: [30, 34],
         //          iconAnchor: [15, 34]
         //      })
         //  },
         ];
         var bucharestCoordinates = [44.426718,26.100];

         var map = tomtom.L.map('map', {
          key: '{{env("TOMTOM_KEY")}}',
          basePath: '<sdk>',
          // center: promenadaMallCoordinates,
          center: bucharestCoordinates,
          // zoom: 15
          zoom: 11,
          layer: "hybrid"
        });

      // var marker = tomtom.L.marker(bucharestCoordinates, markerOptions[0]).addTo(map);
      // marker.bindPopup('Bucharest').openPopup();


      var i=1;
      
      // lat, lng
      // Extreme points Bucharest to generate data
      // Nord 44.4897236,26.0742545
      // Vest 44.4495729,25.9828321
      // Est 44.4628966,26.2171682
      // Sud 44.3765841,26.1300802

      // max lat: 44.49
      // min lat: 44.37
      // max lng: 26.22
      // min lng: 25.98


      var maxLat = 44.49;
      var minLat = 44.37;
      var maxLng = 26.22;
      var minLng = 25.98;
      // var lat = 44.4784538;
      // var lng = 26.1014347;


      function showResults(result) {
        console.log("Bucuresti: splaiul indep")
        console.log(result);
        markerPosition = result[0].position;
        console.log(markerPosition);
        addLocationToMap(markerPosition);
      };

      function searchOnMap(){
        query = document.getElementById("location_details").value;
      
        console.log("Query: " + query);
      
        // Using a callback function
        tomtom.fuzzySearch()
        .query(query)
        .callback(showResults)
        .go();
      }


    // TODO: draggable marker should be allowed only inside Bucharest area
    marker = tomtom.L.marker(bucharestCoordinates, {
      draggable: true
    }).bindPopup('Bucuresti');

    marker.on('dragend', function(e) {
      updateMarkerPopup(e.target);
    });


    function updateMarkerPopup(marker) {
      tomtom.reverseGeocode({position: marker.getLatLng()})
      .go(function(response) {
        if (response && response.address && response.address.freeformAddress) {
          marker.setPopupContent(response.address.freeformAddress + ("<br><b>(Markerul se poate muta)</b>"));
        } else {
          marker.setPopupContent('No results found');
        }
        marker.openPopup();
      });
    }

    function addLocationToMap(locationCoordinates) {
      console.log(marker);
      // Adding marker to the map
      // marker.position = locationCoordinates;
      marker.setLatLng(locationCoordinates)
      // Show popup each time the marker is moved
      updateMarkerPopup(marker);

      marker.addTo(map);
      marker.openPopup();

    }

    function updateLocations() {
      markerPosition = marker.getLatLng();
      document.getElementById("lat").value = markerPosition.lat;
      document.getElementById("lng").value = markerPosition.lng;
    }
    addLocationToMap(bucharestCoordinates);


</script> 
@endsection