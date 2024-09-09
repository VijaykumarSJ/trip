<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $con=new mysqli('localhost','root','','test');
    if($con->connect_error)
    {
        die("Connection error : ".$con->connect_error);
    }
    $sql = "INSERT INTO register(Name , Email, Password) VALUES('$name','$email','$password')";
    if($con->query($sql)===TRUE)
    {
        header('location:index.php');
    }
    else
    {
        echo "Error : ".$con->error;
    }
?>