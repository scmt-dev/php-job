<?php
require_once '../config/db.php';
$mode = $_GET['mode'] ?? '';

// insert job type
if(isset($_POST['job_type'])) {
  $job_type = $_POST['job_type'];
  $sql = "INSERT INTO job_types (type_name) VALUES (?)";
  $stmt = $db->prepare($sql);
  $stmt->bind_param('s', $job_type);
  $stmt->execute();
  $id = $stmt->insert_id;
  $sql = "select * from job_types where id=$id";
  $result = $db->query($sql);
  $row = $result->fetch_object();
  $data = [
    'data' => $row,
    'message'=> 'Successfully added',
    'status'=> 'success',
  ]; 
  header('Content-Type: application/json');
  echo json_encode($data);
  exit();
}

$sql = "SELECT * FROM job_types where inactive=0";
$result = $db->query($sql);

$data = $result->fetch_all(MYSQLI_ASSOC);

header('Content-Type: application/json');
$data = [
    'data' => $data,
    'status' => 'success',
];
echo json_encode($data);