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
					<li><a href="index1.php" class="selected">Portfolio</a></li>
					<li><a href="about1.php">About</a></li>
					<li><a href="contact1.php">Contacts</a></li>
					<li><a href="index.php">Log Out</a></li>
					<li id="small">
						<?php
							include("session.php");
							echo $row['f_name'].'  '.$row['l_name'].'<br />';
							echo $row['email_id'].'<br />';
							echo $row['phone_no'].'<br />';
							echo $row['dob'].'<br />';
							echo $row['gender'].'<br />';
							echo '</p>';
							$conn->close();
						?>
					</li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
			<section>
				<h1 id=ck>Photos Uploaded By You</h1>
				<ul id="gallery">
					<?php
							include('session.php');
							$save="SELECT location,caption FROM photos where id=$id";
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
