<?php
require_once 'config/config.php';
if(!isset($title)) {
    $title = 'Welcome to Job in Lao';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
<<<<<<< HEAD
    <?php
if (isset($page_title)) {
    echo $page_title;
} else {
    echo "Job";
}
?>
  </title>
  <!-- link css here -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">
</head>
<body>
=======
      <?php echo $title; ?>
  </title>
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">
</head>
<body>
>>>>>>> test
