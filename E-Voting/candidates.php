<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM candidates";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Candidates</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
             background: url('ele1.jpeg') no-repeat center center fixed;
            background-size: cover;
            padding: 0;
        }
        h2 { 
            color: #333; 
            text-align: center; 
            padding: 20px 0; 
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .candidate-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .candidate-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .candidate-card h3 {
            margin: 10px 0 5px 0;
            font-size: 18px;
        }
        .candidate-card p {
            margin: 5px 0;
            color: #777;
        }
        .back-link {
            display: block;
            margin: 20px auto;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Candidate List</h2>
    <div class="container">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="candidate-card">
            <img src="person.png" alt="Candidate Image">
            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            <p>ID: <?php echo htmlspecialchars($row['id']); ?></p>
            <p>Ward Number: <?php echo htmlspecialchars($row['ward_number']); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
    <a class="back-link" href="dashboard.php">Back to Dashboard</a>
</body>
</html>

