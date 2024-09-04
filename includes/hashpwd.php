<?php

// This is good to hash the not passowrd

// $sensitiveData = "Kane";
// $salt = bin2hex(random_bytes(16)); // Generate random salt
// $pepper = "ASecretPepperString";

// // echo "</br>" . $salt;

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// // echo "</br>" . $hash;

// /* ------ */

// $sensitiveData = "Kane";
// $storedSalt = $salt; // get this on database
// $storedHash = $hash; // get this on database
// $pepper = "ASecretPepperString";
// $dataToHash = $sensitiveData . $storedSalt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if ($storedHash === $verificationHash) {
//   echo "</br>" . "The data are the same";
// } else {
//   echo "</br>" . "The data are not the same";
// }

$pwdSignup = "Kane";

$options = [
  'cost' => 12
]; // this makes creates loading

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); // the 3rd parameter is recommended to avoid hackers from trying to guess the password

$pwdLogin = "Kane";
password_verify($pwdLogin, $hashedPwd);

if(password_verify($pwdLogin, $hashedPwd)) {
  echo "They are the same";
} else {
  echo "They are not the same";
}