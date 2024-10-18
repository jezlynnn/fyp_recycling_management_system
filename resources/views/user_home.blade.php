<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recyclify</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet"> <!-- Added Potta One font -->
    <link rel="icon" type="image/png" href="path/to/your/logo.png"> <!-- Replace with your logo path -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Optional for icons -->

    <!-- Browser Logo -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Logo_FYP.png') }}">

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
            /* Adjusted for less space */
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
            /* Updated to Potta One font */
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
            /* Reduced space between logo and title */
        }
    </style>
</head>

<body>
    <header>
        <!-- Logo and Title -->
        <div style="display: flex; align-items: center;"> <!-- Flex container for logo and title -->
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
</body>

</html>