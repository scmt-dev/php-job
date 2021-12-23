<<<<<<< HEAD
<?php include_once 'header.php';?>

<div class="div-center" style="width:300px">
<form action="" methed="post">
  <h2>Sign In</h2>
  <input name="username" type="text" placeholder="Username" class="w100 my-1" required>
  <input name="password" type="password" placeholder="Username" class="w100" required>

  

  <button name="signin" value="signin" class="my-1">Sign in</button>
</form>
</div>

<?php include_once 'footer.php';?>
=======
<?php
$title = 'Sign in';
include_once 'header.php';
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Sign In">
</form>   

<?php
include_once 'footer.php';
?>

>>>>>>> test
