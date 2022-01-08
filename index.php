<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jobs In Lao</title>
</head>
<body>
  <h3>Home Page</h3>
  

  <div>
    <?php
      if (isset($_SESSION['fullname'])) {
          echo '<h3>Welcome ' . $_SESSION['fullname'] . '</h3>';
          echo '<a href="logout.php">Logout</a>';
      }else {
        echo '<a href="sign-in.php">Sign In</a>|
              <a href="sign-up.php">Sign Up</a>';
      }
    ?>
  </div>
</body>
</html>