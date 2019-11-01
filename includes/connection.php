<?php
// Creating connection to Database
$host = '127.0.0.1';
$db   = 'article_cms';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try{
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    // If there is an issue connecting to the database, an error will be thrown
    exit('Database error.');
}
?>