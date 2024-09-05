<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try {

    require_once 'dbh.inc.php';
    require_once 'login-signup_model.inc.php';
    require_once 'login-signup_contr.inc.php';

    // ERROR HANDLERS

    $errors = [];

    if (isInputEmpty($username, $pwd, $email)) {
      $errors["emptyInput"] = "Fill in all fields!";
    }

    if (isEmailInvalid($email)) {
      $errors["invalidEmail"] = "Invalid email used!";
    }

    if (isUsernameTaken($pdo, $username)) {
      $errors["usernameTaken"] = "Username already taken!";
    }

    if (isEmailRegistered($pdo, $email)) {
      $errors["emailUsed"] = "Email already registered!";
    }

    require_once 'config_session.inc.php';

    if($errors) {
      $_SESSION["errorsSignup"] = $errors;

      $signupData = [
        "username" => $username,
        "email" => $email,
      ];

      $_SESSION["signupData"] = $signupData;

      header("Location: ../login.php");
      die();
    }

    createUser($pdo, $username, $pwd, $email);
    header("Location: ../login.php?signup=success");

    $pdo = null;
    $stmt =null;

    die();


  } catch (PDOException $e) {
    
    die("Query failed: " . $e->getMessage());
  }

} else {

  header("Location: ../login.php");
  die();
}