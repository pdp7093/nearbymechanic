@extends('admin.layout.main')
@section('main')


  <!-- Main Content -->
  <div class="content">
    
    <!-- Top Navbar -->
    <nav class="navbar mb-4 d-flex justify-content-between">
      <h3>Admin Dashboard</h3>
      <div>
        <span class="me-2">Welcome, {{session('aemail')}}</span>
        <img src="https://via.placeholder.com/35" class="profile-img" alt="Admin">
      </div>
    </nav>

    <!-- Dashboard Cards -->
    <div class="row g-4 mb-4">
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <h5>Total Users</h5>
          <h2>1,245</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <h5>Total Mechanics</h5>
          <h2>85</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <h5>Bookings</h5>
          <h2>320</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3 text-center">
          <h5>Earnings</h5>
          <h2>₹75,000</h2>
        </div>
      </div>
    </div>

    <!-- Recent Bookings Table -->
    <div class="card p-4">
      <h5 class="mb-3">Recent Bookings</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
          <thead class="bg-accent">
            <tr>
              <th>Date</th>
              <th>User</th>
              <th>Service</th>
              <th>Mechanic</th>
              <th>Status</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>20 Aug 2025</td>
              <td>Rahul Sharma</td>
              <td>Engine Repair</td>
              <td>Arun</td>
              <td><span class="badge bg-success">Completed</span></td>
              <td>₹1500</td>
            </tr>
            <tr>
              <td>18 Aug 2025</td>
              <td>Amit Verma</td>
              <td>Battery Replacement</td>
              <td>Ramesh</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
              <td>₹2500</td>
            </tr>
            <tr>
              <td>15 Aug 2025</td>
              <td>Sneha Gupta</td>
              <td>Oil Change</td>
              <td>Vikas</td>
              <td><span class="badge bg-success">Completed</span></td>
              <td>₹800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

@endsection