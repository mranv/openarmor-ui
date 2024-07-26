<?php
/*
 * Copyright (c) 2017 António 'Tó' Godinho <to@isec.pt>.
 * Copyright (c) 2018 JP P
 * This program is free software; Distributed under the terms of the GNU GPL v3.
 */

 if (!defined('AUTH_USER_O')) {
    define('AUTH_USER_O', 'openarmor_user');         // Updated username
    define('AUTH_PASSWORD_O', 'password');           // Updated password
    define('AUTH_HOST_O', 'localhost');              // Host remains the same if MySQL is local
    define('AUTH_NAME_O', 'openarmor_db');  	
	}
$VERSION = "V3.0";
try {
    $pdo = new PDO('mysql:host=' . DB_HOST_O . ';dbname=' . DB_NAME_O . ';charset=utf8', DB_USER_O, DB_PASSWORD_O);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
