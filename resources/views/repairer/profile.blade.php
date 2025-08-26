@extends('repairer.layout.main')
@section('main')

  <div class="container">
    <!-- Card -->
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

            <!-- Profile Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="text-center flex-grow-1">
                    <img src="{{ url('garage/owners/'.$repairer->profile_photo) ?? 'https://via.placeholder.com/150' }}" 
                         class="rounded-circle img-thumbnail shadow-sm mb-3" width="150" height="150" alt="Profile">
                    <h3 class="fw-bold text-primary">{{ $repairer->name }}</h3>
                    <p class="text-muted">Garage Owner</p>
                </div>
                
                <!-- Edit Profile Button -->
                <div>
                    <a href="{{ url('/Repairer-profile-edit/'.$repairer->id) }}" class="btn btn-outline-primary">
                        <i class="bi bi-pencil-square"></i> Edit Profile
                    </a><br>
                    @if ($repairer->status=='pending')
                    <p class="mt-3 bg-danger text-white text-center border border-danger rounded-3 p-2 text-uppercase">{{$repairer->status}}</p>     
                    @endif
                   <p class="mt-3"></p>
                </div>
            </div>

            <!-- Info Section -->
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary"> Email</h6>
                        <p class="fw-semibold">{{ $repairer->email }}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary">Phone</h6>
                        <p class="fw-semibold">{{ $repairer->phone }}</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary"> Address</h6>
                        <p class="fw-semibold">{{ $repairer->address }}</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary"> State</h6>
                        <p class="fw-semibold">{{ $repairer->state }}</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary"> City</h6>
                        <p class="fw-semibold">{{ $repairer->city }}</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm">
                        <h6 class="text-secondary"> Pincode</h6>
                        <p class="fw-semibold">{{ $repairer->pincode }}</p>
                    </div>
                </div>

            </div>
            

        </div>
    </div>
</div>

@endsection