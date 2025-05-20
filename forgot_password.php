<!-- forgot_password.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>
    body { background-color: #eef; font-family: sans-serif; padding: 50px; }
    form { background: #fff; padding: 30px; border-radius: 10px; width: 400px; margin: auto; box-shadow: 0 0 10px #aaa; }
    input, button { padding: 10px; width: 100%; margin-bottom: 15px; }
  </style>
</head>
<body>
  <form action="includes/send_reset_link.php" method="POST">
    <h2>Forgot Password</h2>
    <label for="email">Enter your registered email:</label>
    <input type="email" name="email" required placeholder="Your Email">
    <button type="submit">Send Reset Link</button>
  </form>
</body>
</html>
