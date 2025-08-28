@extends('repairer.layout.main')
@section('main')

<div class="container mt-4">
    <h3 class="mb-3">Setup Your Garage</h3>
    <form method="POST" action="{{route('garage.insert')}}" enctype="multipart/form-data">
        @csrf

        <!-- Garage Name -->
        <div class="mb-3">
            <label class="form-label">Garage Name</label>
            <input type="text" name="garage_name" class="form-control" required>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="garage_address" class="form-control" required></textarea>
        </div>

        <!-- Opening & Closing Time -->
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Opening Time</label>
                <input type="time" name="opentime" class="form-control" required>
            </div>
            <div class="col">
                <label class="form-label">Closing Time</label>
                <input type="time" name="closetime" class="form-control" required>
            </div>
        </div>

        <!-- Garage Photos -->
        <div class="mb-3">
            <label class="form-label">Garage Photos</label>
            <input type="file" name="garage_image" class="form-control" multiple>
        </div>

        <!-- Hidden Fields for Map Lat/Long -->
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">

        <!-- Map Section -->
        <div class="mb-3">
            <label class="form-label">Select Garage Location</label>
            <div id="map" style="width:100%; height:400px;"></div>
        </div>

        <button type="submit" class="btn btn-primary">Save Garage</button>
    </form>
</div>

<!-- MapMyIndia Scripts -->
<script src="https://apis.mappls.com/advancedmaps/api/14e5dce8-3fa5-4743-b66b-4549479ee5a7/map_sdk?layer=vector&v=3.0&callback=initMap1"></script>
<script src="https://apis.mappls.com/advancedmaps/api/14e5dce8-3fa5-4743-b66b-4549479ee5a7/map_sdk_plugins?v=3.0"></script>

<script>
    var map, picker;
    function initMap1() {
        map = new mappls.Map('map', {
            center: [28.62, 77.09], // Default India Center
            zoom: 5
        });

        map.addListener('load', function() {
            var options = { map: map, header: true, closeBtn: true };
            mappls.placePicker(options, callback);

            function callback(data) {
                picker = data;
                if (picker.data !== undefined) {
                    alert('Location capture successfully');
                    // Fill Lat & Long in Hidden Inputs
                    document.getElementById("latitude").value = picker.data.lat;
                    document.getElementById("longitude").value = picker.data.lng;
                }
            }
        });
    }
</script>

@endsection
