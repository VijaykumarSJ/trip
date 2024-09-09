<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Management</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="main">
        <div class="left">
            <h3>Traveling!</h3>
            <div class="form">
                <h4 id="heading">Details</h4>
                <form method="post" action="verify.php">
                    <!-- <input type="text" name="name" required placeholder="Enter Your Name"  /><br> -->
                    <input type="email" name="email" required placeholder="Enter Your Mail" /><br>
                    <input type="password" name="password" required placeholder="Enter Your Password" /><br>
                    <input type="submit" id="submit" value="Login"><br><br>
                    <h5> <a href="#" class="forget">Forgot Password?</a> <a href="index.php" class="sign-in">Sign-in</a> </h5>
                </form>
            </div>
        </div>
        <div class="right">   
            <div class="glass">
                <figure>
                    <img src="../images/bus1.png"/>
                    <img src="../images/bg-2.jpeg"/>
                    <img src="../images/bg1.png"/>
                    <img src="../images/bg-3.jpeg"/>
                    <img src="../images/bg-4.jpeg"/>
                </figure>      
            </div>
        </div>
    </div>
</body>
</html>