<?php
$servername = "db";
$username = "user";
$password = "userpassword";
$database = "myapp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>