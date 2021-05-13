<?php
  session_start();
  $servername = "remotemysql.com"; //localhost id
  $dBUsername = "yfcl0GbQcA"; //Database Username
  $dBPassword = "d6Twt4RKdK"; //Database Password : Default-root
  $dBName = "yfcl0GbQcA"; //Database name
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
