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
					<li><a href="index.php">Portfolio</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contacts</a></li>
					<LI><a href="index.php">Log Out</a></li>
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
		
		<section>
		<?php
			include("db.php");
			$fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $cpassword=$_POST['cpassword'];
            
            if (!$fname || !$email || !$phone || !$pass || !$cpassword)
            {
				echo "You have not entered all the required details.<br /><br />";
				include("update1.php");
                exit;
            }       
                
            $em="email_id";

            if($pass==$cpassword)
            {
                $query = "update fb1 set f_name='$fname', l_name='$lname', phone_no='$phone', password='$pass' where ".$em." like '%".$email."%'";
                $result = $conn->query($query);
              
                    if ($result==true)
					{
						echo $conn->affected_rows."  Successfully Updated";
						echo "<br />Log Out and Log in again";
					}	
					else
					{
						echo "<br />false";
					}
                    $conn->close();
             }
             else
             {
			     echo "Both password does not match<br /><br />";
			     include("update1.php");
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
