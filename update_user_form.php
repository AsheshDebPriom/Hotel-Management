<?php include('header.php'); ?>
<?php
include 'update_user.php';
?>

<?php
include 'config.php';
error_reporting(0);
$rn = $_GET['rn'];
$na = $_GET['na'];
$em = $_GET['em'];
$us = $_GET['us'];

?>

<html>
        
<head>
<link rel="stylesheet" href="style.css">
</head>

<body class="UU_body">
    <table class="UU_table">
        <tr>
            <td>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {

                            echo '<p>' . $error . '</p>';
                        };
                    };
                    ?><br>
                    <fieldset>
                        <label for="name">ID: </label>
                        <br>
                        <input type="text" name="id" id="id" value="<?php echo "$_GET[rn]" ?>">
                        <hr>

                        <label for="name">Name: </label>
                        <p><?php echo $nameErr;?></p>
                        <br>
                        <input type="text" name="name" id="name" value="<?php echo "$_GET[na]" ?>">
                        <hr>

                        <label for="email">Email: </label>
                        <p><?php echo $emailErr;?></p>
                        <br>
                        <input type="text" name="email" id="email" value="<?php echo "$_GET[em]" ?>">
                        <hr>

                        <label for="user_type">User:</label>
                        <select name="user_type">
                            <option value="customer" <?php if ($_GET['us'] == 'customer') echo 'selected="selected"'; ?>>Customer</option>
                            <option value="manager" <?php if ($_GET['us'] == 'manager') echo 'selected="selected"'; ?>>Manager</option>
                            <option value="admin" <?php if ($_GET['us'] == 'admin') echo 'selected="selected"'; ?>>Admin</option>
                        </select>
                        <hr>

                        <input type="submit" name="update" value="Update">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>
<?php include('footer.php'); ?>
