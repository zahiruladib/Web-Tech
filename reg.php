<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="get" action="success.php">

	<h1><center>REGISTRATION</center></h1>
	
	<center>
	<table>
		<tr>
			<td><label>Name:</label></td>
			<td><input type="text" name="fname" required=""></td>
		</tr>
		<br>

		<tr>
			<td><label>Email:</label></td>
			<td><input type="email" name="mail" required=""></td>
		</tr>
		<br>

		<tr>
			<td><label>User Name:</label></td>
			<td><input type="text" name="uname"></td>
		</tr>
		<br>

		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="pass" required=""></td>
		</tr>
		<br>

		<tr>
			<td><label>Confirm Password:</label></td>
			<td><input type="password" name="cpass" required=""></td>
		</tr>
		<br>

		<tr>
			<td><label>Gender</label></td><br>
			<td><input type="radio" name="gender">Male
			<input type="radio" name="gender">Female
			<input type="radio" name="gender">Other
		</td>
		</tr>
		<br>

		<tr>
			<td><label>Date of Birth</label></td><br>
			<td><input type="date of birth" name="dob" required="">(dd/mm/yyyy)</td>
		</tr>
		<br>
		
	</table>

		<input type="submit" name="Submit">
		<input type="reset" name="Reset">



</center>
</form>
</body>
</html>