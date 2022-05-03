<?php
$host = "93.16.2.231"; /* Host name */
$user = "codeur"; /* User */
$password = "coding"; /* Password */
$dbname = "metatube"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
  //die("Connection failed: " . mysqli_connect_error());
}


function giveId(){
  $alphabet = [
     1 => "a",
     2 => "b",
     3 => "c",
     4 => "d",
     5 => "e",
     6 => "f",
     7 => "g",
     8 => "h",
     9 => "i",
     10 => "j",
     11 => "k",
     12 => "l",
     13 => "m",
     14 => "n",
     15 => "o",
     16 => "p",
     17 => "q",
     18 => "r",
     19 => "s",
     20 => "t",
     21 => "u",
     22 => "v",
     23 => "w",
     24 => "x",
     25 => "y",
     26 => "z",
 ];

 $id = "";

 for ($i = 1; $i <= 20; $i++) {
    if (rand(1, 2) == 1){
      $id = $id . rand(0,9);
    }
    else {
      if (rand(1, 2) == 1){
      $id = $id . $alphabet[rand(1, 26)];
      }
      else {
        $id = $id . strtoupper($alphabet[rand(1, 26)]);

      }
    }
 }
 return $id;
}



function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

function HowOldAreYou($date_naissance)
{
  $am = $date_naissance;
  $an = explode('/', date('d/m/Y'));
  if (($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
  return $an[2] - $am[2] - 1;
}
