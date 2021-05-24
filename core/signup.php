<?php
require_once 'config.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$pass = trim($_POST['pass']);


if ($name =='' OR $email =='' OR $pass ==''){
    echo 2;
    die;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, password) VALUES ('".$name."', '".$email."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>