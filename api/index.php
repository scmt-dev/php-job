<?php

$data  = [
  'data'=> 'Welcome to API V1',
  'status'=> 'success',
];
header('Content-Type: application/json');
echo json_encode($data);

?>