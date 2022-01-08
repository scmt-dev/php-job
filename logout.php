<?php
session_start();
session_destroy();
// go to sign-in.php
header('Location: sign-in.php');
?>