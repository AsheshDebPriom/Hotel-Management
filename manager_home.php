<?php include('header.php'); ?>
<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['manager_name'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body class="Body_Css">
    <b><p>Welcome Manager </p></b>
    <b><p>Your Details: </p></b><hr>
    <b><p>Your name is <?php echo $_SESSION['manager_name'] ?></p></b><br>
    <b><p>Your Email is <?php echo $_SESSION['manager_email'] ?></p></b><hr>
    <h1><a href="update_manager_form.php">Profile Update</a><br><br></h1>
    <h1><a href="reservation.php">Reservation</a><br><br></h1>
    <h1><a href="notice.php">Notice</a><br><br></h1>

    <form method="post" action="logout.php" novalidate>
        <input type="submit" name="logout" value="Logout"><br>
    </form>
</body>

</html>
<?php include('footer.php'); ?>
