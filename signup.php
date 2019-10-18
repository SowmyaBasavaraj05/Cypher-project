<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cipher";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];

$sql = "INSERT INTO signup (name, email,password,password1)
VALUES ('$name', '$email','$password','$password1')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "password not matching: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 