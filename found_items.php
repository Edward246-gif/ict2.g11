<?php
session_start();
include 'includes/session.php';
include 'includes/db_connect.php';

// Handle search input
$search = '';
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $query = $conn->query("SELECT * FROM found_items WHERE item_name LIKE '%$search%' OR location LIKE '%$search%' ORDER BY created_at DESC");
} else {
    $query = $conn->query("SELECT * FROM found_items ORDER BY created_at DESC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Found Items | UDOM Lost and Found</title>
    <style>
        body {
            background-color: #e1f1fc;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .logo {
            width: 60px;
            height: 60px;
            vertical-align: middle;
        }

        nav {
            background-color: #004080;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .item {
            margin-bottom: 30px;
        }

        .item img {
            max-width: 150px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        footer {
            background-color: #cde0f2;
            color: black;
            text-align: center;
            padding: 12px;
            margin-top: 30px;
        }

        h2 {
            color: #003366;
            text-align: center;
        }

        .item h3 {
            margin-bottom: 5px;
            color: #004080;
        }

        .item p {
            margin: 8px 0;
        }

        .item a {
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
        }

        .item a:hover {
            text-decoration: underline;
        }

        .search-form {
            text-align: center;
            margin-bottom: 25px;
        }

        .search-form input[type="text"] {
            padding: 8px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-form button {
            padding: 8px 16px;
            background-color: #004080;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #002f66;
        }
    </style>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="UDOM Logo" class="logo">
        <h1>UDOM LOST AND FOUND SYSTEM</h1>
        <p>Found Items Listing</p>
    </header>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="report_lost.php">Report Lost</a>
        <a href="report_found.php">Report Found</a>
        <a href="found_items.php">Found Items</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <h2>Recently Reported Found Items</h2>

        <!-- Search Form -->
        <form method="GET" class="search-form">
            <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search by item name or location">
            <button type="submit">Search</button>
        </form>

        <?php if ($query->num_rows > 0): ?>
            <?php while ($item = $query->fetch_assoc()): ?>
                <div class="item">
                    <h3><?= htmlspecialchars($item['item_name']) ?></h3>
                    <img src="uploads/<?= htmlspecialchars($item['item_image']) ?>" alt="Found item image">
                    <p><?= nl2br(htmlspecialchars($item['description'])) ?></p>
                    <small><strong>Location:</strong> <?= htmlspecialchars($item['location']) ?> <br> 
                           <strong>Date:</strong> <?= htmlspecialchars($item['created_at']) ?></small><br><br>
                    <a href="claim_item.php?id=<?= $item['id'] ?>">👉 Claim This Item</a>
                </div>
                <hr>
            <?php endwhile; ?>
        <?php else: ?>
            <p style="text-align:center; color:red;">No items found matching your search.</p>
        <?php endif; ?>
    </div>

    <footer>
        Developed by G11 &copy; 2025 | All rights reserved | Version 2.0
    </footer>
</body>
</html>
