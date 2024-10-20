<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Indomaret</title>
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-height: 100vh; /* Mengatur tinggi sidebar */
            /* background-color: #0602ff; Warna latar belakang sidebar */
            color: white; /* Warna teks */
        }
        .sidebar a {
            color: white; /* Warna teks link */
        }
    </style>
</head>
<body>

    <div class="sidebar p-4 bg-primary">
        <h3 class="text-center">Indomart <sup>11</sup></h3>
        <ul class="nav flex-column">
            <li class="nav-item pt-2">
                <a class="nav-link" href="/">Dashboard</a>
            </li>
            <hr>
            <li class="nav-item pt-2" >
                <a class="nav-link" href="{{ route('food.index')}}">Data Makanan</a>
            </li>
            <li class="nav-item pt-2">
                <a class="nav-link" href="{{ route('drink.index')}}">Data Minuman</a>
            </li>
        </ul>
    </div>
        @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>