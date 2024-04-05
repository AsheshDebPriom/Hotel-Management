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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manager Profile</title>
   <link rel="stylesheet" href="style.css">
</head>

<body class="U_body">
   <fieldset>
      <form name="regform" onsubmit="return validateForm();" action="manager_profile_update.php" method="POST" novalidate>
         <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['manager_id'] ?>">

         <label>Name</label>
         <input type="text" name="name" id="name" value="<?php echo $_SESSION['manager_name'] ?>"><br><hr>

         <label>E-mail</label>
         <input type="text" name="email" id="email" value="<?php echo $_SESSION['manager_email'] ?>"><br><br><hr>

         <label>Password</label>
         <input type="password" name="password" id="password" value="<?php echo $_SESSION['manager_pass'] ?>">

         <input type="submit" name="update" value="Update">

         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
      </form>

      <form method="post" action="logout.php" novalidate>
         <input type="submit" name="logout" value="Logout"><br>
      </form>
   </fieldset>
   <br>
   <br>
   <br>
   <br>
   <br>
</body>

</html>
<?php include('footer.php'); ?>
