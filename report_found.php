<?php
session_start();
include 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report Found Item | e-Matokeo</title>
    <style>
        body {
            background-color: lightblue;
            font-family: 'Segoe UI', sans-serif;
        }

        .logo {
            width: 80px;
            height: 80px;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px 40px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        footer {
            background-color: rgb(202, 223, 235);
            color: black;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #003366;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            background-color: #003366;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005599;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
            color: #003366;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <img src="data:image/png;base64,..." alt="UDOM Logo" class="logo">
        <h1>UDOM LOST AND FOUND ITEMS MANAGEMENT SYSTEM</h1>
        <p>Lost and Found | Report Found Item</p>
    </header>
<form>
    <div class="container">
        <h2>Report a Found Item</h2>
        <form action="includes/insert_found.php" method="POST" enctype="multipart/form-data" id="foundItemForm">
            <input type="text" name="item_name" id="found_item_name" required placeholder="Item Name">
            <input type="text" name="location" id="found_location" required placeholder="Where it was found">
             <input type="text" name="phone" id="Phone_Number" required placeholder="Phone Number">
            <textarea name="description" id="found_description" required placeholder="Item Description"></textarea>
            <input type="file" name="item_image" id="found_image" accept="image/*" required>
            <button type="submit">Report Found Item</button>
        </form>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>

    <footer>
        <p>Developed by G11 &copy; 2025 | All rights reserved | Version 2.0</p>
    </footer>

    <script>
        document.getElementById('foundItemForm').addEventListener('submit', function(e) {
            const itemName = document.getElementById('found_item_name').value.trim();
            const location = document.getElementById('found_location').value.trim();
            const description = document.getElementById('found_description').value.trim();

            if (!itemName || !location || !description) {
                alert('Please fill in all fields properly.');
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
