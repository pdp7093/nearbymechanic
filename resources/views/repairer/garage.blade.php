@extends('repairer.layout.main')

@section('main')
<div class="container mt-4">
    <h3 class="mb-4">My Garage</h3>

    @if($garage)
    <div class="card shadow p-3">
        <h5>{{ $garage->name }}</h5>
        <p><b>Address:</b> {{ $garage->address }}</p>
        <p><b>Service:</b> {{ $garage->service }}</p>
        <p><b>Open Time:</b> {{ $garage->opentime }}</p>
        <p><b>Close Time:</b> {{ $garage->closetime }}</p>

        <a href="{{ route('garage.edit') }}" class="btn btn-primary mt-3">
            Edit Garage
        </a>
    </div>
    @else
        <p>No garage details found.</p>
         <a href="{{ route('garage.insert') }}" class="btn btn-primary mt-3">
            Add Garage
        </a>
    @endif
</div>
@endsection
