<?php
  $servername = 'database';
  $username  = 'level2';
  $password = 'level2';
  $database = 'level2';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Unable to connect to MYSQL server");
  }
?>
