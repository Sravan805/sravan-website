<?php
session_start();

$email = $_SESSION['email'];


$servername="localhost";
$username="root";
$password="";
$db="test";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}

$sql = "SELECT * FROM register WHERE email='$email'";

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);


echo "WELCOME  ".$row['name'];
?>