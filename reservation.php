<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation System</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>

<body class="R_body" >
    <h1>Reservations</h1>
    <h2>Create Reservation</h2>
    <form class="R_form" action="reserve_con.php" method="post" novalidate onsubmit="return ReserveForm()">
       
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" value="">
                        <span id="nameError" class="error" style="color: red;"></span>
                        <hr>

                        <label for="date">Date: </label>
                        <input type="date" name="date" id="date" value="">
                        <span id="dateError" class="error" style="color: red;"></span>
                        <hr>

                        <label for="time">Time: </label>
                        <input type="time" name="time" id="time" value="">
                        <span id="timeError" class="error" style="color: red;"></span>
                        <hr>

        <h3>Rooms:</h3>
                        <select name="room_type">
                            <option value="premium_double">Premium Double(Per day 2000)</option>
                            <option value="double">Double(Per day 1500)</option>
                            <option value="premium_single">Premium Single(Per day 1000)</option>
                            <option value="single">Single(Per day 800)</option>
                        </select>
                        <br>

        <button type="submit">Create Reservation</button>
        <div id="errorMessages" style="color: red;"></div>
    </form>
    <form method="post" action="logout.php" novalidate>
        <input type="submit" name="logout" value="Logout"><br>
    </form>
</body>

</html>
<?php include('footer.php'); ?>
