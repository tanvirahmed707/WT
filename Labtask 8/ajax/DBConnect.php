<?php
  function connect() {
    $conn = new mysqli("localhost", "Tanvir", "12345", "wkt");
    if ($conn->connect_errno) {
      die("failed to connect");
    }
    return $conn;
  }
?>
