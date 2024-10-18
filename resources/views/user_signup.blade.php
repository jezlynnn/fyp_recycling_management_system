<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Logo_FYP.png') }}">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #fffff5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none !important;
        }

        h1,
        h2,
        h3 {
            font-family: "Kaushan Script", cursive;
        }

        .myform {
            position: relative;
            display: flex;
            /* Use flexbox for layout */
            flex-direction: column;
            /* Stack children vertically */
            padding: 1rem;
            width: 100%;
            background-color: #fff;
            /* White background for the form */
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 1.1rem;
            max-width: 600px;
        }

        .tx-tfm {
            text-transform: uppercase;
        }

        .mybtn {
            border-radius: 25px;
            /* Rounded corners for the button */
        }

        .form-control {
            border-radius: 25px;
            /* Rounder corners for input fields */
            margin-bottom: 1.5rem;
            /* Spacing between components */
        }

        .input-group {
            margin-bottom: 1.5rem;
            /* Add space between the input groups */
        }

        .logo img {
            max-width: 60%;
            /* Adjust logo size */
            height: auto;
        }

        .recyclify-title {
            font-family: "Rubik Bubbles", cursive;
            /* Use Rubik Bubbles font */
            font-size: 2rem;
            /* Adjust the size as needed */
            margin-top: 10px;
            /* Adjust the margin as needed */
            color: #699f7e;
            /* Set the text color */
        }

        #first {
            width: 100%;
        }

        .potta-one {
            font-family: 'Potta One', cursive;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form">
                        <div class="logo mb-3 text-center">
                            <img src="{{ asset('assets/images/Logo_FYP.png') }}" alt="Logo" class="img-fluid">
                            <h2 class="recyclify-title">RECYCLIFY</h2>
                        </div>
                        <br>
                        <form action="" method="post" name="registration">
                            <!-- Email field input -->
                            <div class="input-container">
                                <input type="email" name="email" class="form-control potta-one registration-input" style="font-size: 12px;" id="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                            </div>
                            <!-- Password field input -->
                            <div class="input-container">
                                <input type="password" name="password" id="password" class="form-control potta-one registration-input" style="font-size: 12px;" placeholder="Password" required>
                            </div>
                            <!-- Full Name field input -->
                            <div class="input-container">
                                <input type="text" name="fullname" id="fullname" class="form-control potta-one registration-input" style="font-size: 12px;" placeholder="Full Name" required>
                            </div>
                            <!-- Contact field input -->
                            <div class="input-container">
                                <input type="text" name="contact" id="contact" class="form-control potta-one registration-input" style="font-size: 12px;" placeholder="Contact No." required>
                            </div>
                            <!-- Button field input -->
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-block mybtn btn-primary potta-one" style="background-color: #A0D483; border: none; outline: none;">Sign Up</button>
                            </div>
                            <br>
                            <div class="form-group">
                                <p class="text-center">Already Have an Account? <a href="{{ url('/login') }}" id=" signup" class="link-green">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>