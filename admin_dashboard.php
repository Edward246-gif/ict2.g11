<!--10. admin_dashboard.php – Admin Panel-->

<!-- admin_dashboard.php -->
<?php
session_start();
include 'includes/db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Admin Panel – Lost and Found</h2>
    <h3>Lost Items</h3>
    <?php
    $losts = $conn->query("SELECT * FROM lost_items");
    while ($lost = $losts->fetch_assoc()):
    ?>
        <div>
            <?= $lost['item_name'] ?> - <?= $lost['college'] ?> |
            <a href="uploads/<?= $lost['item_image'] ?>" target="_blank">View Image</a>
        </div>
    <?php endwhile; ?>
    
    <h3>Found Items</h3>
    <?php
    $founds = $conn->query("SELECT * FROM found_items");
    while ($found = $founds->fetch_assoc()):
    ?>
        <div>
            <?= $found['item_name'] ?> - <?= $found['college'] ?> |
            <a href="uploads/<?= $found['item_image'] ?>" target="_blank">View Image</a>
        </div>
    <?php endwhile; ?>
</body>
</html>
