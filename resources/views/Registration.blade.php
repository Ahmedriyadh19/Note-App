<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Style/home_style.css">
    <script src="Js/Password_control.js"></script>
</head>

<body>

    <header class="header-box">
        <h1 class="centered-title">
            Welcome
        </h1>
    </header>

    <div class="container">
        <form action="Registration-Form" method="post" class="form-box">
            @csrf
            <h3>Registration</h3>
            <input type="text" name="name" id="" placeholder="Name" required>
            <input type="text" name="email" id="" placeholder="Email" required>
            <div class="password-input">
                <input type="password" name="password" id="passwordInput" placeholder="Password" required>
                <input type="checkbox" id="showPassword">
            </div>
            <button type="submit">Register</button>
            <p class="link-to">Have an account ! <a href="{{ route('LoginView') }}"> Login</a></p>
        </form>
    </div>

    <footer class="footer-box">
        <div class="social-icons">
            <a href="https://github.com"><i class="fab fa-github"></i></a>
            <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>
            <a href="https://wa.me/1234567890"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p style="margin: 0;">&copy; 2023 Ahmed Riyadh. All rights reserved.</p>
    </footer>

</body>

</html>
