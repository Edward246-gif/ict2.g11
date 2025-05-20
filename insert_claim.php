<!-- 7. /includes/insert_claim.php – Handle Item Claims (optional page logic)-->

<?php
session_start();
include 'db_connect.php';

if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO claims (user_id, item_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $item_id);
    $stmt->execute();

    header("Location: ../found_items.php?claimed=1");
}
?>
