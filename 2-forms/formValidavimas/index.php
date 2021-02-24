<?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(!isset($_POST['fname']) || empty($_POST['fname']))
            print('<h3 style="color: yellow">Please enter your first name!</h3>');
          if(!isset($_POST['lname']) || empty($_POST['lname']))
            print('<h3 style="color: yellow">Please enter your last name!</h3>');
        }
      ?>
      <form action="" method="POST">
          <label for="fname">Enter your first name:</label><br>
          <input type="text"  id="<?php echo 'fname'; ?>"  name="fname" value="<?php if(isset($_POST['fname'])) print($_POST['fname']) ?>">
           <br>
          <label for="lname">Enter your last name:</label><br>
          <input type="text" id="lname" name="lname" value="<?php if(isset($_POST['fname'])) print($_POST['lname']) ?>">
           <br>
          <input type="submit" value="Submit">
      </form>

      <?php
        print '<br>';
        if(isset($_POST['fname']) && isset($_POST['lname'])) {
            print("<pre>Hello " . $_POST['fname'] . ' ' . $_POST['lname'] . "!</pre>");
        }
      ?>
