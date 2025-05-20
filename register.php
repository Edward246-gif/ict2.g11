<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration | e-Matokeo</title>
    <style>
       
 body {
    background-color: lightblue;
    font-family: 'Segoe UI', sans-serif;
}

.top-bar {
    background-color: #002147;
    color: white;
    padding: 5px 15px;
    font-size: 13px;
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
.navbar {
    background-color: #004080;
}

.navbar-nav .nav-link {
    color: white !important;
    padding: 10px 15px;
}
        footer {
    background-color:rgb(202, 223, 235);
    color: black;
    text-align: center;
    padding: 10px;
    margin-top: 30px;
}


        .container {
            max-width: 400px;
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

        input, select {
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
        <img src="data:image/png;base64,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" alt="UDOM Logo" class="logo">
    <h1>UDOM LOST AND FOUND ITEMS MANAGEMENT SYSTEM</h1> 
       
        <p>Lost and Found | Registration Portal</p>
    </header>

    <div class="container">
        <h2>User Registration</h2>
        <form action="includes/user_register.php" method="POST" id="registrationForm">
            <input type="text" name="username" id="username" required placeholder="Full Name">
            <input type="email" name="email" id="email" required placeholder="Email">
            <input type="text" name="phone" id="phone" required placeholder="Phone Number">
            <input type="password" name="password" id="password" required placeholder="Password">
            <select name="college" id="college" required>
                <option disabled selected>Select College</option>
                <option>CIVE</option>
                <option>COED</option>
                <option>COESE</option>
                <option>CHSS</option>
                <option>CNMS</option>
                <option>CI&IDS</option>
                <option>SOMD&SONPH</option>
            </select>
            <button type="submit">Register</button>
        </form>
        <a href="index.php">Back to Home</a>
    </div>

    <footer>
        <p>
    Developed by G11 &copy; 2025 | All rights reserved | Version 2.0</p>
    </footer>

    <script>
        // Simple form validation
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const phone = document.getElementById('phone').value;
            if (!/^[0-9]{10}$/.test(phone)) {
                alert('Please enter a valid 10-digit phone number.');
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
