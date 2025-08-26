<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NearbyMechanic - Admin Dashboard</title>
  <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('css/admin.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <img src="{{url('logo/favicon.png')}}" alt="" width="100%" height="90rm" class="margin-bottom:15px">
    <a href="#" class="active"><span><i class="fa-solid fa-chart-simple"></i></span> Dashboard</a>
    <a href="#"><i class="fa-solid fa-user"></i> Users</a>
    <a href="#"><span><i class="fa-solid fa-wrench"></i></span> Mechanics</a>
    <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span> Bookings</a>
    <a href="#"><span><i class="fa-solid fa-chart-line"></i></span> Reports</a>
    <a href="#"><span><i class="fa-solid fa-gear"></i></span> Settings</a>
    <a href="{{url('/Logout')}}"><span><i class="fa-solid fa-right-from-bracket"></i></span> Logout</a>
  </div>
