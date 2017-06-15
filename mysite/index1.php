

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
				<h3 align="left">Upload your own Photos : </h3>
				<form action="addexec.php" method="post" enctype="multipart/form-data">
					<table border=0>
						<tr>
							<td><h4>Select Image : </h4></td>
							<td><input type="file" name='image'></td>
						</tr>
						<tr>	
					        <td><h4>Caption :<h4></td>
							<td align=left><input name="caption" type="text"></td>
						</tr>	
						<tr>
						<td align=center colspan="2"><input type="submit" value="UPLOAD" class="button"></td>
					</tr>
					</table>		
				 </form>
				 <h3>See the photos uploaded by you : <a href="watch.php">click here</a></h3>
				<h3>want to update your details <a href="update.php">click here</a></h3>
				<a href="http://gmail.com"><img src="mail.png" alt="Gmail Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
				<p>&copy; 2016 Anoop Kumar</p>
			</footer>
		</div>
	</body>
</html>
