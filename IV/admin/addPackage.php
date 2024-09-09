<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/addPackage.css">
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
             <div class="content">
            <div class="register-container">
    <div class="title">Add</div>
    <div class="content">
      <form action="config/insertpackage.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter package name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="Enter package description" name="desc" required>
          </div>
          <div class="input-box">
            <span class="details">Source</span>
            <input type="text" placeholder="Enter package source" name="source" required>
          </div>
          <div class="input-box">
            <span class="details">Destination</span>
            <input type="text" placeholder="Enter package destination" name="destination" required>
          </div>
          <div class="input-box">
            <span class="details">Duration</span>
            <input type="text" placeholder="Enter Duration" name="duration" required>
          </div>
          <div class="input-box">
            <span class="details">Population</span>
            <input type="text" placeholder="Enter Population" name="population" required>
          </div>
          <div class="input-box">
            <span class="details">Budget</span>
            <input type="text" placeholder="Enter Budget" name="budget" required>
          </div>
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="text" placeholder="Enter Contact Details" name="contact" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="picture" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Add">
        </div>
      </form>
    </div>
  </div></div>
            <!-- CONTENT END -->
         </div>
    </div>
</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>