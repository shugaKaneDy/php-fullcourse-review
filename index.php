<?php

// GET = used to show the data from database
// POST = used to submit data to database

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// } = used this. this is the best way to do it
// Sanitize data that you submit. Don't trust user
// always use htmlspecialchars($_POST["fistname"]) for form;


/* $a = 1;
$result = match() {
  1,3,5 => "Variable a is equal to one",
  2 => "Variable a is equal to two",
  default => "None were match",
};
 */

//  ARRAY
// unset() = making array empty or something but deosnt remove it
// array_splice($array, $from, $length);
// array_splice($array, 2, 0, "Mango"); = makes a value between values can be also merge array
// count($array)
// sort()

//  BUILT IN FUNCTIONS
// strlen()
// strpos($str, "a")
// str_replace("World",$str, "Daniele");
// strtolower()
// strtoupper()
// substr($str, $from, $length);
// explode(" " ,$str); = makes the string into array
// abs();
// round();
// pow();
// sqrt();
// random(1, 100);
// is_array();
// array_reverse($array);
// array_merge(1,2);
// date("Y-m-d H:i:s");
// time(); = in sec
// strtotime = converts str to time

// FUNCTION
// function sayHello($name = "Kane") {} = default value 
// global $test = inorder to use the variable in outside the scope
// GLOBAL["test"];

// CONSTANT
// always define your CONSTANT at the top of your code
// Can be use in within the scope of functions
// define("PI", 3.14);
// echo PI;

// LOOPS

// foreach ($array as $key => $value) {}

// echo $_SERVER['HTTP_USER_AGENT']; =  browser, operating system, and device type.
// echo "<br/>";
// echo $_SERVER['REMOTE_ADDR']; = IP address

// SESSION
// session_unset() = deleting all sessions
// session_destroy() = destroy all sessions but will only effective when you go to the other page
// unset($_SESSION["username"]) = deleting session variable