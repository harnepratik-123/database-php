<!DOCTYPE HTML>
<Html>
	<head>
		<title>Sign In</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head><script>

  font-size: 16px</script>
	<body>
		<header><h1 align="center">Login</h1></header>
		<div class="navbar">


			<center><form action="insert.php" method="Post" onsubmit="return true" autocomplete="off" style="margin-left: 80px">
				<Label for="Enter your User ID" >User id: &nbsp;&nbsp;&nbsp;&nbsp;</label>
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" required><br/><br/>
				<Label for="Enter your User ID" >Firstname: &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="fname" required><br/><br/>
				<Label for="Enter your password">Lastname: &nbsp;</label>
				&nbsp;&nbsp;&nbsp;<input type="text" name="lname" required"><br/><br/>
				<Label for="Enter your User ID">E-mail: &nbsp;&nbsp;&nbsp;&nbsp;</label>
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" required><br/><br/>
				<Label for="Enter your User ID">Password: &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="password" name="pass" maxlength="15" pattern="[a-zA-z0-9]{8,15}" required><br/><br/>
				<br/>
				<br/>
				<center><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></center><br/>
			</form></center>
	</body>
</html>