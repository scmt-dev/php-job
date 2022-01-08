<?php
$title = 'Sign up';
include_once 'header.php';
?>
 
 <h3>Sign Up</h3>
  <input name="gender" type="radio" value="F" id="f">
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
