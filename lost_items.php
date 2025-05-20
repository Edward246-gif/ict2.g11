<?php
session_start();
include 'includes/session.php';
include 'includes/db_connect.php';

$query = $conn->query("SELECT * FROM lost_items ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lost Items | UDOM Lost & Found</title>
    <style>
        body {
            background-color: #e6f0fa;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #004080;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 30px;
        }
        .item {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        .item img {
            max-width: 150px;
            height: auto;
            border-radius: 5px;
        }
        footer {
            background-color: #c2d6e2;
            padding: 10px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<header>
    <h1>UDOM LOST AND FOUND ITEMS MANAGEMENT SYSTEM</h1>
    <p>Lost Items Portal</p>
</header>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="report_lost.php">Report Lost</a>
    <a href="found_items.php">View Found</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Lost Items</h2>
    <?php while ($item = $query->fetch_assoc()): ?>
        <div class="item">
            <h3><?= htmlspecialchars($item['item_name']) ?></h3>
            <img src="uploads/<?= htmlspecialchars($item['item_image']) ?>" alt="Item Image"><br><br>
            <p><?= nl2br(htmlspecialchars($item['description'])) ?></p>
            <small>Lost at: <?= htmlspecialchars($item['location']) ?> | Date: <?= $item['created_at'] ?></small>
        </div>
    <?php endwhile; ?>
</div>

<footer>
    <p>Developed by G11 &copy; 2025 | All rights reserved | Version 2.0</p>
</footer>

</body>
</html>
