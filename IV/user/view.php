<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Management</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/view.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>
<?php
$id = $_GET['table'];

$sql = "SELECT * FROM package WHERE id=$id";
$result = $con -> query($sql);

// Associative array
$row = $result -> fetch_assoc();

// Free result set
$result -> free_result();

$con -> close();

?>
<!-- SECTION START -->

<section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="<?php echo "../admin/uploads/".$row['image']; ?>" class="slide">
        </div>
        <p><?php echo $row["Description"]; ?></p>     
      </div>
      <div class="right">
        <h3><?php echo $row["Name"]; ?></h3>
           
        <h5>Source</h5>
        <div class="color flex1">
          <p><?php echo $row["Source"]; ?></p>
        </div>
        <h5>Destination</h5>
        <div class="color flex1">
          <p><?php echo $row["Destination"]; ?></p>
        </div>
        <h5>Population</h5>
        <div class="color flex1">
          <p><?php echo $row["Population"]; ?></p>
        </div>
        <h5>Duration</h5>
        <div class="color flex1">
          <p><?php echo $row["Duration"]; ?></p>
        </div>
        <h5>Budget</h5>
        <div class="color flex1">
          <p><?php echo "&#8377;".$row["Budget"]; ?></p>
        </div>
        <a href="#"><button>Contact</button></a>
        </div>
    </div>
  </section>

<!-- SECTION END -->

</body>
</html>