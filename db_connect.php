<!--1. /includes/db_connect.php – Database Connection-->

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lost_and_found";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
