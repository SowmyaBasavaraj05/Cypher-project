<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="cipher";
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if($conn->connect_error)
	die("connectionfailed:".$conn->connect_error);

$answer1 = $_POST['optradio1'];

$answer2 = $_POST['optradio2'];

$answer3 = $_POST['optradio3'];

$answer4 = $_POST['optradio4'];

$answer5 = $_POST['optradio5'];



$totalCorrect = 0;

if ($answer1 == "A") { $totalCorrect++; }

if ($answer2 == "C") { $totalCorrect++; }

if ($answer3 == "B") { $totalCorrect++; }

if ($answer4 == "A") { $totalCorrect++; }

if ($answer5 == "A") { $totalCorrect++; }

if ($answer6) { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 5 correct</div>";
?>
