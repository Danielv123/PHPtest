<DOCTYPE html>
<head>


</head>

<body>

<h1>What is PHP?</h1>

<?php
$var1 = "<p>PHP IS hard!</p>";
$var2 = "<p>PHP IS AWESOMEEEEE!</p>";
echo "$var2";
$var21 = strlen($var2);
$var22 = str_word_count($var2);
$var2R = strrev($var2);
echo "That string was $var21 characters long and included nearly $var22 words. 
If you reverse it you would get $var2R. Unfortunately HTML does not want to show 
that correctly as it is considered a comment.";

$num1 = 2;
function times() {
global $num1;
$num1 = $num1 * $num1;
echo $num1;
}

times();
times();
times();
times();
times();
times();
times();
times();
times();
times();

?>

</body>