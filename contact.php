<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | UDOM Lost and Found</title>
  <style>
    body {
      background-color: #e6f0fa;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
    }
    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #004080;
      padding: 10px;
      display: flex;
      justify-content: center;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
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
      padding: 12px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 15px;
    }
    input[type="submit"] {
      background-color: #003366;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #005599;
    }
    footer {
      background-color: #c2d6e2;
      padding: 10px;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<header>
  <h1>UDOM LOST AND FOUND ITEMS MANAGEMENT SYSTEM</h1>
  <p>Contact Us</p>
</header>

<nav>
  <a href="index.php">Home</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="found_items.php">Found Items</a>
  <a href="lost_items.php">Lost Items</a>
</nav>

<div class="container">
  <h2>Send Us a Message</h2>
  <form action="backend/contact_action.php" method="post" id="contactForm">
    <input type="text" name="name" id="contact_name" required placeholder="Your Name">
    <input type="email" name="email" id="contact_email" required placeholder="Your Email">
    <textarea name="message" id="contact_message" required placeholder="Your Message" rows="5"></textarea>
    <input type="submit" value="Send Message">
  </form>
</div>

<footer>
  <p>Developed by G11 &copy; 2025 | All rights reserved | Version 2.0</p>
</footer>

</body>
</html>
