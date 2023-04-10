<?php
    $db_host = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
    $db_user = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
    $db_pwd  = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');

    echo "db_host: {$db_host}<br>";
    echo "db_user: {$db_user}<br>";
    $servername = $db_host;
$username = $db_user;
$password = $db_pwd;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

