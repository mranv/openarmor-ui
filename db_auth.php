<?php
/*
 * Copyright (c) 2018 JP P
 * This program is free software; Distributed under the terms of the GNU GPL v3.
 */

set_include_path(".:./php:./:../");

require_once 'auth/vendor/autoload.php';

// Define authentication constants if not already defined
if (!defined('AUTH_USER_O')) {
    define('AUTH_USER_O', 'openarmor_user');         // Updated username
    define('AUTH_PASSWORD_O', 'password');           // Updated password
    define('AUTH_HOST_O', 'localhost');              // Host remains the same if MySQL is local
    define('AUTH_NAME_O', 'openarmor_db');           // Updated database name
}

try {
    // Create a new PDO instance for database connection
    $pda = new PDO(
        'mysql:host=' . AUTH_HOST_O . ';dbname=' . AUTH_NAME_O . ';charset=utf8',
        AUTH_USER_O,
        AUTH_PASSWORD_O,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions on errors
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Set default fetch mode
            PDO::ATTR_PERSISTENT => true // Persistent connection
        ]
    );
} catch (PDOException $e) {
    // Output error message and stop execution
    echo 'Error: ' . $e->getMessage();
    exit("DB_AUTH ERROR");
}

// Initialize the authentication library
$auth = new \Delight\Auth\Auth($pda);

// Additional configuration or setup can go here

?>
