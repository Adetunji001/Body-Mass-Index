<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        // Validate input (ensure that weight and height are numeric and greater than 0)
        if (!is_numeric($weight) || !is_numeric($height) || $weight <= 0 || $height <= 0) {
            echo "Invalid input. Please make sure weight and height are positive numeric values.";
        } else {
            // Calculate BMI
            $bmi = $weight / ($height * $height);

            // Round BMI to one decimal place
            $bmi = round($bmi, 1);

            echo "Your BMI is: $bmi<br>";

            // Interpret BMI value
            if ($bmi < 18.5) {
                echo "You are underweight.";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                echo "You have a healthy weight.";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                echo "You are overweight.";
            } else {
                echo "You are obese.";
            }
        }
    }
    ?>




<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
    <h1>BMI Calculator</h1>
    <form method="post" action="calculate_bmi.php">
        <label for="weight">Weight (kg):</label>
        <input type="text" name="weight" id="weight" required><br>

        <label for="height">Height (m):</label>
        <input type="text" name="height" id="height" required><br>

        <input type="submit" value="Calculate BMI">
    </form>

    
    </body>
</html>

</body>
</html>
