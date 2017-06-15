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
		<div id="wrapper">
		<section>
		<form action="fbinsert.php" method="post">
			<table>
				<tr>
					<td colspan="2"><input type="text" name="fname" placeholder="First Name" maxlength="30" size="20"></td>
					<td colspan="2"><input type="text" name="lname" placeholder="Last Name" maxlength="30" size="20"></td>
				</tr>
				<tr>
					<td> <input type="text" name="email" placeholder="Email" maxlength="60" size="20"></td>
				</tr>
				<tr>
					<td><input type="text" name="phone" placeholder="Phone No" size="20"></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Password" size="20"></td>
				</tr>
				<tr>
					<td><input type="password" name="cpassword" placeholder="Confirm Password" size="20"></td>
				</tr>
				<tr>
					<td><input type="text" name="dob" placeholder="Birth Date" size="20"></td>
				</tr>
				<tr>
					<td align="center"><input type="radio" name="gender" value="male" checked=
        "checked" />Male</td>
					<td align="center"><input type="radio" name="gender" value="female" />Female</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="REGISTER" class="button"></td>
				</tr>
			</table>
		</form>
	    </section>
		</div>
	</body>
</html>
