<?php

// $dsn = "mysql:host=localhost;dbname=php_review";
$host = "localhost";
$dbname = "php_review";
$dbusername = "root";
$dbpassword = "";

try {

  // $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

