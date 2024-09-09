<?php  include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Management</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- CARD START -->
    <ul class="cards">
         <?php
                        $sql = "SELECT * FROM package";
                    
                        $result = $con->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                            $timestamp = strtotime($row['created_at']);
                      ?>
  <li>
    <a href="view.php?table=<?php echo $id=$row['id']; ?>" class="card">
      <img src="../admin/uploads/<?php echo $row["image"];?>" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="../admin/uploads/<?php echo $row["image"];?>" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><?php echo $row["Name"]; ?></h3>            
            <span class="card__status">uploaded at <?php echo date('d-m-Y', $timestamp); ?></span>
          </div>
        </div>
        <p class="card__description"><?php echo $row["Description"]; ?></p>
      </div>
    </a>      
  </li>
  <?php
                          }
                        }
                          else {
                            echo "0 results";
                          }
                          $con->close();
                    ?>
  </ul>
    <!-- CARD END -->
</body>
</html>