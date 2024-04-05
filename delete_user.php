<?php

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];

$sql = "DELETE FROM users WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: user_management.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}


?>