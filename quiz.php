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
$gaurdian=$_POST['gaurdian'];
$DOB=$_POST['DOB'];
$Gender=$_POST['Gender'];
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$college=$_POST['college'];
$city=$_POST['city'];



$sql = "INSERT INTO quiz (name, gaurdian,DOB,Gender,usn,branch,college,city)
VALUES ('$name', '$gaurdian','$DOB','$Gender','$usn','$branch','$college','$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "password not matching: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 