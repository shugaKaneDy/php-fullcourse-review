<?php
// use on quering the data from database
declare(strict_types=1);

function getUsername(object $pdo, string $username) {

  $query = "SELECT username FROM users WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $data = [
    ":username" => $username,
  ];
  $stmt->execute($data);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function getEmail(object $pdo, string $email) {

  $query = "SELECT username FROM users WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $data = [
    ":email" => $email,
  ];
  $stmt->execute($data);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function setUser(object $pdo, string $username, string $pwd, string $email) {
  $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
  $stmt = $pdo->prepare($query);

  $options = [
    'cost' => 12,
  ];

  $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

  $data = [
    ":username" => $username,
    ":pwd" => $hashedPwd,
    ":email" => $email,
  ];

  $stmt->execute($data);
} 