<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "school1";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, fname,english,urdu,physics,maths,pakstudies)
VALUES ('Tooba Nawab', 'Nawab Akhtar','22/100','24/100','12/100','0/100','38/100')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
</body>
</html>