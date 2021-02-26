<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php 
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
            $data = trim($data); # trim — Strip whitespace (or other characters) from the beginning and end of a string
            $data = stripslashes($data);
            $data = htmlspecialchars($data); # The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
            return $data;
        }
    ?>

    <!-- the form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. -->
        <label for="name">Name:</label>
        <input type="text" name="name"> <br>

        <label for="email">E-mail:</label>
        <input type="text" name="email"> <br>

        <label for="website">Website:</label>
        <input type="text" name="website"> <br>

        <label for="comment">Comment:</label>
        <textarea name="comment" rows="5" cols="40"></textarea> <br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <br>

        <input type="submit">
    </form>

    <!-- print the gotten values -->
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>