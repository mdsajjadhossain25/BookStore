<!DOCTYPE html>
<html lang="en">
<head>
    <title>Experiment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            padding-top: 56px; /* Adjusted padding to account for fixed navbar */
        }

        .navbar-brand {
            font-size: 1.5rem; /* Adjusted font size for the brand/logo */
        }

        .navbar-nav .nav-item {
            margin-right: 10px; /* Added spacing between navbar items */
        }

        .navbar-nav .nav-link {
            font-size: 1rem; /* Adjusted font size for navbar links */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Navbar brand/logo (optional) -->
            <a class="navbar-brand" href="{{ route('home') }}">Your Logo</a>

            <!-- Navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content goes here -->