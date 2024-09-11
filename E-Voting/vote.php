<?php
session_start();
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $candidate_id = $_POST['candidate_id'];
    $user_id = $_SESSION['user_id'];

    // Debugging output
    echo "<p>User ID: $user_id</p>";
    echo "<p>Candidate ID: $candidate_id</p>";

    // Insert the vote into the database
    $sql = "INSERT INTO votes (user_id, candidate_id) VALUES ('$user_id', '$candidate_id')";
    if ($conn->query($sql) === TRUE) {
        // Update the vote count in the results table
        $update_sql = "UPDATE results SET vote_count = vote_count + 1 WHERE candidate_id = '$candidate_id'";
        if ($conn->query($update_sql) === TRUE) {
            echo "<p>Vote cast successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error updating vote count: " . $conn->error . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Error inserting vote: " . $conn->error . "</p>";
    }
}

// Fetch candidates from the database
$sql = "SELECT * FROM candidates";
$result = $conn->query($sql);
if ($result === FALSE) {
    die("Error fetching candidates: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <style>
        body { 
            font-family: Arial, sans-serif;  
            background: url('b.png') no-repeat center center fixed;
            background-size: cover; 
        }
        h1 { 
            color: #fff; 
            text-align: center; 
            font-size: 50px;
        }
        h2 { 
            color: #fff; 
            text-align: center; 
            font-size: 30px;
        }
        .container { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: center; 
        }
        .candidate { 
            background: #fff; 
            padding: 20px; 
            border-radius: 5px; 
            margin: 10px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
            cursor: pointer; 
            text-align: center; 
            width: 200px; 
        }
        .candidate:hover { 
            background-color: #e6f7ff; 
        }
        .candidate.selected { 
            background-color: #007bff; 
            color: white; 
        }
        input[type="submit"] { 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: white; 
            border: none; 
            cursor: pointer; 
            margin: 20px auto; 
            display: block; 
        }
        input[type="submit"]:hover { 
            background-color: #0056b3; 
        }
        a { 
            display: block; 
            margin-top: 10px; 
            text-align: center; 
            color: #007bff; 
            text-decoration: none; 
        }
    </style>
    <script>
        function selectCandidate(candidateId) {
            document.querySelectorAll('.candidate').forEach(candidate => {
                candidate.classList.remove('selected');
            });
            document.getElementById('candidate_' + candidateId).classList.add('selected');
            document.getElementById('candidate_id').value = candidateId;
        }
    </script>
</head>
<body>
    <h1>VOTE</h1>
    <h2>"Vote with your heart, choose with your mind."</h2>
    <form method="post">
        <div class="container">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="candidate" id="candidate_<?php echo $row['id']; ?>" onclick="selectCandidate(<?php echo $row['id']; ?>)">
                    <p><?php echo $row['name']; ?></p>
                    <p>Ward: <?php echo $row['ward_number']; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
        <input type="hidden" id="candidate_id" name="candidate_id" required>
        <input type="submit" value="Vote">
    </form>
    <a href="login.php">Back</a>
</body>
</html>
