@extends('user.layout.main')
@section('main_container')
@push('title')
<title>Profile</title>
@endpush


  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome, Deepak!</h1>
      <p class="lead">Find trusted mechanics anytime, anywhere.</p>
      <div class="input-group mt-4 w-50 mx-auto">
        <input type="text" class="form-control" placeholder="Enter your location...">
        <button class="btn btn-primary">Search</button>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Our Services</h2>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card card-hover text-center p-3 h-100">
            <i class="bi bi-car-front-fill display-4 text-primary"></i>
            <h5 class="mt-3">Car Repair</h5>
            <p>Professional car servicing and emergency repair at your doorstep.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover text-center p-3 h-100">
            <i class="bi bi-bicycle display-4 text-success"></i>
            <h5 class="mt-3">Bike Repair</h5>
            <p>Get your two-wheeler fixed quickly with expert mechanics.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover text-center p-3 h-100">
            <i class="bi bi-tools display-4 text-danger"></i>
            <h5 class="mt-3">Emergency</h5>
            <p>24x7 roadside assistance for breakdowns and accidents.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-hover text-center p-3 h-100">
            <i class="bi bi-gear-fill display-4 text-warning"></i>
            <h5 class="mt-3">Other Services</h5>
            <p>AC repair, appliance fixing and more coming soon.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Bookings -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-4 fw-bold">Recent Bookings</h2>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th>Mechanic</th>
              <th>Service</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ravi Kumar</td>
              <td>Car Repair</td>
              <td>20 Aug 2025</td>
              <td><span class="badge bg-success">Completed</span></td>
            </tr>
            <tr>
              <td>Amit Singh</td>
              <td>Bike Repair</td>
              <td>22 Aug 2025</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
            </tr>
            <tr>
              <td>Suresh Yadav</td>
              <td>Emergency</td>
              <td>21 Aug 2025</td>
              <td><span class="badge bg-info text-dark">In Progress</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Notifications / Offers -->
  <section class="py-5">
    <div class="container">
      <h2 class="mb-4 fw-bold">Notifications & Offers</h2>
      <div class="alert alert-info"><i class="bi bi-bell-fill"></i> Your mechanic Amit is on the way!</div>
      <div class="alert alert-success"><i class="bi bi-gift-fill"></i> Get 10% off on your next car service.</div>
    </div>
  </section>


@endsection