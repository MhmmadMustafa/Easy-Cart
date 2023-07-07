<?php
// Initialize variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";

// Create connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$item_name = $_POST['item_name'];
$item_code = $_POST['item_code'];
$number = $_POST['number'];

// Prepare the SQL statement
$sql = "INSERT INTO orders (first_name, last_name, address, gender, email, item_name, item_code, number)
VALUES ('$first_name', '$last_name', '$address', '$gender', '$email', '$item_name', '$item_code', '$number')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
