<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NearbyMechanic - Signup</title>
  <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #004aad, #00c6ff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .signup-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      padding: 20px;
    }

    .signup-card {
      width: 100%;
      max-width: 420px;
      border-radius: 15px;
      background: #fff;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      z-index: 1;
    }

    .signup-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .brand-header {
      background: linear-gradient(135deg, #004aad, #007bff);

      text-align: center;

      border-radius: 15px 15px 0 0;
    }

    .brand-header img {
      width: 90%;
      margin-bottom: 5px;
      object-fit: contain;

      padding: 8px;
    }

    .form-control {
      border-radius: 10px;
      padding-left: 40px;
    }

    .input-group-text {
      border-radius: 10px 0 0 10px;
      background: #f5f7fa;
    }

    .btn-custom {
      background: linear-gradient(135deg, #004aad, #007bff);
      color: white;
      border-radius: 10px;
      font-weight: 500;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background: linear-gradient(135deg, #00327a, #0056b3);
      transform: scale(1.03);
    }

    .bg-icons {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('logo/Repair_Hand_Logo.jpeg');
      background-repeat: repeat;
      background-size: 100px;
      opacity: 0.05;
      z-index: 0;
    }
  </style>
</head>

<body>
  @include('sweetalert::alert')
  <div class="signup-container">
    <div class="bg-icons"></div>

    <div class="signup-card">
      <div class="brand-header">
        <img src="{{url('logo/logo_1.png')}}" alt="NearbyMechanic Logo">

      </div>
      <div class="p-4">
        <form method="POST" action="{{route('Register')}}">
          @csrf

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" ><br>
            @error('fullname')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" ><br>
            @error('email')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" ><br>
            @error('phone')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" ><br>
            @error('password')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
              placeholder="Confirm Password" ><br>
            @error('password_confirmation')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
          </div>

          <button type="submit" class="btn btn-custom w-100"> Create Account</button>
        </form>
        
        <p class="text-center mt-3 mb-0">
         Register As <a href="{{url('/Repairer-Register')}}" class="fw-bold text-primary">Repairer</a>
        </p>
        <p class="text-center mt-3 mb-0">
          Already have an account? <a href="{{url('/Login')}}" class="fw-bold text-primary">Login</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>