<html>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['name'])) {
                    echo "Name is empty";
                } else {
                    echo 'Welcome ' . $_POST["name"] . '<br>';
                }
                
            $email = $_REQUEST['email'];
                if (empty($email)) {
                    echo "Name is empty";
                } else {
                    echo 'Your email address is: ' . $email;
                }

                // abu šie variantai galimi ir veikia!
        }
    ?>
</body>
</html>