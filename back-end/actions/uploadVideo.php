<?php
$host = "93.16.2.231"; /* Host name */
$user = "codeur"; /* User */
$password = "coding"; /* Password */
$dbname = "metatube"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

