<?php
session_start();
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: url('e2.jpeg') no-repeat center center fixed;
            background-size: cover; 
            margin: 0; 
            padding: 0; 
        }
        .navbar {
            background-color: blue;
            overflow: hidden;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            font-size: 18px;
            padding: 10px 0;
        }
        .navbar a {
            float: right;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #0056b3;
        }
        .navbar a.e-voting {
            float: left;
            font-weight: bold;
            margin-left: 20px;
	    font-size: 30px;
        }
        .container {
            width: 80%;
            margin: auto;
            padding-top: 100px;
        }
        h2 { 
            color: #333; 
            text-align: center; 
            margin-bottom: 40px;
        }
        .note {
            background: #fff; 
            padding: 20px; 
            margin: 20px 0; 
            border-radius: 5px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .note h3 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .note p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .diagram {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }
        .step {
            background: #e6f7ff;
            padding: 20px;
            border-radius: 5px;
            width: 18%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .step h4 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .step p {
            font-size: 14px;
        }
        .arrow {
            font-size: 24px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#" class="e-voting">𝓔-𝓥𝓞𝓣𝓘𝓝𝓖</a>
        <a href="logout.php" style="float:right;">Logout</a>
	<a href="about.html">About</a>
	<a href="candidates.php">Candidates</a>
	<a href="vote.php">Vote</a>
	<a href="dashboard.php">Home</a>
    </div>
    <div class="container">
        <h2>Welcome to the E-Voting System</h2>
        <div class="note">
            <h3>📚 What is an Election?</h3>
            <p>An election is a formal group decision-making process by which a population chooses an individual to hold public office. Elections have been the usual mechanism by which modern representative democracy has operated since the 17th century. They may fill offices in the legislature, sometimes in the executive and judiciary, and for regional and local government. This process ensures that the government reflects the will of the people, promoting democracy and enabling citizens to have a voice in their governance. 🗳️</p>
        </div>

        <div class="note">
            <h3>🗳️ Election Process</h3>
            <div class="diagram">
                <div class="step">
                    <h4>Step 1</h4>
                    <p>Registration 📝</p>
                </div>
                <div class="arrow">➡️</div>
                <div class="step">
                    <h4>Step 2</h4>
                    <p>Campaigning 🎤</p>
                </div>
                <div class="arrow">➡️</div>
                <div class="step">
                    <h4>Step 3</h4>
                    <p>Voting 🗳️</p>
                </div>
                <div class="arrow">➡️</div>
                <div class="step">
                    <h4>Step 4</h4>
                    <p>Counting 📊</p>
                </div>
                <div class="arrow">➡️</div>
                <div class="step">
                    <h4>Step 5</h4>
                    <p>Results 🎉</p>
                </div>
            </div>
            <p style="margin-top: 20px;">The election process typically involves several steps. First, eligible citizens register to vote. Political parties and candidates then campaign to win the support of the electorate. On election day, voters cast their ballots, either in person, by mail, or through electronic systems. Votes are then counted, and the results are announced. The candidate or party with the majority of votes wins. The entire process is designed to be fair and transparent, ensuring that every vote counts and that the elected officials are truly representative of the people's will. 📊</p>
        </div>
</body>
</html>