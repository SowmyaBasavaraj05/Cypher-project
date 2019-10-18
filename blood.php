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
$Bloodgroup=$_POST['Bloodgroup'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];



$sql = "INSERT INTO blood (name, gaurdian,DOB,Gender,Bloodgroup,state,city,address)
VALUES ('$name', '$gaurdian','$DOB','$Gender','$Bloodgroup','$state','$city','$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 