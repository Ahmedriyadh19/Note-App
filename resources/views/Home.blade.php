<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="Style/home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="header-box">
        <h1 class="centered-title">Welcome home</h1>
        <button class="logout-button" type="submit">
            <a href="{{ route('Login') }}">
                <i class="fas fa-sign-out-alt logout-icon"></i>
            </a>
        </button>

    </div>

     <footer class="footer-box">
        <p>&copy; 2023 Ahmed Riyadh. All rights reserved.</p>
        <br>
        <div class="social-icons">
            <a href="https://github.com"><i class="fab fa-github"></i></a>
            <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>
            <a href="https://wa.me/1234567890"><i class="fab fa-whatsapp"></i></a>
        </div>

    </footer>
</body>

</html>
