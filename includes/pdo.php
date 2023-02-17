<?php
// Set database credentials
$host = 'localhost:3306';
$dbname = 'pdo';
$username = 'root';
$password = '';

// Create PDO object
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


