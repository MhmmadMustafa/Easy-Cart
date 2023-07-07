<!DOCTYPE html>
<html lang="en">

<head>
	<title>PURCHASE order for fui</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
	<center>
		<h1>Purchase order</h1>

		<form action="insert.php" method="post">


			<p>
							<label for="firstname">First name:</label>
							<input type="text" name="firstname" id="firstname"placeholder="Enter your First name"required><br><br>
						</p>



<p>
				<label for="lastname">Last name:</label>
				<input type="text" name="lastname" id="lastName"placeholder="Enter your Last name"required><br><br>
			</p>





<p>
				<label for="itemname">item name:</label>
				<input type="text" name="itemname" id="itemname"placeholder="Enter your item name"required><br><br>
			</p>





<p>
				<label for="itemcode">item code:</label>
				<input type="text" name="itemcode" id="itemcode"placeholder="Enter item code"required><br><br>
			</p>





<p>
				<label for="email">Email address:</label>
				<input type="text" name="email" id="email"placeholder="user@example.com"required><br><br>
			</p>

      <p>
				<label for="gender">Gender:</label>
				<input type="text" name="gender" id="gender"placeholder="Male,female"required><br><br>
			</p>

      <p>
				<label for="address">Address:</label>
				<input type="text" name="address" id="address"placeholder="Enter your address"required><br><br>
			</p>
			<p>
				<label for="phone_number">Phone number:</label>
				<input type="text" name="phone_number" id="phone_number"placeholder="Enter your Phone number"required><br><br>
			</p>




			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
