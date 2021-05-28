<!DOCTYPE html>

<?php
include 'data/class.pdogsb.php';
/* création de l'objet $pdo d'accès aux données*/
$pdo = PdoGsb::getPdoGsb();
?>
<html>
    <head>
        <title>Gestion des frais</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        ok gsb
    <?php
    /* test d'accès aux données*/
        $ligne = $pdo->getInfosVisiteur('a131');
        echo $ligne['nom'];
    ?>  

    </body>


</html>