<?php

include 'connection.php';

$id =  $_GET['id'];
$table = $_GET['table'];

$sql = "DELETE FROM $table WHERE id=$id";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
  if($table == "register") { $location = "../student.php"; }
  else { $location = "../package.php"; }
  header('Location: '.$location);
} else {
  echo "Error deleting record: " . $conn->error;
}

?>