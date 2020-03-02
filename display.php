<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="donotdelete";
$b=$_REQUEST["fname"];
$c=$_REQUEST["lname"];
$d=$_REQUEST["email"];
$e=$_REQUEST["pass"];
$a=$_REQUEST["id"];
if($b=="pratik" && $e=="12345678")
{
echo "welcome".$b. "</br>";
$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{	die("connection failed:".$conn -> connect_error);
		}
		$sql="select id,firstname,lastname,email from stayaway";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
		while($row=$result->fetch_assoc())
		{
		echo "id=".$row["id"]. "firstname=".$row["firstname"]. "lastname=".$row["lastname"]. "Email=".$row["email"];
		}
		}
		else
		{
		echo "no result";
		}
		$conn->close();
		echo "thank you";
}