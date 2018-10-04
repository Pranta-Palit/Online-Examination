

<?php

//get values from adminLogin.html
$username = $_POST['adminUser'];
$password = md5($_POST['adminPass']);

//to prevent my sql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("db_exam");

//query the database for user
$result = mysql_query("select * from tbl_admin where adminUser = '$username' and adminPass = '$password'")
	or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);

if($row['adminUser'] == $username && $row['adminPass'] == $password){
	echo "Login successfull";
	header("Location:login-page.php");
}
else{
	echo "Failed to login</br>";
	header("Location:adminLogin.html");
}


?>