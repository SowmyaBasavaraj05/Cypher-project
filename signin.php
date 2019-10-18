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

$yourname=$_POST['yourname'];
$yourpass=$_POST['yourpass'];



$sql = "INSERT INTO signin1 (yourname, yourpass)
VALUES ('$yourname', '$yourpass')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "password not matching: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 