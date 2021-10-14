<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
</head>
<body>

<form action="registration.php" method="POST">
	<div class="container">
		<h1>SIGN UP</h1>
		<p>Please fill in the form to create an account.</p>
		<hr>

		<label for="fname"><b>First Name</b></label>
		<input type="text" placeholder="Enter First Name" name="fname" required>

		<label for="lname"><b>Last Name</b></label>
		<input type="text" placeholder="Enter Last Name" name="lname" required>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email Address" name="Email" required>

		<label for="gender"><b>Gender</b></label>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="prefer not to say">Prefer not to say</option>
		</select>
		<input type="submit">

		<label for="pword"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="pword" required>
	</div>
</form>

</body>
</html>