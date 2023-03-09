<?php
    include('connexion.php');
    include('classes/Manager.php');

    $manager = new Manager($pdo);

    $tos = $manager->getOperatorByDestination($_GET['location']);

    foreach($tos as $to) {
        echo "Nom du TO: " . $to['name'] . " - ";
        echo "Lien <a>" . $to['link'] . "</a><br>";
    }
?>
