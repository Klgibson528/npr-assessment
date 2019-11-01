<?php
$host = '127.0.0.1';
$db   = 'article_cms';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try{
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    exit('Database error.');
}
?>