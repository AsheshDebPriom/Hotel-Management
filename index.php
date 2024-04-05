<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css">

</head>

<body class="in_body">

    <h2>Welcome!</h2>

    <div>
        <h4>Already have an Account? then click on login!</h4>
        <h4>Don't have an Account? then click on registration!</h4>

        <form class="in_form" method="post" action="login.php" novalidate>
            <input type="submit" value="Login">
        </form>

        <form class="in_form" method="post" action="registration.php" novalidate>
            <input type="submit" value="Registration">
        </form>
    </div>

</body>
</html>
<?php include('footer.php'); ?>
