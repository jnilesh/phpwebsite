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
	// Authentication success
	echo "Hello, ".$email;

$sql = "SELECT question FROM polls;";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
	while($row = $result2->fetch_assoc()) {
		?>
		<table border=1>
			<tr>
				<td>
				<?php
				echo $row['question'];
				?>
				</td>
			</tr>
		</table>
		<?php
	}
}	
	?>

	<?php	
}else{
	// Authentication failure
	echo "Email password wrong";
}
?>