<?php
session_start();
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_name   = $_POST['item_name'];
    $location    = $_POST['location'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $user_id     = $_SESSION['user_id'];

    // Handle file upload
    $image_path = '';
    if (isset($_FILES['item_image']) && $_FILES['item_image']['error'] === 0) {
        $image_name = basename($_FILES['item_image']['name']);
        $target_dir = "../uploads/";
        $image_path = $target_dir . time() . "_" . $image_name;

        // Create uploads folder if not exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        move_uploaded_file($_FILES['item_image']['tmp_name'], $image_path);
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO lost_items (user_id, item_name, location, description, item_image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $user_id, $item_name, $location, $phone, $description, $image_path);

    if ($stmt->execute()) {
        echo "<script>
            alert('Lost item reported successfully!');
            window.location.href='../dashboard.php';
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
