<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/Forum.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
</head>
<body>

    <div class="navbar">
        <a href="Homepage.html"><img src="../logo.png" alt="Logo"></a>
        <a href="Workout.html"><span>Workouts</span></a>
        <a href="Dietary.php"><span>Dietary</span></a>
        <a href="BMICalc.html"><span>BMI</span></a>
        <a href="Forum.php"><span>Forum</span></a>
        <a href="Create_Acc.php"><img src="../user.png" alt="Logo"></a>
    </div>


<div class="header_container">
    <div class="post-header">
        <h1>Create New Post</h1>
        <!--Reminder: Create pop-up warning that content wont be saved-->
        <a href="Forum.php">
            <button type="button" class="backButton">Back</button>
        </a>
    </div>
</div>

    <form class="post-form" method="POST" action="">
        <input type="text" id="postTitle" name="postTitle" class="post-same-width" placeholder="Title">
        <textarea id="postText" name="postText" class="post-same-width" placeholder="Type here..." rows="4"></textarea>

        <div class="form-actions">
            <div class="post-toolbar">
                <button><b>B</b></button>
                <button><u>U</u></button>
                <button><i>I</i></button>
                <button><s>S</s></button>
            </div>
        <input type="Submit" class="post-submitButton" name="submit" value="submit">
        </div>
    </form>

    <!--Need help with style buttons-->
<!-- <div id="format-buttons">
    <button onclick="applyFormat('bold')">Bold</button>
    <button onclick="applyFormat('italic')">Italic</button>
    <button onclick="applyFormat('underline')">Underline</button>
    <button onclick="clearFormat()">Clear Formatting</button>
</div> -->

    <div class="footer">
        <a href="Legal.html">Legal Compliance</a>
        <a href="AboutUs.html">About Us</a>
        <a href="TermsAndConditions.html">Terms & Conditions</a>
        <p>&copy; 2024 Healthezz | All Rights Reserved</p>
    </div>

    <script src="Forum.js"></script>
</body>
</html>