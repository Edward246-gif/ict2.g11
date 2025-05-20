<!--2. /includes/session.php – Session Check-->

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
