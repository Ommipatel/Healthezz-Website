<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/dietary.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dietary</title>
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

    <div class="search">
        <form method="GET" action="">
            <input type ="text" placeholder="Search Food Name" id="search-engine" name="search-engine">
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
    
    <div class = "food-information">
    <?php
$servername = "talsprddb02.int.its.rmit.edu.au";
$username = "COSC3046_2402_G7";
$password = "8fNBpjoSuE4W";
$dbname = "COSC3046_2402_G7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search="";
if(isset ($_GET['search-engine'])){
    $search =trim($_GET['search-engine']);
}
if(!empty($search)){
$search = $conn->real_escape_string($search);

$sql = "SELECT `Food_Key`, `Classification`, `Food_Name`, 
`Energy_kJ`, `Protein_g`, `Fat_Total_g`, `Total_Fibre_g`, `Alcohol_g`, 
`Total_Sugars_g`, `Carbohydrate_g`
FROM dietary
WHERE `Food_Name` REGEXP '[[:<:]]" . $search . "[[:>:]]'";

$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Error: " . $conn->error;
} else if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr class='header'><th>Index</th><th>Food Name</th><th>Classification</th><th>Energy (kJ)</th><th>Protein (g)</th><th>Fat (g)</th><th>Dietary Fibre (g)</th><th>Alcohol (g)</th><th>Total Sugars (g)</th><th>Carbohydrate (g)</th></tr>";
    $count=1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $count++ . "</td>";
        echo "<td>" . $row["Food_Name"] . "</td>";
        echo "<td>" . $row["Classification"] . "</td>";
        echo "<td>" . $row["Energy_kJ"] . "</td>";
        echo "<td>" . $row["Protein_g"] . "</td>";
        echo "<td>" . $row["Fat_Total_g"] . "</td>";
        echo "<td>" . $row["Total_Fibre_g"] . "</td>";
        echo "<td>" . $row["Alcohol_g"] . "</td>";
        echo "<td>" . $row["Total_Sugars_g"] . "</td>";
        echo "<td>" . $row["Carbohydrate_g"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div class='error_text'>No result found for '".$search."'.The food name is incorrect or not found in database.</div>";
    }
} else if(isset($_GET['search-engine'])) {
    echo "<div class = 'error_text'>Please enter a Food Name</div>";
}


$conn->close();
?>

<div class="disclaimer">
    <p>The data displayed on this page is not ours, and sourced from "Food Standards Australia New Zealand". We do not own or manage this data and using it under public use. </p>
</div>

    <div class="footer">
        <a href="Legal.html">Legal Compliance</a>
        <a href="AboutUs.html">About Us</a>
        <a href="TermsAndConditions.html">Terms & Conditions</a>
        <p>&copy; 2024 Healthezz | All Rights Reserved</p>
    </div>
</body>
</html>