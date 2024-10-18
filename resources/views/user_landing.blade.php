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
</head>

<body>
    <header>
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('assets/images/Logo_FYP.png') }}" alt="Logo" class="logo-img">
            <a href="#" class="logo">Recyclify</a>
        </div>

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

    <!-- Main Content Section -->
    <section class="main-content">
        <div class="main-text">
            <h2 class="potta-one" style="color:#66A17F; font-size:40px;">Your Guide To A Greener Tomorrow</h2>
            <h3 class="potta-one" style="color:#9BCA96; font-size:30px;">Every Little Piece Counts</h3>
            <br>
            <p class="footer-text" style="color:#66A17F; font-size:20px; text-align: justify; line-height: 1.5;">
                Recyclify is dedicated to promoting sustainable practices and recycling efforts. Our platform connects users with recycling centers and provides valuable information on how to recycle various materials. Join us in making a positive impact on the environment!
            </p>
            <br>
            <!-- Get Started Button -->
            <a href=" {{ url('/login') }}" class="get-started-btn" style="display: inline-block; padding: 10px 20px; 
            background-color: #A0D483; color: white; text-decoration: none; border-radius: 30px; font-family: 'Potta One', cursive; 
            font-size: 14px; transition: background-color 0.3s; width: 20%; text-align: center;">Get Started</a>
        </div>
        <div class="main-image">
            <img src="{{ asset('assets/images/landing.png') }}" alt="Recycling Image">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-layer-one">
            <img src="{{ asset('assets/images/footer.png') }}" alt="Recycling Image" style="width: 100%; height: auto;">
        </div>

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