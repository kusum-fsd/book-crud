<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kusum_one";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: ");
}
echo "";

?>