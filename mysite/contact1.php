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
					<li><a href="index1.php" >Portfolio</a></li>
					<li><a href="about1.php">About</a></li>
					<li><a href="contact1.php" class="selected">Contacts</a></li>
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
						?>
					</li>
				</ul>
			</nav>	
		</header>
		<div id="wrapper">
      <section id="primary">
        <h3>General Information</h3>
        <p>I am currently looking for internship . If you have any questions, please don't hesitate to contact me!</p>
        <p>Please only use phone contact for urgent inquiries. Otherwise, Facebook and email are the best way to reach me.</p>
      </section>
      <section id="secondary">
        <h3>Contact Details</h3>
        <ul class="contact-info">
          <li class="phone"><a href="tel:011-25834429">011-25834423</a></li>
          <li class="mail"><a href="mailto:anoop@example.com">anoop@example.com</a></li>
        </ul>
      </section>
      <footer>
		  <h3>See the photos uploaded by you : <a href="watch.php">click here</a></h3>
		  <h3>want to update your details <a href="update.php">click here</a></h3>
		  <a href="http://gmail.com"><img src="mail.png" alt="Gmail Logo" class="social-icon"></a>
          <a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
          <p>&copy; 2016 Anoop Kumar.</p>
      </footer>
    </div>
  </body>
</html>
