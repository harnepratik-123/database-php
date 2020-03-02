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
//if($b=="pratik" && $e=="12345678")
//{
echo "welcome".$b. "</br>";
$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{	die("connection failed:".$conn -> connect_error);
		}
		$stmt=$conn->prepare("insert into stayaway(id,firstname,lastname,email)values(?,?,?,?)");
		$stmt->bind_param("isss",$a,$b,$c,$d);
		$stmt->execute();
		//$a=
		//$firstname="$b";
		//$lastname="$c";
		//$email="$d";
		//if($conn->query($stmt)===TRUE)
		//{
		echo "inserted into table stayaway created successfully";
		//}
		//else
		//echo "error while into inserting table".$conn_error. "</br>";
//}
//else
//echo "username or password worng";
//header("Location:login.php");
?>