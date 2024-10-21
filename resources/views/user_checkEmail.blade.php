<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Email</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

    <!-- Browser Logo -->
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form">
                        <div class="logo mb-3 text-center">
                            <h3 class="recyclify-title" style="font-size:20px; padding-top: 20px">Check Your Email</h3>
                        </div>
                        <p style="color:#699f7e; text-align: center">We have sent a password recover instructions to your email.</p>
                        <br>
                        <div class="col-md-12 text-center" style="padding-bottom:50px">
<<<<<<< Updated upstream
                            <button type="button" class="btn btn-block mybtn btn-primary potta-one" style="background-color: #A0D483; border: none; outline: none; font-size:12px;" onclick="window.location.href='{{ url('/login') }}'">Skip, I’ll confirm later</button>
=======
                            <button type="button" class="btn btn-block mybtn btn-primary potta-one" style="background-color: #A0D483; border: none; outline: none; font-size:12px;">Skip, I’ll confirm later</button>
>>>>>>> Stashed changes
                        </div>
                        <div class="form-group">
                            <p class="text-center" style="color: #699f7e;">Did not receive email? Check your spam filter, or <a href="{{ url('/forgotpassword') }}" id="signup" class="link-green" style="font-weight: 700;">try another email address</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>