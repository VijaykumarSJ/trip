<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Management</title>
    <link rel="stylesheet" href="css/input.css">
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <div class="main">
            <div id="heading"><h2>Traveling!</h2></div>
                <form action="" method="post" class="login-form" autocomplete="off">
                    <div class="input-group">
                        <label for="text">Number Of Students</label>
                        <input type="text" name="name" required autocomplete="off">
                    </div>

                    <div class="input-group">
                        <label for="text">Number Of Days</label>
                        <input type="number" autocomplete="off" name="days" required>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>