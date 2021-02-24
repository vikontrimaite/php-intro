<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        // info apie gautus duomenis
        var_dump($_POST["fname"]);
        var_dump($_POST["lname"]);

        // gautu duomenu formatavimas
        print ('Sveiki! Jus esate ' . $_POST["fname"]) . ' ' . ($_POST["lname"]);

        // isset() 
        print '<br>';
        if(isset($_POST['lname'])){
            print("<pre>Hello " . $_POST['lname'] . "!</pre>");
        }
    ?>

    <form action="" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="Vardas"><br>
        
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Submit">
        <!-- id nera butinas, uztenka ir name, kuris yra svarbesnis -->
    </form>
</body>
</html>