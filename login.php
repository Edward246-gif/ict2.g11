<!--3. login.php – Login Page -->

<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
   
    <style>
img {
    float: center;
    
}
        body{
          background-color:lightblue;
          justify-content: center;
         align-items: center;
         min-height: 6vh;  
        }
        h2,h3{
            text-align:center;
        }
        input{
            width: 300px;
            padding: 8px;
            font-size: 16px;
        }
       
        form{
        
        background-color: (255, 255, 255, 0.06);
        padding: 2em;
        height: 300px;
        border-radius: 15px;
        border-left: 300pxpx solid rgba(255, 255, 255, 0.3);
        border-top: 1px solid rgba(255, 255, 255, 0.3);
    
        margin: 50px 200px 50px 200px;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        box-shadow: 20px 20px 40px 60px rgba(0, 0, 0, 0.2);
        text-align: left;
        postion: relative;
        -webkit-translation: all 0.9s ease-in-out;
    }
    form input,
form textarea {
  padding: 10px;
  margin: 0 50px 10px 10px; padding:10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  width:80%;
  float:center;
}
login-btn:hover {
  background-color:rgb(69, 149, 235);
  float:center;
  width:100px; 
  font-size: 16px; 
  background-color: blue;
}
footer{
    text-align:center;
    background-color:rgb(202, 223, 235);
    width: 100%;
    padding: 15px;
}
    </style>
</head>
<body>
    <class="container">
<class="logo">
<img src="C:\Users\JUMA MAFUMBA\Downloads\220px-University_of_Dodoma.jpg" style="float:center; padding:10px;"><br>
    <h2>The University of Dodoma</h2>
    <form action="includes/user_login.php" method="POST">
    <h3>Lost and Found Self Service</h3>
    
        <label style="margin-left: 20px;">Username/ Email</label>
        <div class="input-group">
         <input type="email" name="email" id="login_email" required placeholder="Email" >
<span
    <class="icon">&#128100;</span>
</div>
    <label style="margin-left: 20px;">Password</label>
    <div class="input-group">
     <input type="password" name="password" id="login_password" required placeholder="Password">
<span
<class="icon">&#128274;</span>
</div><br>
        <button type="submit" style="width:30%; font-size: 16px; background-color:rgb(202, 223, 235);  margin: 0 50px 10px 10px; padding:10px">Login</button>
        <br><div class="link">
        <a href="register.php" style=" margin-left:20px;">Register Here</a><a href="#" style="float:right; margin: right 100px;0px;">Forgot Password</a>
</div>
    <p class="Contact" style="margin-left: 50px;">For Further Assistance Contact: 
    +255764096482  </p> 
    </form><br>
    </div>
    <script defer src="js/main.js"></script>
    <footer>
        <p class="version">Developed by G11 copywrite &copy2025 | All right reserved | Version No 2.0</p>
</footer>
</body>
</html>

