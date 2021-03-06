<?php
 

 $servername="localhost";
 $username="root";
 $password="";
 $db="test";
 
 $conn=mysqli_connect($servername,$username,$password,$db);
 
 if(!$conn){
     die("connection failed" .mysqli_connect_error());
 }
 
     $name=$_POST['name'];
 
     $email=$_POST['email'];
 
     $password=$_POST['password'];
 
     $sql = $conn->prepare("INSERT INTO register(name,email,password) VALUES(?,?,?)"); 
 
 $sql ->bind_param("sss",$name,$email,$password);
 
 if(!$sql -> execute()){
     echo "user details are not inserted";
 }
 else{
     echo "user details inserted successfully";
 }
 
 
 
 

?>