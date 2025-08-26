@extends('user.layout.main')
@section('main_container')

<div class="container-fluid">
  <div class="row">
    
    <!-- Sidebar -->
    <div class="col-md-3 bg-dark text-white min-vh-100 p-3 shadow-sm">
      <div class="text-center mb-4">
        <img src="{{url('users/'.$data->profile_photo)}}" class="rounded-circle border border-3 border-light" alt="Profile Photo" height="50rm">
        <h5 class="mt-2">{{$data->fullname}}</h5>
        
      </div>
      <hr class="text-secondary">
      
      <a href="#" class="d-block py-2 px-2 text-white text-decoration-none"><i class="bi bi-book me-2"></i>My Bookings</a>
      <a href="#" class="d-block py-2 px-2 text-white text-decoration-none"><i class="bi bi-gear me-2"></i>Settings</a> 
      <a href="#" class="d-block py-2 px-2 text-white text-decoration-none"><i class="bi bi-question-circle me-2"></i>Help</a>
      <a href="{{url('/logout')}}" class="d-block py-2 px-2 text-danger text-decoration-none"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-9 p-4">
      <h3 class="mb-4 fw-bold"><i class="bi bi-person-circle me-2"></i>Profile Details</h3>

      <!-- Profile Info Card -->
      <div class="card shadow-sm mb-4 border-0">
        <div class="card-body">
          <h5 class="card-title text-primary mb-3">Personal Information</h5>
          <p><strong>Full Name:</strong> {{$data->fullname}}</p>
          <p><strong>Email:</strong> {{$data->email}}</p>
          <p><strong>Mobile:</strong> {{$data->phone}}</p>
          <p><strong>Address:</strong> {{$data->address}}</p>
           <p><strong>Gender:</strong> {{$data->gender}}</p>
          <div class="mt-3">
            <a href="{{url('/Edit/'.$data->id)}}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit Profile</a>
            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-lock me-1"></i>Change Password</button>
          </div>
        </div>
      </div>

      <!-- Membership Details Card -->
      <div class="card shadow-sm mb-4 border-0">
        <div class="card-body">
          <h5 class="card-title text-primary mb-3"><i class="bi bi-gem me-2"></i>Membership Details</h5>
          <p><strong>Plan:</strong> {{$data->membership_plan ?? 'Free'}}</p>
          <p><strong>Status:</strong> 
            @if($data->membership_status == 'Active')
              <span class="badge bg-success">Active</span>
            @else
              <span class="badge bg-danger">Inactive</span>
            @endif
          </p>
          <p><strong>Start Date:</strong> {{$data->membership_start ?? 'N/A'}}</p>
          <p><strong>Expiry Date:</strong> {{$data->membership_end ?? 'N/A'}}</p>
        </div>
      </div>

      <!-- Booking Summary -->
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card text-center shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Total Bookings</h6>
              <h3 class="text-primary fw-bold">15</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card text-center shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Completed</h6>
              <h3 class="text-success fw-bold">12</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card text-center shadow-sm border-0">
            <div class="card-body">
              <h6 class="text-muted">Pending</h6>
              <h3 class="text-warning fw-bold">3</h3>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
