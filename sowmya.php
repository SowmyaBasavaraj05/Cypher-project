<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])){
$sql = "select yourname,yourpass from signin1 where yourname='admin' and yourpass='Admin@123'";
echo $sql;
   $result = $conn->query($sql);
   if($result->num_rows > 0)
   {
	   while($row=$result->fetch_assoc())
	   {
		   echo".$row['yourname']";
		   echo".$row['yourpass']";
		   header('location: http://localhost/project/cipher/login.html');
   }
   }
   else
   {
      echo "Invalid username or password" ;
	  #header('location: admin_login_.php');
      #echo "<a style='margin-left: 10%;' href=http://localhost/project/Cipher/index.html>BACK</a>" ;
   }
   $conn->close();
   }
?> 