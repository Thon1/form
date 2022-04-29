<?php
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email =   $_POST['email'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);

//connect database
$con = new mysqli("localhost", "root", "", "config");
if($con->connect_error){
	die("error". $con->connect_error);
}else{
	$stmt = $con->prepare("INSERT INTO record(first, last, email, gender, password) VALUES(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss",$firstname,$lastname,$email,$gender,$password);
	$stmt->execute();
	echo "successfully...";
	$stmt->close();
	$con->close();
}