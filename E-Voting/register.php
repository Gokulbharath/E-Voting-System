<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; background: url('ele2.jpeg') no-repeat center center fixed;
            background-size: cover; }
        h2 { color: #333; text-align: center; }
        form { background: #fff; padding: 20px; border-radius: 5px; max-width: 400px; margin: auto; }
        input[type="text"], input[type="password"], input[type="email"] {
            padding: 8px; margin: 5px 0; width: 100%; box-sizing: border-box;
        }
        input[type="submit"] { padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #0056b3; }
        a { display: block; margin-top: 10px; text-align: center; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div>
    <h2>Register</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>
    <h1 style="text-align:center"><b>"Instead of using the Bullet, use the Ballot."<b></h1>
</div>
</body>
</html>
