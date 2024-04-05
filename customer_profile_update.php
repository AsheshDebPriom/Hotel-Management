<?php
include 'config.php';
 session_start();

if(isset($_POST['update'])){



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $name =$_POST["name"];
   $email =$_POST["email"];
   $password =$_POST["password"];

$sql = "UPDATE users SET name='$name', email = '$email',password= '$password' WHERE id= $id";

if ($conn->query($sql) === TRUE) {



 $_SESSION['update'] = true;
 




header('location:login.php');




} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}
}


?>

