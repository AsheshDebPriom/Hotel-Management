<?php
include 'config.php';

session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$emptyInput = false;

if (isset($_POST['login'])) {

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $rememberMe = isset($_POST['remember_me']);

    if ($email == "" || $password == "") {
        $_SESSION['emptyemail'] = true;
        $emptyInput = true;
        header('location: login.php');
        exit();
    }

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_pass'] = $password;

            // Set cookie if "Remember Me" is checked
            if ($rememberMe) {
                setcookie('user_email', $email, time() + (30 * 24 * 3600)); // 30 days
                setcookie('user_pass', $password, time() + (30 * 24 * 3600));
            }

            header('location:admin_home.php');
        } elseif ($row['user_type'] == 'customer') {
            $_SESSION['customer_id'] = $row['id'];
            $_SESSION['customer_name'] = $row['name'];
            $_SESSION['customer_email'] = $row['email'];
            $_SESSION['customer_pass'] = $password;

            // Set cookie if "Remember Me" is checked
            if ($rememberMe) {
                setcookie('user_email', $email, time() + (30 * 24 * 3600)); // 30 days
                setcookie('user_pass', $password, time() + (30 * 24 * 3600));
            }

            header('location:customer_home.php');
        } elseif ($row['user_type'] == 'manager') {
            $_SESSION['manager_id'] = $row['id'];
            $_SESSION['manager_name'] = $row['name'];
            $_SESSION['manager_email'] = $row['email'];
            $_SESSION['manager_pass'] = $password;

            // Set cookie if "Remember Me" is checked
            if ($rememberMe) {
                setcookie('user_email', $email, time() + (30 * 24 * 3600)); // 30 days
                setcookie('user_pass', $password, time() + (30 * 24 * 3600));
            }

            header('location:manager_home.php');
        }
    }

    $conn->close();
}
?>
