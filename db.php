<?php
$host = 'db';
// Database user name
$dbname = 'to_do_app';
$user = 'root';
//database user password
$pass = 'lionPass';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $dbname);
// echo "Connection established";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}