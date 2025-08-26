<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Repairer Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
     <link href="{{url('css/repairer.css')}}" rel="stylesheet">

</head>
<body>
    @include('sweetalert::alert')
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center mb-4"><i class="bi bi-tools"></i> Repairer</h3>
        <a href="{{url('/Repairer-dashboard')}}"><i class="bi bi-house"></i> Dashboard</a>
        <a href="{{route('garage.index')}}"><i class="bi bi-shop"></i> My Garage</a>
        
        <a href="#"><i class="bi bi-calendar-check"></i> Bookings</a>
        <a href="#"><i class="bi bi-cash"></i> Earnings</a>
        <a href="{{url('/Repairer-profile')}}"><i class="bi bi-person"></i> Profile</a>
        <a href="{{route('logout')}}"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">

