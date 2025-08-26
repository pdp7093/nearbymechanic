<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Repairer Register</title>
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1588776814546-3b84e1e0d5b0') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.3);
            max-width: 550px;
            width: 100%;
            position: relative;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            color: #2c3e50;
        }

        .btn-primary {
            background: #0069d9;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 12px;
        }

        .btn-primary:hover {
            background: #004c9d;
        }

        .login-link {
            position: absolute;
            bottom: 15px;
            right: 20px;
            font-size: 14px;
        }

        .login-link a {
            color: #0069d9;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-card">
        <h2><i class="bi bi-tools"></i> Repairer Registration</h2>
        <form action="{{url('/Repairer-Register')}}" method="POST" enctype="multipart/form-data" id="registerForm">
            @csrf
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                @error('fullname')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                @error('email')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                @error('phone')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <input type="text" name="address" class="form-control" placeholder="Address" required>
                @error('address')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="bi bi-image"></i> Upload Your Image</label>
                <input type="file" name="photo" class="form-control" accept="image/*" required>
                @error('photo')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                @error('password')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"
                    required>
                @error('password_confirmation')
                    <p class="help-block text-danger">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

    
        <div class="login-link">
            Already have an account? <a href="{{url('/Repairer-Login')}}">Login</a>
        </div>
    </div>

</body>

</html>