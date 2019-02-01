<!-- TODO: clean/reformat code -->
<!-- This is the old version of the code, which puts random markers in the Bucharest area
The newer version (whith real locations of the machines is available in map.blade.php file 
from machines folder) -->
@extends('layouts.admin_layout')

@section('content')
 <link rel='stylesheet' type='text/css' href="{{asset('css/tomtom/map.css')}}"/> 
        <script src="{{asset('js/tomtom.min.js')}}"></script> 
        <style>
          #map {
              height: 90vh;
              width: 100vw;
          }
        </style>
        
<div class="row container">
   <div id='map'></div> 
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

               //  {
               //      icon: tomtom.L.icon({
               //          iconUrl: '{{asset("images/markers/b2.png")}}',
               //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
               //          iconSize: [30, 34],
               //          iconAnchor: [15, 34]
               //      })
               //  },
                
               //  {
               //      icon: tomtom.L.icon({
               //          iconUrl: '{{asset("images/markers/b3.png")}}',
               //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
               //          iconSize: [30, 34],
               //          iconAnchor: [15, 34]
               //      })
               //  },

               //  {
               //      icon: tomtom.L.icon({
               //          iconUrl: '{{asset("images/markers/b4.png")}}',
               //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
               //          iconSize: [30, 34],
               //          iconAnchor: [15, 34]
               //      })
               //  },

               //  {
               //      icon: tomtom.L.icon({
               //          iconUrl: '{{asset("images/markers/b5.png")}}',
               //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
               //          iconSize: [30, 34],
               //          iconAnchor: [15, 34]
               //      })
               //  },

               //  {
               //      icon: tomtom.L.icon({
               //          iconUrl: '{{asset("images/markers/6.png")}}',
               //          // iconUrl: '{{asset("images/markers/1.3.png")}}',
               //          iconSize: [30, 34],
               //          iconAnchor: [15, 34]
               //      })
               //  },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/1.4.png")}}',
                        // iconUrl: '{{asset("images/markers/1.3.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/2.4.png")}}',
                        // iconUrl: '{{asset("images/markers/2.3.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/3.4.png")}}',
                        // iconUrl: '{{asset("images/markers/3.3.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/4.4.png")}}',
                        // iconUrl: '{{asset("images/markers/4.3.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/5.4.png")}}',
                        // iconUrl: '{{asset("images/markers/5.3.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                {
                    icon: tomtom.L.icon({
                        iconUrl: '{{asset("images/markers/6.png")}}',
                        iconSize: [30, 34],
                        iconAnchor: [15, 34]
                    })
                },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/buldozer.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                //  {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/buldozer2.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                //  {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/buldozer3.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                //  {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/buldozer4.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                //  {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/truck1.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/truck2.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/truck3.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/buldozer2.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker0.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker1.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker2.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker3.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker4.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
                // {
                //     icon: tomtom.L.icon({
                //         iconUrl: '{{asset("images/markers/marker5.png")}}',
                //         iconSize: [30, 34],
                //         iconAnchor: [15, 34]
                //     })
                // },
            ];

            // var promenadaMallCoordinates = [44.4784538,26.1014347];
            var bucharestCoordinates = [44.436718,26.100];

            var map = tomtom.L.map('map', {
                key: '{{env("TOMTOM_KEY")}}',
                basePath: '<sdk>',
                // center: promenadaMallCoordinates,
                center: bucharestCoordinates,
                // zoom: 15
                zoom: 11,
                layer: "hybrid"
            });

            // var marker = tomtom.L.marker(promenadaMallCoordinates, markerOptions).addTo(map);
            // var marker = tomtom.L.marker(bucharestCoordinates, markerOptions[0]).addTo(map);
            // marker.bindPopup('Promenada Mall').openPopup();

        
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

            function addMarker(lat, lng, degree) {

                var coordinates = [lat, lng];
                console.log("coordinates:");
                console.log(lat);
                console.log(lng);

                var marker = tomtom.L.marker(coordinates, markerOptions[degree]).addTo(map);
                marker.bindPopup('Utilaj ' + i);
                // marker.openPopup();
                console.log("Marker added");
                i++;
            }

            function addMarkers(nr_markers) {
              for(var i=0; i<nr_markers; i++) {
                var randLat = (Math.random() * (maxLat - minLat) + minLat).toFixed(7)
                var randLng = (Math.random() * (maxLng - minLng) + minLng).toFixed(7)
                var minDegree = 0;
                var maxDegree = 5;
                maxDegree = markerOptions.length;
                var randomDegree = Math.floor(Math.random() * (maxDegree - minDegree) + minDegree);

                addMarker(randLat, randLng, randomDegree)
              }
            }

            addMarkers(20);
            // // setInterval(function() {
            //   var randLat = (Math.random() * (maxLat - minLat) + minLat).toFixed(7)
            //   var randLng = (Math.random() * (maxLng - minLng) + minLng).toFixed(7)
            //   var minDegree = 0;
            //   var maxDegree = 5;
            //   var randomDegree = Math.floor(Math.random() * (maxDegree - minDegree) + minDegree);

            //   addMarker(randLat, randLng, randomDegree)
            // // }, 4000); 

        </script> 
</div>

@endsection