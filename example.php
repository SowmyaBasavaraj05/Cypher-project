 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "colleges";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$text=$_POST['text'];
$password=$_POST['password'];



$sql = "INSERT INTO tab (text, password)
VALUES ('$text', '$password')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "password not matching: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 