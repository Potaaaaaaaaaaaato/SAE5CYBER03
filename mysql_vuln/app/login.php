<?php
$conn = new mysqli("mysql", "root", "rootpass", "vpn_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_GET['username'] ?? '';  # Gère param vide
$query = "SELECT * FROM users WHERE username = '$username'";  # Vulnérable !
$result = $conn->query($query);
if ($result && $result->num_rows > 0) {
    echo "User found! Credentials leaked via SQLi.";
    while($row = $result->fetch_assoc()) {
        echo " - " . $row['username'] . ":" . $row['password'] . "\n";
    }
} else {
    echo "User not found!";
}
$conn->close();
?>