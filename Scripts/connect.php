<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "watchit";


$name=$_POST['name'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection Failed");


$sql="INSERT INTO watchit(NAME, Contact, email,  password) VALUES ('$name', $contact_no, '$email_id', '$password');";

$result=mysqli_query($conn, $sql);
if(!mysqli_error($con)){
	echo "Hello";
}
else{
echo "ERROR";
}

?>

