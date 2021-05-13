<?php
  session_start();
  $servername = "remotemysql.com"; //localhost id
  $dBUsername = "root"; //Database Username
  $dBPassword = "root"; //Database Password : Default-root
  $dBName = "shareboard"; //Database name
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
