<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
<title>Login - Reyvora Analytics</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<style>

    body{
        min-height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background:linear-gradient(135deg,#2563eb,#06b6d4);
    }

    .login-box{
        background:white;
        padding:40px;
        border-radius:20px;
        width:140%;
        max-width:450px;
        box-shadow:0 10px 30px rgba(0,0,0,.15);
    }

    .logo{
        width:100px;
    }

</style>
 

</head>
<body>

<div class="login-box">

 
<div class="text-center mb-4">

    <img src="{{ asset('images/logo.png') }}"
         alt="Reyvora Logo"
         class="logo">

    <h3 class="mt-3">
        Reyvora Analytics
    </h3>

    <p class="text-muted mb-">
    Empowering Business Through Data
    </p>

    <p class="h5 fw-bold mb-4">
        Admin Dashboard Login
    </p>

</div>

@if(session('error'))

<div class="alert alert-danger">
    {{ session('error') }}
</div>

@endif

<form action="/admin/login"
      method="POST">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Email
        </label>

        <input type="email"
               name="email"
               class="form-control"
               required>

    </div>

    <div class="mb-4">

        <label class="form-label">
            Password
        </label>

        <input type="password"
               name="password"
               class="form-control"
               required>

    </div>

    <button type="submit"
            class="btn btn-primary w-100">

        Login

    </button>

</form>

<p class="text-muted mt-4 small text-center">
    Demo Account<br>
    admin@reyvora.com | admin123
</p>

</div>

</body>
</html>
