<?php

// data source name.  Information about the database we are connecting to
$dsn = "mysql:host=localhost;dbname=contacts_db";
// credentials
$dbusername = "root";
$dbpassword = "";

try {
    // connecting to database through pdo connection
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}