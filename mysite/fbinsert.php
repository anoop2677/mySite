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
			<?php
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$phone=$_POST['phone'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$cpassword=$_POST['cpassword'];
				$dob=$_POST['dob'];
				$gender=$_POST['gender'];      
					 
				$em="email_id";	 
					 $servername = "localhost";
					$username = "root";
					$password = "cws";
					$datb="myfb";
					$conn = mysqli_connect($servername, $username, $password,$datb);
					if ($conn->connect_error) 
					{
						echo "Error: Could not connect to database.Please try again later.";
						exit;
					} 
					
					$query = "select email_id from fb1 where ".$em." like '%".$email."%'";
					$result = $conn->query($query);
					$num_results = $result->num_rows;
				   
					if($num_results==0)
					{
						
						$quer = "insert into fb1 (f_name, l_name, email_id, phone_no, password, dob, gender) values('$fname','$lname','$email','$phone','$pass','$dob','$gender')";
						
						$resul = $conn->query($quer);
						if ($resul==true)
						{
							
							echo $conn->affected_rows."  Successfully signed up";
							echo "To add images log in first";
						}	
						$conn->close();
					}
					else
					{
						echo "<p id=error>Error: This email id has already been used<br /><br /></p>";
						include("fb2.php");
					}
				      
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
