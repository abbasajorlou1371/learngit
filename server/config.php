<?php

define('SERVER', 'localhost');
define('USR', 'root');
define('PASS', '');
define('DB', 'test');

try {
    $conn = new PDO('mysql:host='.SERVER.";dbname=".DB, USR, PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    echo 'connected!';
} catch(PDOException $e) {
    echo "Err: " . $e->getMessage();
}