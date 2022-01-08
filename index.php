<?php
session_start();
$title = 'Job in Laos';
include_once 'header.php';
?>
  <h3>Home Page</h3>
  <div>
    <?php
if (isset($_SESSION['fullname'])) {
    echo '<h3>Welcome ' . $_SESSION['fullname'] . '</h3>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<a href="sign-in.php">Sign In</a>|
              <a href="sign-up.php">Sign Up</a>';
}
?>
  </div>

  <?php
include_once 'footer.php';
?>