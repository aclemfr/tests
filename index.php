<!DOCTYPE html>
<html>


<?php

$nomPrenom = "Toto Man";
$userAge = 17;

?>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<!-- teston -->

<body>
    <h1>Ma page web</h1>
    // toto tititit
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <p> 01 Ton Nom & Prénom = <?php echo $nomPrenom ?>. Ton age = <?php echo $userAge ?>.</p>

    <?php echo "02 Ton Nom & Prénom = ";
    echo $nomPrenom;
    echo ". Ton age = ";
    echo $userAge;
    echo "."; ?>

    <br><br>
    <?php

    $userAge *=  6;
    echo "03 Ton Nom & Prénom =  $nomPrenom. Ton age = $userAge.";
    ?>


</body>


</html>