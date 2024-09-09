<?php include 'config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        
        <?php include 'base.php'; ?>

        <!-- main -->
         <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="user">
                    <img src="../images/bg-2.jpeg">
                </div>
            </div>

            <!-- CONTENT START -->
            <h1 class="content-title">Package <a href="addPackage.php"><i class="fa-solid fa-plus"></i></a> </h1>

            <table class="table_container">
                    <thead>
                      <tr>
                        <th><h1>S.No.</h1></th>
                        <th><h1>Name</h1></th>
                        <th><h1>Source</h1></th>
                        <th><h1>Destination</h1></th>
                        <th><h1>Duration</h1></th>
                        <th><h1>Population</h1></th>
                        <th><h1>Budget</h1></th>
                        <th><h1>Contact</h1></th>
                        <th><h1>Action</h1></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql = "SELECT * FROM package";
                    
                        $result = $con->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          $i = 1;
                          while($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td><?php echo $row["Source"]; ?></td>
                        <td><?php echo $row["Description"]; ?></td>
                        <td><?php echo $row["Duration"]; ?></td>
                        <td><?php echo $row["Population"]; ?></td>
                        <td><?php echo $row["Budget"]; ?></td>
                        <td><?php echo $row["Contact"]; ?></td>
                        <td>
                            <a href="config/deleteRecord.php?id=<?php echo $row["id"]; ?>"><i class="fa-solid fa-pen"></i></a>
                            <a href="config/deleteRecord.php?table=package&id=<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php
                          }
                        }
                          else {
                            echo "0 results";
                          }
                          $con->close();
                    ?></tbody>
                  </table>
            
            <!-- CONTENT END -->
         </div>
    </div>
</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>    