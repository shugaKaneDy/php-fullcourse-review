<?php

declare(strict_types=1);

function outputUsername() {

  if(isset($_SESSION["userId"])) {

    echo "You are logged in as " . $_SESSION["username"];
  } else {
    echo "You are not logged in";
  }
}

function checkLoginErrors() {

  if(isset($_SESSION["errorsLogin"])) {

    $errors = $_SESSION["errorsLogin"];

    echo "<br>";
    foreach ($errors as $error) {
      echo "<p class='p-3 bg-danger-subtle text-center w-25 mx-auto text-danger border border-danger'>" . $error . "</p>";
    }

    unset($_SESSION["errorsLogin"]);
  } else if (isset($_GET["login"]) && $_GET["login"] == "success") {

    echo "<br>";
    echo "<p class='p-3 bg-success-subtle text-center w-25 mx-auto text-success border border-success'>" . "Login success!" . "</p>";
  }
}