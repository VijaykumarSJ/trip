<?php

$name = $_POST['name'];
$desc = $_POST['desc'];
$file = $_FILES["picture"]["name"];
$source = $_POST['source'];
$destination = $_POST['destination'];
$duration = $_POST['duration'];
$population = $_POST['population'];
$budget = $_POST['budget'];
$contact = $_POST['contact'];

include 'connection.php';

$uploadDirectory = "../uploads/";

if (move_uploaded_file(
    $_FILES["picture"]["tmp_name"],
    $uploadDirectory . $_FILES["picture"]["name"]
    )) {
    echo "File uploaded successfully!";
} else {
    echo "Error moving file.";
}

    $sql = "INSERT INTO package(Name , Description, image, Source, Destination, Duration, Population, Budget, Contact) VALUES('$name','$desc','$file','$source','$destination','$duration','$population','$budget','$contact')";

    if($con->query($sql)===TRUE)
    {
        header('location: ../package.php');
    }
    else
    {
        echo "Error : ".$con->error;
    }