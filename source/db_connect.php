<?php

$username = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbname=login_signup';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo"connection made";

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
