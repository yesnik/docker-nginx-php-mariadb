<?php

$host = 'db';
$user = 'root';
$password = 'root';

try {
  $db = new PDO("mysql:host=$host;dbname=information_schema", $user, $password);
  
  $res = $db->query('SELECT * FROM global_status');
  
  echo '<pre>';
  while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

    print_r($row);
  }

} catch (PDOException $e) {
  echo $e->getMessage();
}