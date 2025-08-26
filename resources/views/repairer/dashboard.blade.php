@extends('repairer.layout.main')
@section('main')


    <!-- Content -->
    <div class="content">
        <!-- Topbar -->
        <div class="topbar">
            <h4>Welcome, Repairer!</h4>
            <button class="btn btn-primary btn-sm"><i class="bi bi-bell"></i> Notifications</button>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card card-custom p-3">
                    <h6>Total Bookings</h6>
                    <h3>25</h3>
                    <i class="bi bi-calendar-check text-primary fs-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3">
                    <h6>Active Garage</h6>
                    <h3>1</h3>
                    <i class="bi bi-shop text-success fs-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3">
                    <h6>Total Earnings</h6>
                    <h3>₹12,500</h3>
                    <i class="bi bi-cash text-warning fs-3"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3">
                    <h6>Pending Requests</h6>
                    <h3>4</h3>
                    <i class="bi bi-clock text-danger fs-3"></i>
                </div>
            </div>
        </div>

        <!-- Bookings Table -->
        <div class="card card-custom mt-4 p-3">
            <h5 class="mb-3">Recent Bookings</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Amit Kumar</td>
                        <td>Engine Repair</td>
                        <td>22 Aug 2025</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ravi Singh</td>
                        <td>Oil Change</td>
                        <td>21 Aug 2025</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Deepak Yadav</td>
                        <td>Tyre Replacement</td>
                        <td>20 Aug 2025</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection