<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Sri Lanka Login</title>
    <link rel="stylesheet" href="css/login.css" />
</head>


<body>

    <?php include("_header.php"); ?>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already Have an account ?</h2>
                <button class="signinBtn">sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't Have an account ?</h2>
                <button class="sigupBtn">sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="PHP/login.php" method="POST">
                    <h2>Sign In</h2>
                    <input type="text" name="username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="submit" value="login" name="login" />
                    <!-- <a href="#" class="forgot">Forgot Password</a> -->
                </form>
            </div>

            <div class="form signupForm">
                <form action="PHP/login.php" method="POST">
                    <h2>Sign Up</h2>
                    <input type="text" name="username" placeholder="Username" required />
                    <input type="email" name="email" placeholder="Email Address" required />
                    <input type="password" name="password1" placeholder="Password" required />
                    <input type="password" name="password2" placeholder=" Confirm Password" required />
                    <input type="submit" value="Register" name="register" />
                </form>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>