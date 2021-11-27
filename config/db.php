<?php
// db.php
$db = new mysqli("localhost", "root", "", "job");

// Check connection
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}
