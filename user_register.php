<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $college = $_POST['college'];

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('User with this email already exists.'); window.history.back();</script>";
        exit();
    }

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, college) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $password, $college);

    if ($stmt->execute()) {
        header("Location: ../login.php?registered=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
