<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'cart';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
