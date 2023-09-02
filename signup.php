<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
    <style>
        /* Body styles */
        body {
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        /* Signup box styles */
        .signup-box {
            width: 400px; /* Adjust the width as needed */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #191970;
            background: #FFFFFF;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px 6px rgba(9, 11, 111, 0.53);
        }

        .signup-box h1 {
            font-size: 40px;
            border-bottom: 4px solid #191970;
            margin-bottom: 20px;
            padding: 10px;
        }

        /* Textbox styles */
        .textbox {
            width: 100%;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        /* Button styles */
        .button {
            width: 100%;
            padding: 12px;
            color: #ffffff;
            background: #191970;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
        }

        /* Added hover effect to the button */
        .button:hover {
            background: #0e0e6d;
        }

        /* Added styles for the signup link */
        .signup-button {
            text-align: center;
            color: #191970;
            text-decoration: none;
            margin-top: 10px;
            font-size: 18px;
            display: block;
        }

        /* Added hover effect to the signup link */
        .signup-button:hover {
            text-decoration: underline;
        }

        /* Login button styles */
        .login-button {
            width: 100%;
            padding: 12px;
            color: #ffffff;
            background: #191970;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Center the Sign In link */
        .signin-link {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <div class="signup-box">
            <h1>Signup Here</h1>
            <form action="signup.php" method="post">
                <div class="textbox">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control" placeholder="Confirm Password" id="cpassword"
                        name="cpassword">
                </div>

                <div class="textbox">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                </div>

                <div class="textbox">
                    <i class="fa fa-phone"></i>
                    <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                </div>

                <button type="submit" class="btn button">Sign Up</button>

                <!-- Centered Sign In link -->
                <p class="signin-link"><a href="index.php" class="signup-button">Sign In</a></p>

                <!-- Login with UIDAI/DIGI Locker button -->
                <button type="button" class="btn login-button">Login with UIDAI/DIGI Locker</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
