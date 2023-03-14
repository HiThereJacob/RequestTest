<?php
session_start();

// retrieve form data from session variable
$form_data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data</title>
  </head>
  <body>
    <h1>Form Data</h1>
    <p>Name: <?php echo $form_data['name']; ?></p>
    <p>Email: <?php echo $form_data['email']; ?></p>
    <p>Message: <?php echo $form_data['message']; ?></p>
  </body>
</html>
