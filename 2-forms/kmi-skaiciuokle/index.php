<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaičiuoklė</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sveiki!</h1>
    <p>Į lentelę įveskite savo duomenis:</p>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(!isset($_POST['ugis']) || empty($_POST['ugis']))
            print('<h3 style="color: pink">Įrašykite savo ūgį!</h3>');
          if(!isset($_POST['svoris']) || empty($_POST['svoris']))
            print('<h3 style="color: pink">Įrašykite svorį!</h3>');
        }
      ?>

        <form action="" method="POST">
            <label for="ugis">Jūsų ūgis</label>
            <input type="text" id="ugis" name="ugis" placeholder="1.77" value="<?php if(isset($_POST['ugis'])) print($_POST['ugis']) ?>"> 
            <br>
            <label for="svoris">Jūsų svoris</label>
            <input type="text" id="svoris" name="svoris" placeholder="66" value="<?php if(isset($_POST['svoris'])) print($_POST['svoris']) ?>">
            <br>
            <input type="submit" value="Skaičiuoti">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ugis = $_POST['ugis'];
                $svoris = $_POST['svoris'];

                function calcKMI ($ugis, $svoris) {
                    if (gettype($_POST['ugis']) == "double" AND gettype($_POST['svoris']) == "integer") {
                    $kmi = $ugis / ($svoris ** 2); 

                    if ($kmi <= 18.5) {
                        $output = "Under Weight";
                        } else if ($kmi > 18.5 AND $kmi<=24.9 ) {
                        $output = "Normal Weight";
                        } else if ($kmi > 24.9 AND $kmi<=29.9) {
                        $output = "Over Weight";
                        } else if ($kmi > 30.0) {
                        $output = "OBESE";
                        }
    

                    }
                    print "Jūsų KMI yra " . $kmi . " ir jis yra " . $output;
                    return $kmi;
                }
            
                // $kmi = $kmi ($ugis, $svoris);
                
                    
            }
      ?>

        
            <p>Kokia KMI svorio indekso reikšmė?</p>
            <div class="isvados">
                <div class="kmi-block">
                    <h1>KMI</h1>
                    <p>
                    mažiau kaip 18.5 <br>
                    18.5 ir daugiau, mažiau kaip 25 <br>
                    25 ir daugiau, mažiau kaip 30 <br>
                    30 ir daugiau
                    </p>
                </div>
                <div class="reiksme-block">
                    <h1>Reikšmė</h1>
                    <p>
                    nepakankamas svoris <br>
                    normalus svoris <br>
                    antsvoris <br>
                    nutukimas
                    </p>
                </div>
            </div>
</body>
</html>