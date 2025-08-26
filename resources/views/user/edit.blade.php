<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile - NearbyMechanic</title>
  <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{url('/')}}">NearbyMechanic</a>
    </div>
  </nav>

  <!-- Edit Profile Section -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="mb-4 text-center fw-bold">Edit Profile</h4>

            <!-- Profile Picture -->

            <!-- Profile Form -->
            <form action="{{url('/Update/'.$data->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="text-center mb-4">
                <img src="{{url('users/' . $data->profile_photo)}}" alt="Profile Picture"
                  class="rounded-circle border shadow-sm" width="120" height="120">
                <div class="mt-2">
                  <input type="file" name="profile_photo" id="profile_photo">
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname" value="{{ old('city', $data->fullname) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{$data->email}}">
              </div>

              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control"name="phone" value="{{$data->phone}}">
              </div>

              <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" rows="3">{{$data->address}}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Gender:&nbsp;</label>
                <input type="radio" name="gender" value="Male" @if ($data->gender == "Male") {{'checked'}}
                @endif><span>Male</span>&nbsp;&nbsp;
                <input type="radio" name="gender" value="Female" @if ($data->gender == "Female") {{'checked'}}
                @endif><span>Female</span>&nbsp;&nbsp;
                <input type="radio" name="gender" value="Other" @if ($data->gender == "Other") {{'checked'}}
                @endif><span>Other</span>&nbsp;&nbsp;
              </div>

              <hr>


              <div class="d-flex justify-content-between">
                <a href="{{url('/Profile')}}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{url('js/bootstrap.js')}}"></script>
</body>

</html>