<?php
$title = 'Sign up';
include_once 'header.php';
?>
 
 <h3>Sign Up</h3>
  <input name="gender" type="radio" value="F" id="f">
  <label for="f">Female </label>
  <input name="gender" type="radio" value="M" id="m">
  <label for="m">Male</label>

  <input type="text" placeholder="Fullname">
  <input type="text" placeholder="Email">
  <input type="text" placeholder="Username">
  <input type="password" placeholder="Password">
  <input type="text" placeholder="Phone">
  <input type="date" placeholder="Birthday">
  <textarea name="" placeholder="Address"></textarea>

<?php
include_once 'footer.php';
?>

