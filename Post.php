<?php
$servername = "fdbx.awardspace.net";   
$username = "250xxx7_xxxxx";           
$password = "passxxx";                 
$dbname = "250xxx47_hxxxxt";          

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (username, password) VALUES ('
".$_POST["username"]."
', '
".$_POST["password"]."
')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
