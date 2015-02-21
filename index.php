<?php
//variabels
$var1 = "PHP IS hard!";
$var2 = "PHP IS AWESOMEEEEE!";
$var21 = strlen($var2);
$var22 = str_word_count($var2);
$var2R = strrev($var2);
$servername = "localhost";// change db sutff here
$username = "root";
$password = "";
?>
<DOCTYPE html>
<head>
<title>PHP-testing</title>

</head>

<body>

<h1>What is PHP?</h1>

<?php

echo "$var2";

echo "<p>That string was $var21 characters long and included nearly $var22 words. 
If you reverse it you would get $var2R. emosewA, right?</p>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h4>Connected successfully</h4>";

// Create database

$sql = "CREATE DATABASE test1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//$conn->close();


$sql = "USE test1";

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>

</body>