<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>

<body class="N_body">
    <h1>Notice</h1>
    <form class="N_form" action="notice_con.php" method="post" novalidate onsubmit="return Notice()">
    <label for="name">Write Notice: </label>
                        <input type="text" name="name" id="name" value="">
                        <span id="nameError" class="error" style="color: red;"></span>
                        <hr>
                        
        <button type="submit">Create Notice</button>

        <div id="errorMessages" style="color: red;"></div>
    </form>
    <form method="post" action="logout.php" novalidate>
        <input type="submit" name="logout" value="Logout"><br>
    </form>
</body>

</html>
<?php include('footer.php'); ?>
