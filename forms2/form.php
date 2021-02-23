<!DOCTYPE html>
<html>
    <style></style>
    <link rel="stylesheet" href="styles.css">
    <body>
        <form action="index.php" method="POST">
            <label for="lname">Last name:</label><br>
            <input type="text" id="fname" name="xx" value="Doe"><br>
            <input type="submit" value="Submit with POST">
        </form>
        <form action="index.php" method="GET">
            <label for="lname">Last name:</label><br>
            <input type="text" id="fname" name="xx" value="Doe"><br>
            <input type="submit" value="Submit with GET">
        </form>
    </body>
</html>

<!-- kas keiciasi: 
su POST url nueina i index.php
su GET parodo issiusta reiksme url'e -->