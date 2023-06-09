<?php
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/signin.css">
    <title>Signin</title>
</head>

<body>
    <div class="login-card">
        <div class="form-value">
            <!-- the switch button toggles between login and sign up form -->
            <div class="button">
                <div id="btn-background"></div>
                <button type="button" class="toggle-btn" id="btn1" onclick="signin()"> Sign in</button>
                <button type="button" class="toggle-btn" id="btn2" onclick="register()"> Register</button>
            </div>

            <!-- the sign in form -->
            <form id="signin" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <h1>Signin</h1>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="username" placeholder="Email" required>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="remember">
                    <input type="checkbox" name="remember" value="remember">
                    <label for="remember">Remember me</label>
                </div>

                <input type="submit" name="Signin" class="login-button" value="Sign in">
                <div class="login-help">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>

            <!-- register form -->
            <form id="register" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <h1>Register</h1>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="userid" placeholder="Username" required>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="username" placeholder="Email" required>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="agree">
                    <input type="checkbox" name="agree" value="agree">
                    <label for="agree">I agree to the terms & conditions</label>
                </div>

                <input type="submit" name="Signin" class="login-button" value="Register">

            </form>

        </div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        var btn_signin = document.getElementById("btn1");
        var btn_register = document.getElementById("btn2");
        var btn_background = document.getElementById("btn-background");
        var form_signin = document.getElementById("signin");
        var form_register = document.getElementById("register");

        function register() {
            btn_background.style.left = "107px";
            form_register.style.left = "50%";
            form_signin.style.left = "-100%";
            form_register.style.transition = "0.5s";
            form_signin.style.transition = "0.5s";
            form_register.style.position = "hidden";
        }

        function signin() {
            btn_background.style.left = "0px";
            form_register.style.left = "150%";
            form_signin.style.left = "50%";
            form_register.style.transition = "0.5s";
            form_signin.style.transition = "0.5s";
        }
    </script>
</body>

</html>