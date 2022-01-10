<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche des employés</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Fiche Employé</h1>

<?php
    require './Class/Employe.php';

    
    $employe = new Employe('gentes','amandine',34,'female','CDI');
  
    echo $employe -> afficher_employe();
     
    $employe-> getAge();
    $employe-> getContract();



?>

</main>
</body>
</html>

