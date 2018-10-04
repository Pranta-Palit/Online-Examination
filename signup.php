<?php
$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email']; 
 
$servername = "localhost";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db_exam", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
	$sql = "INSERT INTO tbl_user(name, username, password, email)
	VALUES('$name', '$username','$password', '$email')";
	// use exec() because no results are returned
	$conn->exec($sql);
    echo "New record created successfully";	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn = NULL;

?> 