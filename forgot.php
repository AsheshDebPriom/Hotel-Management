<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  <h2>Enter your security key</h2>
  <form action="login.php" method="post" nonvalidate>
    <label for="name">security key:</label>
    <input type="text" id="name" name="name">
    <button type="submit">submit</button><br>
    <form method="post" action="logout.php" novalidate>
        <input type="submit" name="logout" value="Logout"><br>
    </form>
</body>
</html>
<?php include('footer.php'); ?>