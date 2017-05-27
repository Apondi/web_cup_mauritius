<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php

 
$servername = "localhost";
$username = "dontwennacry";
$password = " lD3,E[AIFCz";
$dbname = "dontwennacry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$name=$_POST["name"];
$email=$_POST["email"];
$checkindate=$_POST["start_date"];
$checkoutdate=$_POST["end_date"];
$adults=$_POST["no_of_adults"];
$children=$_POST["no_of_kids"];
$universe=$_POST['universe'];
$hotel=$_POST["hotel_of_stay"];

$sql = "INSERT INTO booking_detail (name, email, start_date, end_date, no_of_adults, no_of_kids, universe, hotel_of_stay)
VALUES ('$name', '$email', '$checkindate', '$checkoutdate', '$adults', '$children', '$universe', '$hotel')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo "this is $universe";
}

 ?>
</body>
</html>
