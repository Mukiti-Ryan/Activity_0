<!DOCTYPE html>
<html>
<style>
	body {font-family: Arial;}
	*{
		box-sizing: border-box;
	}

	/*Full-width input fields */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
		outline: none;
	}

	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}

	/*Set a style for all buttons*/
	button {
		background-color: #04AA6D;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	button:hover {
		opacity: 1;
		transition: .3s ease;
		color: #ff7200;
	}

	/*Extra styles for the cancel button*/
	.cancelbtn {
		padding: 14px 20px;
		background-color: #f44336;
	}

	/*Float cancel and signup buttons and add an equal width*/
	.cancelbtn, .signinbtn {
		float: left;
		width: 50%;
	}

	/*Add padding to container elements*/
	.container {
		padding: 16px;
	}

	/*Clear floats*/
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}

	/*Change styles for cancel button and signup button on extra small screens*/
	@media screen and (max-width: 300px) {
		.cancelbtn, .singninbtn {
			width: 100%;
		}
	}
</style>
</html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
</head>
<body>

<form action="login.php" method="GET">
	<div class="container">
		<h1>SIGN IN</h1>
		<p>Login in to your account and check out our amazing products.</p>
		<hr>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email Address" name="Email" required>
		<br>

		<label for="pword"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="pword" required>
		<br>

		<label>
			<input type="checkbox" checked="checked" name="remember">Remember me
		</label>
		<br>

		<div class="clearfix">
			<button type="submit" class="signinbtn">SIGN IN</button>
			<button type="button" class="cancelbtn">CANCEL</button>
		</div>

	</div>

</form>
</body>
</html>