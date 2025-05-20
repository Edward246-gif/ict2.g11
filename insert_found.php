<?php
include 'db.php'; // Or wherever your DB connection is

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $image_name = $_FILES['item_image']['name'];
    $image_tmp = $_FILES['item_image']['tmp_name'];

    // Check if image was uploaded
    if (move_uploaded_file($image_tmp, "../uploads/" . $image_name)) {
        $sql = "INSERT INTO found_items (item_name, location, phone, description, image_path)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $image_path = "uploads/" . $image_name;
        $stmt->bind_param("sssss", $item_name, $location, $phone, $description, $image_path);

        if ($stmt->execute()) {
            echo "Found item reported successfully!";
            header("Location: ../found_items.php");
            exit();
        } else {
            echo "Failed to insert item: " . $stmt->error;
        }
    } else {
        echo "Image upload failed.";
    }
} else {
    echo "Invalid request.";
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
