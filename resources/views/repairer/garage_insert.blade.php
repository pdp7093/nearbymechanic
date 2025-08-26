@extends('repaiere.layouts.main')

@section('main')
<div class="container">
    <h2>Add New Garage</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Garage Name -->
        <div class="mb-3">
            <label for="garage_name" class="form-label">Garage Name</label>
            <input type="text" class="form-control" id="garage_name" name="garage_name" required>
        </div>

        <!-- Address Search -->
        <div class="mb-3">
            <label for="garage_address" class="form-label">Garage Address (Search)</label>
            <input type="text" class="form-control" id="garage_address" name="garage_address" placeholder="Search location..." required>
        </div>

        <!-- Lat & Lng -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" readonly>
            </div>
        </div>

        <!-- Map Picker -->
        <div class="mb-3">
            <button type="button" class="btn btn-sm btn-primary mb-2" onclick="initMap()">Pick from Map</button>
            <div id="map" style="width: 100%; height: 400px; display:none;"></div>
        </div>

        <!-- Garage Image -->
        <div class="mb-3">
            <label for="garage_image" class="form-label">Garage Image</label>
            <input type="file" class="form-control" id="garage_image" name="garage_image">
        </div>

        <!-- Services -->
        <div class="mb-3">
            <label for="services" class="form-label">Services</label>
            <select class="form-select" id="services" name="services[]" multiple>
                <option value="Repair">Repair</option>
                <option value="Towing">Towing</option>
                <option value="Tyres">Tyres</option>
                <option value="Battery">Battery</option>
            </select>
        </div>

        <!-- Open/Close Time -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="opentime" class="form-label">Open Time</label>
                <input type="time" class="form-control" id="opentime" name="opentime">
            </div>
            <div class="col-md-6 mb-3">
                <label for="closetime" class="form-label">Close Time</label>
                <input type="time" class="form-control" id="closetime" name="closetime">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Garage</button>
    </form>
</div>
@endsection

@section('scripts')
<!-- MapMyIndia SDK -->
<script src="https://apis.mapmyindia.com/advancedmaps/v1/6deac0d4-6830-465e-869b-0a7351e7822f/map_load?v=1.5"></script>
<script src="https://apis.mapmyindia.com/advancedmaps/api/6deac0d4-6830-465e-869b-0a7351e7822f/map_sdk_plugins"></script>

<script>
    // Autocomplete Search
    var auto = new MapmyIndia.placeAutocomplete(document.getElementById("garage_address"), {
        callback: function (data) {
            if (data && data.latitude && data.longitude) {
                document.getElementById("latitude").value = data.latitude;
                document.getElementById("longitude").value = data.longitude;
            }
        }
    });

    // Map Picker
    let map, marker;
    function initMap() {
        document.getElementById("map").style.display = "block";

        map = new MapmyIndia.Map("map", {
            center: [28.61, 77.23], // Default center (Delhi)
            zoom: 12
        });

        marker = new L.marker([28.61, 77.23], {draggable: true}).addTo(map);

        marker.on('dragend', function(e) {
            let lat = marker.getLatLng().lat;
            let lng = marker.getLatLng().lng;
            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;
        });

        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            document.getElementById("latitude").value = e.latlng.lat;
            document.getElementById("longitude").value = e.latlng.lng;
        });

        // Auto get current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let lat = position.coords.latitude;
                let lng = position.coords.longitude;
                map.setView([lat, lng], 14);
                marker.setLatLng([lat, lng]);
                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lng;
            });
        }
    }
</script>
@endsection
