<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="donotdelete";
$a=$_REQUEST["id"];
$b=$_REQUEST["fname"];
$c=$_REQUEST["lname"];
$d=$_REQUEST["email"];
$e=$_REQUEST["pass"];
if($b=="pratik" && $e=="12345678")
{
echo "welcome ".$b."</br>";
$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{	die("connection failed:".$conn -> connect_error);
		}
		$sql="create table ramya(id int(6) primary key,firstname varchar(30) not null,lastname varchar(30) not null,email varchar(30)NOT NULL)";
		if($conn->query($sql)===TRUE)
		{
		echo "table stayaway created successfully";
		}
		else
		echo "error creating table ".$conn->conn_error;
}
else
echo "username or password worng";
//header("Location:login.php");
?>