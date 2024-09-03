<?php

// when you not outputing data into the browser it is not "Dangerous" at least for now, but if you output it then you need to sanitize it


if( $_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];

  try {
    require_once "dbh.inc.php";

    $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

    $stmt = $pdo->prepare($query);

    $stmt->execute([
      ":username" => $username,
      ":pwd" => $pwd,
    ]);

    $pdo = null;
    $stmt = null;

    header("Location: ../sign-up.php");

    die();


  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  header("Location: ../sign-up.php");
}