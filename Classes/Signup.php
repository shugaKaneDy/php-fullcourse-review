<?php

class Signup extends Dbh {

  private $username;
  private $pwd;

  public function __construct($username, $pwd) {

    $this->username = $username;
    $this->pwd = $pwd;
  }

  private function insertUser() {

    $query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd)";
    $stmt = parent::connect()->prepare($query);
    $data = [
      ":username" => $this->username,
      ":pwd" => $this->pwd,
    ];
    $stmt->execute($data);
  }

  private function isEmptySubmit() {

    if(isset($this->username) && isset($this->pwd)) {
      return false;
    } else {
      return true;
    }
  }

  public function signupUser() {

    // Error Handler
    if($this->isEmptySubmit()) {
      header("Location: " . $_SERVER["DOCUMENT_ROOT"] . '/index.php?');
      die();
    }


    // If no error, signup user
    $this->insertUser();
  }
}