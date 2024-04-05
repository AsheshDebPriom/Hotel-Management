<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body class="D_body">
    <?php
    include 'config.php';
    $sql = "SELECT id, name, email, user_type FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
        <tr> 
        <th>ID</th> 
        <th>Name</th> 
        <th>Email</th>
        <th>User Type</th>
        <th colspan='2' >Operation</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr > 
            <td>" . $row["id"] . "</td> 
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["user_type"] . "</td>
            <td><a href='update_user_form.php?rn=$row[id]&na=$row[name]&em=$row[email]&us=$row[user_type]'>Edit/Update</a></td>
            <td><a href='delete_user_form.php?rn=$row[id]&na=$row[name]&em=$row[email]&us=$row[user_type]'>Delete</a></td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
    <form  class="D_form" method="post" action="logout.php" novalidate>
        <input type="submit" name="logout" value="Logout"><br>
    </form>
</body>

</html>
<?php include('footer.php'); ?>
