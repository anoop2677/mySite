<?php
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
?>				 
