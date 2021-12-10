<?php

$servername = "localhost";
$username = "root";
// $password = "bigstep";
$password = "Bigstep@123";
$dbname = "assingment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
