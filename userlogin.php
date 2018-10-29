<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "entered the process";
$email = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];

$sql = "SELECT email,password FROM Users where email='".$email."' and password='".$pass."';";
$result = $conn->query($sql);

echo $result->num_rows;
if ($result->num_rows > 0) {
     //output data of each row
     while($row = $result->fetch_assoc()) {
       echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
	//header("Location:http://localhost/adminwelcome.html");

	
	// Get data of this user with username and password

    }
} else {
    
    echo "0 results";
}
$conn->close();
?>