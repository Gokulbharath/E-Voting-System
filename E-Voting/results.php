<?php
include 'db.php';

// SQL query to count votes for each candidate from the 'votes' table
$sql = "SELECT candidates.id, candidates.name, candidates.ward_number, 
        COUNT(votes.candidate_id) as vote_count
        FROM candidates
        LEFT JOIN votes ON candidates.id = votes.candidate_id
        GROUP BY candidates.id, candidates.name, candidates.ward_number";

$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <style>
        body { font-family: Arial, sans-serif; background: url('ele3.jpeg') no-repeat center center fixed; background-size: cover; }
        h2 { color: #333; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: center; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #ddd; }
        a { display: block; margin-top: 10px; text-align: center; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Results</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Ward Number</th>
            <th>Vote Count</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['ward_number']); ?></td>
            <td><?php echo htmlspecialchars($row['vote_count']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>
