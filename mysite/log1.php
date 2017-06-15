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
			<a href="index1.php" id="logo">
				<h1>Anoop Kumar</h1>
				<h2>Developer</h2>
			</a>	
			<nav>
				<ul>
					<li><a href="index1.php">Portfolio</a></li>
					<li><a href="about1.php">About</a></li>
					<li><a href="contact1.php">Contacts</a></li>
					<li><a href="fb1.php">Sign Up</a></li>
					<li><a href="login.php" class="selected">Log In</a></li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
		<h3 id='log'>Login</h3>
		<section>
			<?php
				// create short variable names
				include("db.php");
				session_start();
				{
					
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					
					$p="password";
					$em="email_id";
					$query = "select email_id from fb1 where ".$p." like '%".$pass."%'"." AND ".$em." like '%".$email."%'";
					$result = $conn->query($query);
					$num_results = $result->num_rows;
		
					if($num_results>0)
					
					{
						echo $num_results;
						$_SESSION['login_email']=$email;
						
						header("Location: index1.php"); 
					}
					else
					{
						echo "<p id=error>wrong details<br /><br /></p>";
						header("Location: login1.php"); 
					}
			    }	
				$conn->close();
			?>
		</section>
		<footer>
				<a href="http://gmail.com"><img src="mail.png" alt="Gmail Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
				<p>&copy; 2016 Anoop Kumar</p>
		</footer>
		</div>	
	</body>
</html>
