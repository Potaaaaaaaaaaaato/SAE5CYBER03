<?php
$conn = new mysqli("mysql", "root", "rootpass", "vpn_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    echo "User found!";
} else {
    echo "User not found!";
}
$conn->close();
?>