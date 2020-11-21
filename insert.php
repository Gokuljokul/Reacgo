<?php
$servername = "127.0.0.2";
$username = "reacgoco_reacgo";
$password = "Failword@.0";
$dbname = "reacgoco_reacgo";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);

 
// attempt insert query execution
$sql = "INSERT INTO post_task (name, email, subject, message)  VALUES ('$name', '$email', '$subject', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Your record submitted successfully and You'll receive a mail from our end in next 2 working days.Thank you";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>