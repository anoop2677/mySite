<script type="text/javascript">
	function validateForm()
	{
		var name=document.forms["myForm"]["fname"].value;
		var email=document.forms["myForm"]["email"].value; 
		var phone=document.forms["myForm"]["phone"].value;
		var password=document.forms["myForm"]["pass"].value; 
		var dob=document.forms["myForm"]["dob"].value; 
		var cpassword=document.forms["myForm"]["cpassword"].value; 
		
		if(password.length<8)
		{
			alert("Your password must be at least 8 characters long. Please try another.");
			return false;
		} 
		if (password == cpassword)
		{
			return true;
		} 
		else
		{
			alert("Your password and confirm password do not match. Please try again.");
			return false;
		} 
		
	}
</script>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Anoop Kumar | Developer</title>
		<link rel="stylesheet" href="normalize.css">
		 <link href='https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<a href="index.php" id="logo">
				<h1>Anoop Kumar</h1>
				<h2>Developer</h2>
			</a>	
			<nav>
				<ul>
					<li><a href="index.php">Portfolio</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contacts</a></li>
					<li><a href="fb1.php" class="selected">Sign Up</a></li>
					<li><a href="login.php">Log In</a></li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
		<h2 id='log'>Sign Up</h2>
		<section>	
			<h3>create an account</h3>
			<h3>it's free and always will be.</h3>
			<form name="myForm" action="fbinsert.php" method="post" onsubmit="return validateForm()">
				<table>
					<tr>
						<td colspan="2"><input type="text" name="fname" placeholder="First Name" required="required" maxlength="30" size="20"></td>
						<td colspan="2"><input type="text" name="lname" placeholder="Last Name" maxlength="30" size="20"></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Email" required="required" maxlength="60" size="20"></td>
					</tr>
					<tr>
						<td><input type="text" name="phone" placeholder="Phone No" required="required" size="20"></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Password" required="required" size="20"></td>
					</tr>
					<tr>
						<td><input type="password" name="cpassword" placeholder="Confirm Password" required="required" size="20"></td>
					</tr>
					<tr>
						<td><input type="text" name="dob" placeholder="Birth Date" required="required" size="20"></td>
					</tr>
					<tr>
						<td align="center"><input type="radio" name="gender" value="male" checked=
			"checked" />Male</td>
						<td align="center"><input type="radio" name="gender" value="female" />Female</td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="REGISTER" class="button"></td>
					</tr>
				</table>
			</form>
	    </section>
	    <footer>
				<a href="http://gmail.com"><img src="mail.png" alt="Gmail Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
				<p>&copy; 2016 Anoop Kumar</p>
			</footer>
		</div>
	</body>
</html>
