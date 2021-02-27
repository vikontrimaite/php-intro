<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
    <h1>Hello! Welcome to the BMI calculator!</h1>
    <p>Please eneter you data below:</p>
    
    <form action="" method="POST">
            <label for="height">Your height</label>
            <input type="text" id="height" name="height" maxlength="4" placeholder="1.77"> 
            <br>
            <label for="weight">Your weight</label>
            <input type="text" id="weight" name="weight" maxlength="3" placeholder="66">
            <br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['height'])) {
                echo '<p style="color: red; font-size: 18px; font-weight: bold">Please enter your height!</p><br>';
            } else {
                echo '<p>Your height is ' . $_POST['height'] . ' metres. ';
            }

            if (empty($_POST['weight'])) {
                echo '<p style="color: red; font-size: 18px; font-weight: bold">Please enter your weight!</p><br>';
            } else {
                echo 'Your weight is ' . $_POST['weight'] . ' kg.</p><br>';
            }

            $bmi = $_POST['weight'] / pow($_POST['height'], 2);
            $bmi = number_format($bmi, 2);

            if ($bmi <= 18.5) {
                echo "<p>Your BMI is $bmi and you're under weight.</p>";
                } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                    echo "<p>Your BMI is $bmi and you have normal weight.</p>";
                } else if ($bmi > 24.9 AND $bmi<=29.9) {
                    echo "<p>Your BMI is $bmi and you're over weight.</p>";
                } else if ($bmi > 30.0) {
                    echo "<p>Your BMI is $bmi and you have obese.</p>";
                }
        }
    ?>

</body>
</html>