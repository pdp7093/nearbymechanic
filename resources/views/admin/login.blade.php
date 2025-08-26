<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NearbyMechanic - Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Background with opacity only for image */
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('logo/favicon.png');
      background-repeat: repeat;
      background-size: 100px;
      opacity: 0.5;
      z-index: 0;
    }

    .login-card {
      position: relative;
      z-index: 1;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0px 6px 20px rgba(0,0,0,0.2);
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
    }

    .login-card h3 {
      font-weight: bold;
      color: #007bff;
    }

    .input-group-text {
      cursor: pointer;
    }

    .btn-login {
      border-radius: 25px;
      font-weight: 600;
      padding: 10px;
    }
  </style>
</head>
<body>

  <div class="login-card text-center">
    <h3 class="mb-4">Admin Login</h3>
    <form method="post" action="{{route('AdminLogin')}}">
        @csrf
      <!-- Email -->
      <div class="mb-3 text-start">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter admin email" >
          @error('email')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
      </div>
      
      <!-- Password with Eye -->
      <div class="mb-3 text-start">
        <label class="form-label">Password</label>
        <div class="input-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
          
          <span class="input-group-text" id="togglePassword">
            👁️
          </span>
        </div>
        
          @error('password')
              <p class="help-block text-danger">{{$message}}</p>
            @enderror
      </div>
      
      <!-- Login Button -->
      <button type="submit" class="btn btn-primary w-100 btn-login">Login</button>
    </form>
  </div>

  <script>
    // Password toggle
    const togglePassword = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    togglePassword.addEventListener("click", function () {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
