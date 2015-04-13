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

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<h1><br></h1>
<?php
echo "$var2";

echo "<p>That string was $var21 characters long and included nearly $var22 words. 
If you reverse it you would get $var2R. emosewA, right?</p>";
?>
</body>