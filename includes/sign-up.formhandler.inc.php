<?php

// when you not outputing data into the browser it is not "Dangerous" at least for now, but if you output it then you need to sanitize it


if( $_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);

    // $stmt->execute([
    //   ":username" => $username,
    //   ":pwd" => $pwd,
    //   ":email" => $email,
    // ]);

    $stmt->execute();

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