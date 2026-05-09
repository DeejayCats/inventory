<?php
require 'config/db.php';

try {
    $db = getDB();
    $result = $db->query('SELECT COUNT(*) as user_count FROM users');
    $row = $result->fetch();
    echo "SUCCESS: Connected to inventory_db\n";
    echo "Users table: " . $row['user_count'] . " records\n";
    echo "Database is ready for the app!\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
