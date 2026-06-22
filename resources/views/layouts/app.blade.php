<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyvora Analytics</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: 0.6s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid #000;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light"
     style="background: linear-gradient(90deg, #4facfe, #00f2fe);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold text-dark"
        href="/">

            <img src="{{ asset('images/logo.png') }}"
                height="40"
                class="me-2">

            Reyvora Analytics

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">

                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ request()->is('services*') ? 'active' : '' }}" href="/services">Services</a>
                <a class="nav-link {{ request()->is('articles*') ? 'active' : '' }}" href="/articles">Articles</a>
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>

                <a class="nav-link"
                href="/admin/login">
                    Admin
                </a>

            </div>
        </div>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer class="text-black text-center py-4"
        style="background: linear-gradient(90deg, #4facfe, #00f2fe);">

    <div class="container">
        <p class="fw-bold mb-1">Reyvora Analytics</p>

        <p class="mb-1">
            Empowering Business Through Data
        </p>

        <p class="mb-1">
            Email: contact@reyvoraanalytics.com
        </p>

        <p class="mb-0">
            © 2026 Reyvora Analytics. All rights reserved.
        </p>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const elements = document.querySelectorAll('.fade-up');

    function showOnScroll() {
        elements.forEach(el => {
            const position = el.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (position < windowHeight - 50) {
                el.classList.add('show');
            }
        });
    }

    window.addEventListener('scroll', showOnScroll);
    window.addEventListener('load', showOnScroll);
</script>

</body>
</html>