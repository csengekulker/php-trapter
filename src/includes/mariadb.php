<?php
include_once("config.php");

function connectDB() {
  global $db;
  $conn = new mysqli(
    $db['host'],
    $db['user'],
    $db['pass'],
    $db['name']
  );

  if ($conn -> connect_error) {
    die('Hiba! A kapcsolódás sikertelen.');
  }

  return $conn;
}

?>