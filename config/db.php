<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//session
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>