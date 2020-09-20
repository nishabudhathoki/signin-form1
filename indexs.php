<!DOCTYPE html>
<html>
<head>
	<title> login form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div class="body">
		<h1 class="head">Sign in</h1>
		<div class="form">
		<form action="connects.php" method="POST" autocomplete="off">
		<label for="fname" id="fname">First name:</label>
			<input type="text" name="fname" required autocomplete="off"><br><br>
			<label for="lname" id="lname">Last name:</label>
			<input type="text" name="lname" required><br><br>
			<label for="password" id="password">Password:</label>
			<input type="password" name="password" required><br><br>
			<label for="gender" id="gender">Gender:</label>
			<input type="radio" name="gender" value="m" required >&nbsp;  Male &nbsp;
			<input type="radio"  name="gender" value="f" required >&nbsp;Female &nbsp;<br><br>
			<label for="email" id="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
			<input type="email" name="email" required><br><br>
			<label for="phone no." id="phone">Phone no.:</label>
			<input type="phone" name="phone" required><br><br>
			<input type="submit" value="Submit" required>
		</form>
	</div>
   </div>
</body>
</html>