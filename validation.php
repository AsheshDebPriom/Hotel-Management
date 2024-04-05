<?php
 include 'config.php';
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$user_type = $_POST['user_type'];
$emptyInput = false;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($name == "") {
  $emptyInput=true;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      header('location:registration.php');
	  $emptyInput=true;
    }
  }

  if (empty($_POST["email"])) {

  $emptyInput=true;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('location:registration.php');
    $emptyInput=true;
	}
  }



  if (empty($_POST["password"])) {
  
  $emptyInput=true;
  } 
   if(
    $password = test_input(strlen($_POST["password"])<='8'))
	{
  
  $emptyInput=true;
   
  }

 if (empty($_POST["user_type"])) {
  
  } else {
    $user_type = test_input($_POST["user_type"]);
  }


if ($emptyInput) {
    header('location:registration.php');
} 
if ($_POST["password"]!=$_POST['cpassword']) {

        header('location:registration.php');
} else if($_POST["password"]=$_POST['cpassword'])
{
 
$password = test_input($_POST["password"]);

	  

$sql = "INSERT INTO users (name, email,password,user_type)
VALUES ('$name', '$email','$password','$user_type')";

if ($conn->query($sql) === TRUE) {
  
header("Location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	  
	  
	  
  }
  
  
}


?>
