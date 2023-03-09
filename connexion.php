<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=agence_de_voyage', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    echo "erreur db";
}