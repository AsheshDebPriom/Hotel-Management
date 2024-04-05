<?php
include 'config.php';
session_start();

$emptyInput = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? test_input($_POST['name']) : '';

    if (empty($name)) {
        $emptyInput = true;
    }

    if ($emptyInput) {
        header('Location: notice.php');
        exit();
    }

    $sql = "INSERT INTO notice (name)
            VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: notice.php");
    exit();
}
?>
