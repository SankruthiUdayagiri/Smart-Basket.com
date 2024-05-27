<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_store";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get item ID from form submission
$item_id = $_POST['item_id']; // You should sanitize and validate this input

// Insert item into cart table
$sql = "INSERT INTO cart (item_id) VALUES ('$item_id')";

if ($conn->query($sql) === TRUE) {
    echo "Item added to cart successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
