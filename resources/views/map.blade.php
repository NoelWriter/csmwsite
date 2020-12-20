@extends('default')

@section('head')
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css" rel="stylesheet" />
@endsection

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <div id="map" style="height: 70vh; width: 100%"></div>
        </div>
        <div class="row my-5">
            <div class="flex-row">
                <div class="btn-primary btn" onclick="setSunPosition([100.0, 100.0], 10)">Set skybox time to night</div>
                <div class="btn-primary btn" onclick="setSunPosition([-10.0, -70.0], 60)">Set skybox time to day</div>
                <div class="btn-primary btn" onclick="goToLocation()">Fly to Terneuzen</div>
            </div>

        </div>

    </div>
    <!-- /.container -->
@endsection

@section('script')
    <style>
        .mapboxgl-popup {
            max-width: 200px;
            color: #0f0f0f;
        }
    </style>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoibm9lbHdyaXRlciIsImEiOiJja2l1MW4xcnAwaXUzMnBtdWwyeWU3aHczIn0.T0bHum4oJrx-Nml-kCbMyQ';
        var map = new mapboxgl.Map({
            container: 'map',
            zoom: 14,
            center: [3.8114677, 51.3389307],
            pitch: 20,
            style: 'mapbox://styles/mapbox-map-design/ckhqrf2tz0dt119ny6azh975y'
        });

        let popup = new mapboxgl.Popup({ offset: 25 }).setText(
            'Hoofdkwartier Jean-Paul'
        );

        let marker = new mapboxgl.Marker()
            .setLngLat([3.8327597560772726, 51.337365282529035])
            .setPopup(popup)
            .addTo(map);

        map.on('load', function () {
            map.addSource('mapbox-dem', {
                "type": "raster-dem",
                "url": "mapbox://mapbox.mapbox-terrain-dem-v1",
            });
            map.setTerrain({'source': 'mapbox-dem',
                'exaggeration': [
                    'interpolate', ['exponential', 0.5],
                    ['zoom'], 0, 0.2, 10, 1
                ]
            });

            // add a sky layer that will show when the map is highly pitched
            map.addLayer({
                'id': 'sky',
                'type': 'sky',
                'paint': {
                    'sky-type': 'atmosphere',
                    'sky-atmosphere-sun': [0.0, 0.0],
                    'sky-atmosphere-sun-intensity': 60
                }
            });

        });

        function setSunPosition(position, intensity) {
            map.setPaintProperty('sky', 'sky-atmosphere-sun', position);
            map.setPaintProperty('sky', 'sky-atmosphere-sun-intensity', intensity);
        }

        function goToLocation(position = [3.8314677, 51.3289307]) {
            map.flyTo({
                center: position,
                zoom: 13,
                speed: 0.5,
                curve: 1.5,
            });
        }
    </script>
@endsection
