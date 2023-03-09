<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=agencedevoyage', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    die('erreur db');
}