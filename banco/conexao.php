<?php
$utf8 = header("Content-Type: text/html; charset=utf-8");

$server = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'db_tap';

$link = new mysqli($server, $user, $pass, $db_name);
$link -> set_charset('utf8');