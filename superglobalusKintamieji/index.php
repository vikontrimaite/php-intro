<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobalus kintamieji</title>
</head>
<body>
    <?php 
        var_dump($GLOBALS);
        print '<br>';
        print '------';

        var_dump($_SERVER);
        print '<br>';
        print '------';

        var_dump($_SERVER["HTTP_USER_AGENT"]);
        print '<br>';
        print '------';

        var_dump($_REQUEST);
        print '<br>';
        print '------';

        var_dump($_POST);
        print '<br>';
        print '------';

        var_dump($_GET);
        print '<br>';
        print '------';
    ?>
    <!-- <form action="" method="POST">
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Kuku"><br>
        <input type="submit" value="Submit">
    </form> -->
</body>
</html>