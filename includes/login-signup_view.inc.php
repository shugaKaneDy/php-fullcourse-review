<?php
declare(strict_types=1);

function signupInputs () {

  if (isset($_SESSION["signupData"]["username"]) && !isset($_SESSION["errorsSignup"]["usernameTaken"])) {
    echo '<div class="mb-3">
    <input class="form-control" type="text" name="username" placeholder="Username" value ="'.$_SESSION["signupData"]["username"].'">
  </div>';
  } else {
    echo '<div class="mb-3">
    <input class="form-control" type="text" name="username" placeholder="Username">
  </div>';
  }

  echo '<div class="mb-3">
    <input class="form-control" type="password" name="pwd" placeholder="Password">
  </div>';

  if (isset($_SESSION["signupData"]["email"]) && !isset($_SESSION["errorsSignup"]["emailUsed"]) && !isset($_SESSION["errorsSignup"]["invalidEmail"])) {
    echo '<div class="mb-3">
    <input class="form-control" type="text" name="email" placeholder="E-Mail" value = "'. $_SESSION["signupData"]["email"] .'">
  </div>';
  } else {
    echo '<div class="mb-3">
    <input class="form-control" type="text" name="email" placeholder="E-Mail">
  </div>';
  }
}

function checkSignupErrors() {
  if(isset($_SESSION["errorsSignup"])) {
    $errors = $_SESSION["errorsSignup"];

    echo "<br>";
    foreach ($errors as $error) {
      echo "<p class='p-3 bg-danger-subtle text-center w-25 mx-auto text-danger border border-danger'>" . $error . "</p>";
    }

    unset($_SESSION["errorsSignup"]);
  } else if (isset($_GET["signup"]) && $_GET["signup"] == "success") {
    echo "<br>";
    echo "<p class='p-3 bg-success-subtle text-center w-25 mx-auto text-success border border-success'>" . "Sign up success" . "</p>";
  }
}