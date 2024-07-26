<?php
/*
 * Copyright (c) 2017 António 'Tó' Godinho <to@isec.pt>.
 * Copyright (c) 2018 JP P
 * This program is free software; Distributed under the terms of the GNU GPL v3.
 */


$starttime = microtime();
$startarray = explode(" ", $starttime);
$starttime = $startarray[1] + $startarray[0];

include './config.php';
include './functions.php';
include './colours.php';

if (isset($_COOKIE['OpenArmordbjs']) && $glb_OpenArmordb[$_COOKIE['OpenArmordbjs']] <> '' && file_exists('./' . $glb_OpenArmordb[$_COOKIE['OpenArmordbjs']])) {
    # If a database cookie is set AND it exists in $glb_OpenArmordb[] AND the database file exists
    $useOpenArmordb = './' . $glb_OpenArmordb[$_COOKIE['OpenArmordbjs']];
} else {
    # Otherwise just use the main one
    $useOpenArmordb = './' . $glb_OpenArmordb['Main'];
}

include $useOpenArmordb;

?>
