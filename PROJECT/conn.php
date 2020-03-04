<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "testing");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$msg = $mysqli->real_escape_string($_REQUEST['msg']);
 
// attempt insert query execution
$sql = "INSERT INTO test (name, email, msg) VALUES ('$name', '$email', '$msg')";
if($mysqli->query($sql) === true){
	header("Location: http://localhost/PROJECT/index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
