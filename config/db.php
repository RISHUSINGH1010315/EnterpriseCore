<?php
// config/db.php

$db_path = __DIR__ . '/../database/enterprise.db';

// Ensure database folder exists
if (!file_exists(__DIR__ . '/../database')) {
    mkdir(__DIR__ . '/../database', 0777, true);
}

try {
    $pdo = new PDO("sqlite:" . $db_path, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("SQLite connection failed: " . $e->getMessage());
}
