<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recyclify</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet"> <!-- Added Potta One font -->
    <link rel="icon" type="image/png" href="assets/images/Logo_FYP.png"> <!-- Use relative path -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Optional for icons -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <style>
        /* Header Styles */
        header {
            background-color: #699f7e;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: "Rubik Bubbles", cursive;
            font-size: 1.2rem;
            color: white;
            text-decoration: none;
            margin-left: 5px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            font-family: "Potta One", cursive;
            font-size: 0.8rem;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #A0D483;
        }

        .logo-img {
            width: 50px;
            height: auto;
            margin-right: 5px;
        }

        /* Footer Styles */
        footer {
            position: relative;
            margin-top: 20px;
            /* Space between body and footer */
        }

        .footer-layer-one {
            background-image: url('path/to/your/image.png');
            /* Replace with your image path */
            background-size: cover;
            background-position: center;
            height: 100px;
            /* Adjust height as needed */
        }

        .footer-layer-two {
            background-color: #699f7e;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            /* Ensures this layer sits above the image */
        }

        .social-icons {
            margin: 10px 0;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #A0D483;
        }

        .footer-text {
            font-family: "PT Sans", sans-serif;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header>
        <!-- Logo and Title -->
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('assets/images/Logo_FYP.png') }}" alt="Logo" class="logo-img">
            <a href="#" class="logo">Recyclify</a>
        </div>

        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content goes here -->
    <footer>
        <!-- First Layer with Images -->
        <div class="footer-layer-one">
        </div>

        <!-- Second Layer with Social Icons and Copyright -->
        <div class="footer-layer-two">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="footer-text">
                &copy; 2024 Recyclify. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>