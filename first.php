<?php
$servername="localhost";
$username ="root";
$password="";
$a=$_REQUEST["id"];
$b=$_REQUEST["fname"];
$c=$_REQUEST["lname"];
$d=$_REQUEST["email"];
$e=$_REQUEST["pass"];
if()
{
echo "welcome".$b. "</br>";
$conn=new mysqli($servername,$username,$password);
		if($conn->connect_error)
		{	die("connection failed:".$conn -> connect_error);
		}
		$sql="CREATE DATABASE donotdelete";
		if($conn->query($sql)==TRUE)
		{
		echo "database created";
		}
		else
		echo "error creating database".$conn_error. "</br>";
}
else
echo "username or password worng";
//header("Location:login.php");
?>