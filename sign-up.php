<?php
$title = 'Sign up';
require_once 'config/db.php'; // link database

$message = '';

if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $bday = $_POST['date'];
    $address = $_POST['address'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users 
    (id,gender,phone,email,username,password,fullname,birthday,address) 
     VALUES (?,?,?,?,?,?,?,?,?)";
    // insert data
    $id  = time();
    $stmt = $db->prepare($sql);
    $stmt->bind_param('issssssss', $id, $gender,$phone,$email,$username,$password,$fullname,$bday,$address);
    $check = $stmt->execute();

    if($check){
      $message = 'Sign up Success';
    }else{
      $message = 'Sign up Fail!';
    }
}

include_once 'header.php';
?>

 <h3>Sign Up</h3>
 <form method="post" action="">
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
    <div class="alert">
      <?php echo $message; ?>
    </div>
  </form>
</div>

<style>
  .alert{
    background-color: #eee;
    padding:10px;
    border-radius: 5px;
    border:1px solid #eee;
  }
</style>


<?php include_once 'footer.php';?>
