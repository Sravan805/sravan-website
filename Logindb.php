<?php

session_start();


$servername="localhost";
$username="root";
$password="";
$db="test";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];

	$sql1= "SELECT * FROM register where email='$email' AND password='$password' ";

	$sql = mysqli_query($conn,$sql1);
	$check = mysqli_num_rows($sql);

	if(!$check == 1){
		echo "fail";
	}
	else{

		 $_SESSION['email'] = $email;

$sql2 = "SELECT id FROM register where email='$email'";
$sql= mysqli_query($conn,$sql2);
$result = mysqli_fetch_array($sql);

 $_SESSION['userid'] = $result['id'];
 
	header('location:UserWelcome.php');
}


?>