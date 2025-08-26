<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@stack('title')</title>
  <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{url('css/nearbymehanic.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
</head>
<body>
@include('sweetalert::alert')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{url('/')}}">NearbyMechanic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">My Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>

        <!-- Profile Dropdown -->
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="{{url('/Profile')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
          {{session('uemail')}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/Profile')}}">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="{{url('/logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
