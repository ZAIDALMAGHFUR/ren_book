<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    </head>
    <title>rent  book | @yield('title')</title>
    <style>
        .main{
            height: 100vh;
        }

        .sidebar{
            background: rgb(103, 103, 103);
            color: white;
        }
    </style>
</head>
<body>
    <div class="main d-flex flex-column justyfy-content-beetwen">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rent | Book</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <ul class="nav flex-column" style="padding: 40px; margin-top: 40px;">
                        @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard" style="color: white;">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="books" style="color: white;">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories" style="color: white;">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users" style="color: white;">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rentlog" style="color: white;">Rent Log</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout" style="color: white;">Logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="profile" style="color: white;">Profile</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="logout" style="color: white;">Logout</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="content p-5 col-lg-10" style="margin-top: 15px">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>