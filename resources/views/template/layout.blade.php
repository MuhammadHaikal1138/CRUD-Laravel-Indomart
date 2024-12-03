<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Indomaret</title>
    {{-- <style>
        body {
            display: flex;
        }
        .sidebar {
            min-height: 100vh; /* Mengatur tinggi sidebar */
            min-width: 200px;
            /* background-color: #0602ff; Warna latar belakang sidebar */
            color: white; /* Warna teks */
        }
        .sidebar a {
            color: white; /* Warna teks link */
        } --}}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
            @if (Auth::user()->role == 'admin')
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-center">Indomart <sup>11</sup></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/pages/Dashboard" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i><spanclass="text-white ms-1 d-none d-sm-inline">Dashboard</spanclass=>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('food.index')}}" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i><span class="text-white ms-1 d-none d-sm-inline">Data Makanan</span></a>
                    </li>
                    <li>
                        <a href="{{ route('drink.index')}}" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i><span class="text-white ms-1 d-none d-sm-inline">Data Minuman</span></a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-link px-0 align-middle text-white">Logout</button>
                        </form>
                    </li>
                </ul>
                <hr>
            </div>
            @else
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline text-center">Indomart <sup>11</sup></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/pages/Dashboard" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i><spanclass="text-white ms-1 d-none d-sm-inline">Dashboard</spanclass=>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i><span class="text-white ms-1 d-none d-sm-inline">Pembelian</span></a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-link px-0 align-middle text-white">Logout</button>
                        </form>
                    </li>
                </ul>
                <hr>
            </div>
            @endif
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>






    {{-- <div class="sidebar p-4 bg-primary">
        @if (Auth::user()->role == 'admin')
        <h3 class="text-center">Indomart <sup>11</sup></h3>
        <ul class="nav flex-column">
            <li class="nav-item pt-2">
                <a class="nav-link" href="/pages/Dashboard">Dashboard</a>
            </li>
            <hr>
            <li class="nav-item pt-2" >
                <a class="nav-link" href="{{ route('food.index')}}">Data Makanan</a>
            </li>
            <li class="nav-item pt-2">
                <a class="nav-link" href="{{ route('drink.index')}}">Data Minuman</a>
            </li>
        </ul>
        @else
        <h3 class="text-center">Indomart <sup>11</sup></h3>
        <div class="flex-column justify-content-between">
            <ul class="nav flex-column">
                    <div>
                        <li class="nav-item pt-2">
                            <a class="nav-link" href="/pages/Dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link" href="#">Pembelian</a>
                        </li>
                    </div>
            </ul>
        @endif
    </div>
        @yield('content') --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>