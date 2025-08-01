<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/Login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
        <!-- navigation bar to homepage -->
    <div class="navbar">
    <a href="Homepage.html"><img src="../logo.png" alt="Logo"></a>
    <a href="Workout.html"><span>Workouts</span></a>
    <a href="Dietary.php"><span>Dietary</span></a>
    <a href="BMICalc.html"><span>BMI</span></a>
    <a href="Forum.php"><span>Forum</span></a>
    <a href ="Login.php"><img src="../user.png" alt="Logo"></a>
    </div>

    <div class="login-container">
        <div class="login-content">

        <div class="forgot-pwd-title">
            <h2>Forgot Password</h2>
            <p>Enter your email address and we'll send you a recovery link.</p>
        </div>
    
        <form class=form>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
    
            <input class="submitButton" type="Submit" value="Submit">
        <form>
    
        <!-- Turn button into image of arrow using <img src=""alt="" -->
        <div class="login-back-button">
            <a href="Login.php">
            <button type="button" class="login-back-button">Back</button>
            </a>
        </div>
    </div>
</div>

<div class="footer">
    <a href="Legal.html">Legal Compliance</a>
    <a href="AboutUs.html">About Us</a>
    <a href="TermsAndConditions.html">Terms & Conditions</a>
    <p>&copy; 2024 Healthezz | All Rights Reserved</p>
</div>

</body>
</html>