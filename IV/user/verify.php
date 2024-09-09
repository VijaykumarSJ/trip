<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db = "test";
$con = new mysqli($servername,$username,$pass,$db);
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}
$email =  $_POST['email'];
$password =  $_POST['password'];

$sql = "SELECT Id,Email,Password FROM register WHERE Email='$email' and Password = '$password'";

$result = $con->query($sql);
if ($result->num_rows > 0) 
{
  $row = $result->fetch_assoc();
  $id = $row['Id'];
  echo "Login";
  // $location = "home.php?id=".$id;
  header('Location: home.php');
} 
else {
  echo "Invalid Username or Password";
  echo "Logout";
  exit();
  // header('Location:signin.php');
}
?>