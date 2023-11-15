<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'test-akticom';

$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
