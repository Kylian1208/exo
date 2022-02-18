<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datenaissance = $_POST['datenaissance'];

echo ("Bonjour $nom $prenom votre date de naissance est le  $datenaissance<br>");

$aujourdhui = date("Y-m-d");
$diff = date_diff(date_create($datenaissance), date_create($aujourdhui));

$age = $diff->format('%y');

if ($age >= 18) {echo ("Vous avez 18 ans ou plus<br><br> vous allez être redirigé"); 

    ?>
<meta http-equiv="refresh" content="2;url=//amazon.com">
    <?php


}

 else {echo ("Vous avez moins de 18 ans <br><br> vous allez être redirigé");
    
    ?>
    <meta http-equiv="refresh" content="2;url=//disneyplus.com/">
        <?php

}


    ?>
</body>
</html>