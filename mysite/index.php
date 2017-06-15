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
					<li><a href="index.php" class="selected">Portfolio</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contacts</a></li>
					<li><a href="fb1.php">Sign Up</a></li>
					<li><a href="login.php">Log In</a></li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
			<section>
				<h3>Sign Up! And Add your own Images</h3>
				<h5>(Already registered then Log In)</h5>
				<ul id="gallery">
					<li>
						<a href="dbz1.jpg">
							<img src="dbz1.jpg" alt="">
							<p>Super Saiyan level 3 and after combining.</p>
						</a>	
					</li>
					<li>
						<a href="dbz2.png">
							<img src="dbz2.png" alt="">
							<p>Goku Vegeta super saiyan god.</p>
						</a>
					</li>
					<li>
						<a href="dbz3.jpg">
							<img src="dbz3.jpg" alt="">
							<p>Different level of super saiyans.</p>
						</a>	
					</li>
					<li>
						<a href="dbz4.jpg">
							<img src="dbz4.jpg" alt="">
							<p>All super saiyans on earth.</p>
						</a>	
					</li>
					<li>
						<a href="dbz.jpg">
							<img src="dbz.jpg" alt="">
							<p>Dragon ball super characters.</p>
						</a>	
					</li>
						<?php
							include('db.php');
							$save="SELECT location,caption FROM photos";
							$result = $conn->query($save);
							while($row = $result->fetch_assoc())
							{
							  echo '<li><a href="'.$row['location'].'">
								<img src="'.$row['location'].'" alt="">
								<p>'.$row['caption'].' </p></a></li>';
							}
						?>
					
				</ul>
			</section>
			<footer>
				<a href="http://gmail.com"><img src="mail.png" alt="Gmail Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
				<p>&copy; 2016 Anoop Kumar</p>
			</footer>
		</div>
	</body>
</html>
