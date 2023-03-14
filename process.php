<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // store form data in session variable
    $_SESSION['form_data'] = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );

    // redirect to display page
    header('Location: display.php');
    exit;
}
?>
