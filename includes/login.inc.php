<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $pwd = $_POST["pwd"];

  try {

    require_once "dbh.inc.php";
    require_once "login_model.inc.php";
    require_once "login_contr.inc.php";

    // ERROR HANDLERS

    $errors = [];

    if (isInputEmpty($username, $pwd)) {
      $errors["emptyInput"] = "Fill in all fields!";
    }

    $result = getUser($pdo, $username);

    if (isUsernameWrong($result)) {

      $errors["emptyInput"] = "Incorrect login info!";
    }

    if (isUsernameWrong($result) && isPwdWrong($result, $result["pwd"] ?? '')) {

      $errors["emptyInput"] = "Incorrect login info!";
    }

    require_once 'config_session.inc.php';

    if($errors) {
      $_SESSION["errorsLogin"] = $errors;

      header("Location: ../login.php");
      die();
    }

    $newSessionId = session_create_id();
    $sessionId = $newSessionId. "_" . $result["id"];
    session_id($sessionId);

    $_SESSION["userId"] = $result["id"];
    $_SESSION["username"] = htmlspecialchars($result["username"]); 

    $_SESSION["last_regeneration"] = time();

    header("Location: ../login.php?login=success");
    $pdo = null;
    $stmt = null;

    die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {

  header("Location: ../login.php");
  die();
}