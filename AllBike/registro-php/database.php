<?php

$server = 'localhost';
$username = 'id14782684_user';
$password = '<6zo\Dr^R)]}sj^A';
$database = 'id14782684_usuarios';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Conexión fallida: ' . $e->getMessage());
}

?>
