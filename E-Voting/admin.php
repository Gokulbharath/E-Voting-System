<?php
session_start();
include 'db.php';

// Check if the user is logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body { font-family: Arial, sans-serif; background: url('ele2.jpeg') no-repeat center center fixed; background-size: cover; }
        h2 { color: #333; text-align: center; font-size: 40px; }
        .container { width: 80%; margin: auto; }
        .card { background: #fff; padding: 20px; margin: 20px 0; border-radius: 5px; }
        h1, a { display: block; margin-top: 10px; text-align: center; color: black; text-decoration: none; font-size: 30px; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Panel</h2>
        <div class="card">
            <h3>Add Candidate</h3>
            <form method="post" action="admin_add_candidate.php">
                <label for="name">Candidate Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="ward_number">Ward Number:</label>
                <input type="number" id="ward_number" name="ward_number" required><br><br>
                <input type="submit" value="Add Candidate">
            </form>
        </div>
        <h1>For Registering a New Person</h1>
        <a href="register.php">Register</a>
        <h1>For Result Checking</h1>
        <a href="results.php">Result</a>
    </div>
</body>
</html>
