 <?php
	include('session.php');
	$path=$_SERVER['DOCUMENT_ROOT'].'/mysite/photos/'.basename($_FILES['image']['name']);
	$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
	$upload_exts = end(explode(".", $_FILES["image"]["name"]));
	if ((($_FILES["image"]["type"] == "image/gif")
	|| ($_FILES["image"]["type"] == "image/jpeg")
	|| ($_FILES["image"]["type"] == "image/png")
	|| ($_FILES["image"]["type"] == "image/pjpeg"))
	&& ($_FILES["image"]["size"] < 2000000)
	&& in_array($upload_exts, $file_exts))
	{
		if ($_FILES["image"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
		}
		else
		{
			if (file_exists($path))
				{
					echo "(".$_FILES["image"]["name"].")"." already exists. ";
				}
			else
			{	
				if (!isset($_FILES['image']['tmp_name'])) 
				{
					echo " upload fail";
				}
				else
				{
					$file=$_FILES['image']['tmp_name'];
					$file_name=$_FILES['image']['name'];
					echo "<br />$path<br />$file<br />";
					var_dump($_FILES);
					if(move_uploaded_file($file,$path))
					{
						echo "successful";
					}
					else 
					{
						echo "<br />not successful<br />";
						exit();
					}
					$save="select id from fb1 where ".$em." like '%".$email."%'"; 
					$result = $conn->query($save);
					$row = $result->fetch_assoc();
					$id=$row['id'];
					$location="photos/".basename($_FILES["image"]["name"]);
					$caption=$_POST['caption'];
					$save="INSERT INTO photos VALUES ('$id','$location','$caption')";
					$result = $conn->query($save);
					header("location: index1.php");
					exit();     
				}
			}	
		}
	}
	else
	{
		echo "Invalid file";
	}		
?>
