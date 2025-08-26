<!-- resources/views/garage/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Garage Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    @include('sweetalert::alert')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
            <h3 class="text-center mb-4">Garage Login</h3>
            
            <!-- Login Form -->
            <form method="POST" action="{{ url('/Repairer-Login') }}">
                @csrf
                
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="garage@example.com" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p class="mb-0">Don’t have an account? <a href="{{ url('/Repairer-Register') }}">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>
