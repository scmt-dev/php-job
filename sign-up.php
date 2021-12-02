
<?php include_once 'header.php';?>


<style>
.c2 {
  display:grid;
  grid-template-columns: 1fr 1fr;

  align-items: start;
}
</style>

<div class="div-center" style="width:300px">
<div class="c2">
<h3>Sign Up</h3>
<div>
<a href="sign-in.php">Sign In</a>
</div>
</div>
<hr>
  <form action="" method="post">
  <input name="gender" type="radio" value="F" id="f" required>
  <label for="f">Female </label>
  <input name="gender" type="radio" value="M" id="m"  required>
  <label for="m">Male</label>
  Fullname
  <input name="fullname" type="text" placeholder="Fullname" class="w100 my-1" required>
  <input name="email" type="text" placeholder="Email" class="w100" required>
  <input name="username" type="text" placeholder="Username" class="w100 my-1" required>
  <input name="password" type="password" placeholder="Password" class="w100" required>
  <input name="phone" type="text" placeholder="Phone" class="w100 my-1">
  <input name="date" type="date" placeholder="Birthday" class="w100">
  <textarea name="address" placeholder="Address" class="w100 my-1"></textarea>
  <button name="submit" type="submit" value="submit">Submit</button>

  </form>
</div>


<?php include_once 'footer.php';?>

