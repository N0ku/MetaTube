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


function giveId()
{
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
    if (rand(1, 2) == 1) {
      $id = $id . rand(0, 9);
    } else {
      if (rand(1, 2) == 1) {
        $id = $id . $alphabet[rand(1, 26)];
      } else {
        $id = $id . strtoupper($alphabet[rand(1, 26)]);
      }
    }
    return $id;
  }
}


function console_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

function postApi($data, $route)
{
  $option = array(
    'http' => array(
      'method' => 'POST',
      'content' => json_encode($data),
      'header' => "Content-Type: application/json\r\n" . "Accept: application/json\r\n"
    )
  );

  $context = stream_context_create($option);
  $result = file_get_contents('http://93.16.2.231:8081/' . $route, false, $context);
  $response = json_decode($result);
  return $response;
}

function getApi($route)
{
  $id = 'q12TFuL18592n4l0irF1';
  $opts = array(
    'http' => array(
      'method' => "GET",
    )
  );

  $context = stream_context_create($opts);

  $fp = fopen('http://93.16.2.231:8081/' . $route, 'r', false, $context);
  $data = stream_get_contents($fp);
  fclose($fp);

  $data = json_decode($data);
  return $data;
}
