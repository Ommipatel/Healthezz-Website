<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/Login.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="navbar">
        <a href="Homepage.html"><img src="../logo.png" alt="Logo"></a>
        <a href="Workout.html"><span>Workouts</span></a>
        <a href="Dietary.php"><span>Dietary</span></a>
        <a href="BMICalc.html"><span>BMI</span></a>
        <a href="Forum.php"><span>Forum</span></a>
        <a href ="Create_Acc.php"><img src="../user.png" alt="Logo"></a>
    </div>

<?php
session_start();

$servername = "talsprddb02.int.its.rmit.edu.au";
$username = "COSC3046_2402_G7";
$password = "8fNBpjoSuE4W";
$dbname = "COSC3046_2402_G7";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = array();

if(isset($_POST['submit'])) {

    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['mail'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone'];
    $Address = $_POST['address'];
    $Password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[]="Invalid email address. Please enter a valid email address.";
    }
    
    $statement = $conn->prepare("SELECT * FROM User WHERE email =?");
    $statement->bind_param("s", $email);
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows > 0) {
        $message[]="Email address already exists. Please use a different email address.";
    }

    $statement = $conn->prepare("SELECT * FROM User WHERE phone =?");
    $statement->bind_param("s", $phone_no);
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows > 0) {
        $message[]= "Phone number already exists. Please use a different phone number.";
    }

    if($Password !== $confirm_password){
        $message[]="Passwords do not match.";
    }

    if(!empty ($message)){
        $_SESSION['message']= $message;
    } else {

    $hash_password = password_hash($Password, PASSWORD_DEFAULT);

    $statement = $conn->prepare("INSERT INTO User (first_name, last_name, email, dob, gender, phone,  address, password)VALUES (?,?,?,?,?,?,?,?)"); 

    $statement->bind_param("ssssssss", $firstname, $lastname, $email, $dob, $gender, $phone_no, $Address, $hash_password);

    $statement->execute();

    unset($_SESSION['message']);

    echo "<h5 class='account-created'>Account created successfully!<h5>";
    }
}
$conn->close();

if (isset($_SESSION['message']) && isset($_POST['submit'])) {
    echo '<div class="errors">';
    foreach ($_SESSION['message'] as $message) {
        echo '<h4 class="error_msg">' . $message . '</h4>';
    }
    echo '</div>';
    unset($_SESSION['message']); 
}

if(isset ($_SESSION['email'])){
    echo "<div class='create-acc-very-big-container'>
    <div class='create-acc-container'>
    <h2 class='welcome_session'>Welcome back, {$_SESSION['email']}!</h2></div></div>";
}

?>

<div class="create-acc-very-big-container">
<div class="create-acc-big-container">
<div class="create-acc-container">
<div class="login_title">  
    <h2>Create Account</h2>
</div>
<form class="create-acc-form" method="POST" action="">
                
    <label for="first-name">First Name:</label>    
    <input type="text" name="first-name" id="first-name" required>
            
    <label for="last-name">Last Name:</label>
    <input type="text" name="last-name" id="last-name" required>
            
    <label for="mail">Email Address:</label>
    <input type="email" id="mail" name="mail" required>
            
    <label for="DOB">Date of Birth:</label>
    <input type="date" id="DOB" name="DOB" required>
            
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Prefer Not To Say</option>
    </select>
        
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" maxlength="10" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>
        
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
            
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
            
    <input type="submit" class="submitButton" name="submit" value="Register">
<form>
    <h4>Already have an account ? <a href ="LogIn.php">Sign In</a></h4>
</div>
</div>
<div>
<div>

<div class="footer">
        <a href="Legal.html">Legal Compliance</a>
        <a href="AboutUs.html">About Us</a>
        <a href="TermsAndConditions.html">Terms & Conditions</a>
        <p>&copy; 2024 Healthezz | All Rights Reserved</p>
</div>
</body>
</html>