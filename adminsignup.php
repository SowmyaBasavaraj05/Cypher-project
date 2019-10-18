<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CYPHER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet/nav.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <style>
      table,th,td{
        border:5px solid  #15dddd ;
		text-align:center;
        border-collapse:collapse;
        font-size:20px;
		
      }
      table{
        margin-left:30%;
          }
      body{
        background-image:url(background5.jpg);
        font-family: 'Cormorant Upright';
        font-weight:bold;
        color:white;
      }
      .topnav {font-family:'Cinzel Decorative';font-weight: bold;
            }

      .topnav {
        overflow: hidden;
      background: linear-gradient(to right,#0D1DA5  0%,#040C54 100%);
      }

      .topnav a {
        float: right;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav .icon {
        display: none;
      }

      .dropdown {
          float: right;
          overflow: hidden;
      }

      .dropdown .dropbtn {
          font-size: 17px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .topnav a:hover, .dropdown:hover .dropbtn {
        background-color: #181CA2;
        color: white;
      }

      .dropdown-content a:hover {
          background-color: #ddd;
          color: #181CA2;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child), .dropdown .dropbtn {
          display: none;
        }
        .topnav a.icon {
          float: right;
          display: block;
        }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
        }
        .topnav.responsive .dropdown {float: none;}
        .topnav.responsive .dropdown-content {position: relative;}
        .topnav.responsive .dropdown .dropbtn {
          display: block;
          width: 100%;
          text-align: left;
        }
      }
    </style>

  </head>
  <body>
    <div class="topnav" id="myTopnav">

      <a href="login.html">Login</a>
      <a href="signup.html">SignUp</a>
      <a href="Contact.html">Contact</a>
      <a href="registration.html">Registration</a>


      <div class="dropdown">
        <button class="dropbtn"> Inter-clg events
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="blood.html">Blood Donation camp</a>
          <a href="quiz.html"class="active">Coding Competition</a>

        </div>

      </div>
      <a href="pastworkshop.html"class="active">Workshops</a>
      <a href="events.html">Gallery</a>
      <a href="about.html">About</a>

      <a href="11.html" >Home</a>
      <img src="images/logo5.png" alt="logo image" style="width:5%;height:10%;">
      <div class="topnav" id="grad1" style="text-align:center;margin:auto;color:#888888;font-size:40px;font-weight:bold">

      </div>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a><div class="search-container">
    </div>
    </div>
	<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="cipher";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn->connect_error)
	die("connectionfailed:".$conn->connect_error);
	$sql="SELECT * FROM signup";
	$result=$conn->query($sql);
	echo"<br>";
	echo"<center ><b>SIGNUP</b></center>";
	echo"<table border='2'>";
	echo"<tr>";
	echo"<th>Name</th><th>Email</th><th>Password</th><th>Re-enter Password</th></tr>";
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc()){
			echo"<tr>";
			echo"<td>".$row["name"]."</td>";
			echo"<td>".$row["email"]."</td>";
			echo"<td>".$row["password"]."</td>";
			echo"<td>".$row["password1"]."</td></tr>";
			
			}
		}
		else
		echo "Table is empty";
		echo"</table>";
		?>
    <footer style="font-family:'Cinzel';margin-top:11%;">
      <div class="row" >

      <center><h6 style="font-family:'Cinzel';">CYPHER</h6>
           <p>Contact:+91 8796574554</p>
           <p>mail:cyphertheclub@gmail.com</p>
          <div id="footerimage">
           <a href="https://www.facebook.com">
         <img class="facebook" src="images/facebook.png"style="width:2%;height:5%;"/></a>
                         <a href="https://www.instagram.com/">
         <img class="instagram" src="images/insta.png"style="width:2%;height:5%;"/></a>
                         <a href="https://www.youtube.com/">
         <img class="Youtube" src="images/youtube.png"style="width:2%;height:5%;"/></a>
          <a href="https://www.twitter.com">
         <img class="twitter" src="images/twitter.png" style="width:2%;height:5%;"/></a>

       </div>

    </center>
    </footer>
    <script>


    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
  </body>
</html>
