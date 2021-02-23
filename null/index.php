<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if it's NULL</title>
</head>
<body>
    <?php
        // $name = NULL;
        // $lastname = 'Kukaitis';
        // print $name ?? '<>' . $lastname;
        // print('<br>');

        $name = NULL; // jei vardas neįvestas
        $lastname = "Petraitis";
        print $name ?? '<>' . $lastname; // jeigu name yra NULL spausdnk viską po ??
        print($name == NULL ? '<>' . $lastname : $name); // tas pat

    ?>
</body>
</html>

