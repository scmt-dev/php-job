<?php
session_start(); // start session
// check admin
if ($_SESSION['role'] !== 'admin') {
    header('location: ../index.php');
}
include_once '../header.php';
?>
<h2>Admin</h2>
<a href="job-type.php">Manage Job type</a>
<?php
include_once '../footer.php';
?>