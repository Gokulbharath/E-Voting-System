<?php
session_start();
include 'db.php';

// Check if the user is logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $ward_number = (int)$_POST['ward_number'];

    // Insert the candidate into the database
    $sql = "INSERT INTO candidates (name, ward_number) VALUES ('$name', '$ward_number')";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the admin panel with success message
        header("Location: admin.php?message=Candidate added successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
