<?php include('header.php'); ?>
<?php
session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "";
}
if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = "";
}
if (!isset($_SESSION['password'])) {
    $_SESSION['password'] = "";
}
if (!isset($_SESSION['cpassword'])) {
    $_SESSION['cpassword'] = "";
}
if (!isset($_SESSION['user_type'])) {
    $_SESSION['user_type'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>

<body class="Reg_body">
    <table class="Reg_table">
        <tr>
            <td>
                <form class="Reg_form" method="post" action="validation.php" novalidate onsubmit="return validateForm()">
                    <fieldset>
                        <label for="name">Name: </label>
                        <br>
                        <input type="text" name="name" id="name" value="">
                        <span id="nameError" class="error" style="color: red;"></span>
                        <hr>
                        <label for="email">Email: </label>
                        <input type="text" name="email" id="email" value="">
                        <span id="emailError" class="error" style="color: red;"></span>
                        <hr>
                        <label for="password"> Password:</label>
                        <input type="password" name="password" id="password" value="">
                        <span id="passwordError" class="error" style="color: red;"></span>
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" name="cpassword" id="cpassword" value="">
                        <span id="cpasswordError" class="error" style="color: red;"></span>
                        <hr>
                        <h3>User:</h3>
                        <select name="user_type" id="user_type">
                            <option value="customer">Customer</option>
                            <option value="manager">Manager</option>
                            <option value="admin">Admin</option>
                        </select>
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <h4>Already have an Account???<a href="login.php">Login Here</a></h4>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>

<?php include('footer.php'); ?>
</html>
