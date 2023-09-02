<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Include your external CSS file -->
    <link rel="stylesheet" href="login.css">
    
    <title>Login Page</title>
</head>

<body>
    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>

            <input class="button" type="submit" name="login" value="Sign In">

            <!-- Use a button element for the Sign Up link -->
            <a href="signup.php" class="signup-button">Sign Up</a>
        </div>
    </form>
</body>

</html>
