<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "CYbFGpfXUpp2";
$dbname = "users";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
  die('Connection failed:'. mysqli_connect_error());
}
