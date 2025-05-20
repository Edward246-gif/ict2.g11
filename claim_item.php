<?php
session_start();
include 'includes/session.php';
include 'includes/db_connect.php';

// Get current user's claims with item details
$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT found_items.item_name, found_items.location, found_items.description, found_items.item_image, found_items.created_at 
                         FROM claims 
                         JOIN found_items ON claims.item_id = found_items.id 
                         WHERE claims.user_id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Claimed Items | e-Matokeo</title>
    <style>
        body {
            background-color: lightblue;
            font-family: 'Segoe UI', sans-serif;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .claim {
            border-bottom: 1px solid #ccc;
            margin-bottom: 15px;
            padding-bottom: 15px;
        }
        img {
            width: 120px;
            border-radius: 5px;
        }
        a {
            text-decoration: none;
            color: #003366;
        }
        footer {
            background-color: rgb(202, 223, 235);
            color: black;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>UDOM LOST AND FOUND SYSTEM</h1>
        <p>My Claimed Items</p>
    </header>

    <div class="container">
        <h2>Items You Have Claimed</h2>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($item = $result->fetch_assoc()): ?>
                <div class="claim">
                    <h3><?= htmlspecialchars($item['item_name']) ?></h3>
                    <img src="uploads/<?= htmlspecialchars($item['item_image']) ?>" alt="Item Image"><br>
                    <p><strong>Your Phone Number:</strong> <?= htmlspecialchars($item['phone']) ?></p>

                    <p><strong>Description:</strong> <?= htmlspecialchars($item['description']) ?></p>
                    <p><strong>Found at:</strong> <?= htmlspecialchars($item['location']) ?></p>
                    <small><strong>Date Found:</strong> <?= htmlspecialchars($item['created_at']) ?></small>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>You haven't claimed any items yet.</p>
        <?php endif; ?>
        <br>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>

    <footer>
        <p>Developed by G11 &copy; 2025 | All rights reserved</p>
    </footer>
</body>
</html>
