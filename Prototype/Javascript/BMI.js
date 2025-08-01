function calculateBMI() {
    var weightInput = parseFloat(document.getElementById("weight").value);
    var heightInput = parseFloat(document.getElementById("height").value); // height and weight input

    if (weightInput >= 2 && weightInput <= 635 && heightInput >= 54 && heightInput <= 272) {
        var heightInMeters = heightInput / 100;
        // BMI formula
        var bmi = weightInput / (heightInMeters * heightInMeters);
        
        // Determine bmi rating
        var category = "";
        var color = "";
        if (bmi < 18.5) {
            category = "Underweight";
            color = "blue";
        } else if (bmi >= 18.5 && bmi <= 24.9) {
            category = "Healthy Weight";
            color = "green";
        } else if (bmi >= 25 && bmi <= 29.9) {
            category = "Overweight";
            color = "orange";
        } else if (bmi >= 30) {
            category = "Obese";
            color = "red";
        }

        var resultDiv = document.getElementById("result");
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "<strong style='color: " + color + ";'>BMI: " + bmi.toFixed(2) + " (" + category + ")</strong>";
    } else {
        // Error handling for range
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "<strong style='color: red;'>Please enter a valid weight and height.</strong>";
    }
}