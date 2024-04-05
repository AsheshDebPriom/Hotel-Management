<?php include('header.php'); ?>
<?php
include 'config.php';

error_reporting(0);
$rn = $_GET['rn'];
?>

<html>

<head>
 <link rel="stylesheet" href="style.css">
</head>

<body class="D_body">
    <form class="D_form" method="post" action="delete_user.php" novalidate>
        <fieldset>
            <label for="id">ID:</label>
            <br>
            <input type="text" name="id" id="id" value="<?php echo "$_GET[rn]" ?>">
            <hr>

            <label for="name">Name:</label>
            <p><?php echo $nameErr;?></p>
            <br>
            <input type="text" name="name" id="name" value="<?php echo "$_GET[na]" ?>">
            <hr>

            <label for="email">Email:</label>
            <p><?php echo $emailErr;?></p>
            <br>
            <input type="text" name="email" id="email" value="<?php echo "$_GET[em]" ?>">
            <hr>

            <label for="user_type">User:</label>
            <select name="user_type">
                <option value="customer">Customer</option>
                <option value="manager">Manager</option>
                <option value="admin">Admin</option>
            </select>
            <hr>

            <input type="submit" name="Delete" value="Delete">
        </fieldset>
    </form>
</body>

</html>
<?php include('footer.php'); ?>
