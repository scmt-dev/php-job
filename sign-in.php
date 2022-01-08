<?php
session_start(); // start session
$title = 'Sign in';
require_once 'config/db.php';
$message = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
   
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss', $username,$username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_object();
        $checkPassword = password_verify($password, $row->password);
        if ($checkPassword) {
            $_SESSION['fullname'] = $row->fullname;
            $_SESSION['id'] = $row->id;
            // redirect to home page
            header('Location: index.php');
        } else {
            $message = '<div class="alert alert-danger">Sing in Fail</div>';
        }
    } else {
        $message = '<div class="alert alert-danger">Sing in Fail</div>';
    }
}

include_once 'header.php';
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Username or Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Sign In">
    <div>
        <?php echo $message; ?>
    </div>
</form>

<?php
include_once 'footer.php';
?>