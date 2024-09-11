<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials (this is just a simple example, you should hash and salt passwords in a real application)
    if ($username == 'admin' && $password == '123') {
        $_SESSION['user_id'] = 1; // Assuming admin user_id is 1
        header("Location: admin.php");
        exit();
    } else {
        header("Location: admin_login.php");
        exit();
    }
}
?>
