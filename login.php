 <html>
 <head>
 </head>
 <body>
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

$email=$_POST['email'];
$pwd=$_POST['pwd'];
$remember=$_POST['remember'];

$sql = "INSERT INTO login (email, pwd,remember)VALUES ('$email', '$pwd','$remember')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	

} else {
    echo "password not matching: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</body>
</html>