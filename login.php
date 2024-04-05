<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>

<body class="Log_body">

    <table class="Log_table">

        <tr>
            <td>
                <form class="Log_form" method="post" action="valid_login.php" novalidate onsubmit="return validateLoginForm()">
                    <fieldset class=".Log_fieldset">
                    <label for="email">Email: </label>
                        <input type="text" name="email" id="email" value="">
                        <span id="emailError" class="error" style="color: red;"></span>
                        <hr>
                        <label for="password"> Password:</label>
                        <input type="password" name="password" id="password" value="">
                        <span id="passwordError" class="error" style="color: red;"></span>
                        <hr>
                        <hr>
                        <label for="remember_me">
                            <input type="checkbox" name="remember_me" id="remember_me" <?php echo isset($_COOKIE['user_email']) ? 'checked' : ''; ?>>
                            Remember Me
                        </label>
                        <hr>
                        <a class="Log_a" href="forgot.php">Forgotten password?</a>
                        <br>
                        <hr>
                        <input class="_Log_input_" type="submit" name="login" id="login" value="Login">
                        <br>
                        <hr>
                        <h4 class="p">Donot have an Account..!!<a class="Log_a" href="registration.php">Registration here</a></h4>
                    </fieldset>

                    <div id="errorMessages" style="color: red;"></div>

                </form>

                
            </td>
        </tr>
    </table>

</body>

</html>
<?php include('footer.php'); ?>
