<?php
// connect database
$db = new mysqli("localhost", "root", "root", "job");

// Check connection
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}
