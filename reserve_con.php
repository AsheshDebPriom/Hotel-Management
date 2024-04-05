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
    $date = isset($_POST['date']) ? test_input($_POST['date']) : '';
    $time = isset($_POST['time']) ? test_input($_POST['time']) : '';
    $room_type = isset($_POST['room_type']) ? test_input($_POST['room_type']) : '';

    if (empty($name) || empty($date) || empty($time) || empty($room_type)) {
        $emptyInput = true;
    }

    if ($emptyInput) {
        header('Location: reservation.php');
        exit();
    }

    $sql = "INSERT INTO reserve (name, date, time, room_type)
            VALUES ('$name', '$date', '$time', '$room_type')";

    if ($conn->query($sql) === TRUE) {
        header("Location: logout.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: reservation.php");
    exit();
}
?>
