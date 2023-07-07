
		<?php


		$conn = mysqli_connect("localhost", "root", "", "easy_cart");

		// Check
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$itemname = $_REQUEST['itemname'];
		$itemcode = $_REQUEST['itemcode'];
		$email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$phone_number = $_REQUEST['phone_number'];


		$sql = "INSERT INTO buy_items VALUES ('$firstname',
			'$lastname','$itemname','$itemcode','$email','$gender','$address','$phone_number')";

		if(mysqli_query($conn, $sql)){
			echo "<h1>thanks for using our service </h1>";
			echo "<h3>Your data are: </h3>";
			echo nl2br("\n$firstname\n $lastname\n "
			. "$itemname\n $itemcode\n $email\n $gender\n $address\n $phone_number");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
</body>
<link rel="stylesheet" type="text/css" href="css.css">
</body>
