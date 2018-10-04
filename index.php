
<html>

<head>

<link rel="stylesheet" type="text/css" href="css/signup.css"></link>

</head>

<body>
<h1>Welcome to E-Exam</h1>
<div class="main">
	<h2>Sign up</h2>
	<form action="signup.php" method="post">
		<div class="form-input">
		<input type="text" name="name" placeholder="Enter your name">
		</div>
		<div class="form-input">
		<input type="text" name="username" placeholder="Enter username">
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="Enter password">
		</div>
		<div class="form-input">
		<input type="text" name="email" placeholder="Enter email">
		</div>
		<input type="submit" name="signup" value="Create Account" class="signup">
		<p>Already have an account? <a href="user/userLogin.html" class="click">Login</a>
		or <a href="admin/adminLogin.html" class="click">Admin Login</a></p>
	</form>
</div>
</body>
</html>