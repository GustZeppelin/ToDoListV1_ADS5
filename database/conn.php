<?php

$hostname = 'localhost';
$database = 'to_do_list';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}