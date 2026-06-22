<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyvora Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f7fc;
        }

        .navbar-custom{
            background:linear-gradient(90deg,#2563eb,#06b6d4);
        }

        .card-custom{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.1);
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">

            <a class="navbar-brand d-flex align-items-center fw-bold text-white"
                href="/admin/dashboard">

                <img src="{{ asset('images/logo.png') }}"
                    alt="Reyvora Logo"
                    height="50"
                    class="me-2">
                CMS Dashboard
            </a>

        <div class="navbar-nav">

            <a class="nav-link text-white {{ request()->is('admin/dashboard') ? 'fw-bold border-bottom border-2' : '' }}"
                href="/admin/dashboard">
                Dashboard
            </a>

            <a class="nav-link text-white {{ request()->is('admin/services*') ? 'fw-bold border-bottom border-2' : '' }}"
                href="/admin/services">
                Services
            </a>

            <a class="nav-link text-white {{ request()->is('admin/articles*') ? 'fw-bold border-bottom border-2' : '' }}"
                href="/admin/articles">
                Articles
            </a>

            <a class="nav-link text-white {{ request()->is('admin/team*') ? 'fw-bold border-bottom border-2' : '' }}"
                href="/admin/team">
                Team
            </a>

            <a class="nav-link text-white"
                href="/">
                Website
            </a>

        </div>

        <form action="{{ route('logout') }}"
              method="POST">

            @csrf

            <button class="btn btn-light btn-sm">
                Logout
            </button>

        </form>

    </div>
</nav>

<div class="container mt-4">

    @yield('content')

</div>

<footer class="text-center py-4 mt-5 text-muted">

    © 2026 Reyvora Analytics
    <br>
    Empowering Business Through Data

</footer>

</body>
</html>