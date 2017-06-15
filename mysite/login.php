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
					<li><a href="fb1.php" >Sign Up</a></li>
					<li><a href="login.php" class="selected">Log In</a></li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
		<h3 id='log'>Login</h3>
		<section>
			<form  action="log1.php" method="post" onsubmit="return validateForm()">
				<table>
					<tr>
						<td><input type="text" name="email" placeholder="Email" required="required" maxlength="60" size="20"></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Password" required="required" size="20"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="LOG IN" class="button"></td>
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
