<html>
<?php
$name = $_POST['fname'];
$stars = $_POST['stars'];
$comment = $_POST['comment'];
$servername = "localhost";
$username = "xxxx";
$password = "xxxx";
$dbname = "id14529920_computersite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pairs (names, content, stars)
VALUES ('$name', '$comment', '$stars')";

if ($conn->query($sql) === TRUE) {
  echo "Your review was successfully submitted";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="Comments.php">Back to comments page</a>
</html>
