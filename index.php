<!DOCTYPE html>
<html>
<body>

<h1>Hello Sample HTML.</h1>

<?php
//Comments
//This is single line comment.
#This is also single line comment.
/*
multi line comment
*/
//comment to leave out parts of the code
$x = 5 /* + 15 */ + 5;
echo $x ;
echo '<br>';
echo 'Hello Framework!<br>';
echo 'Hello Framework!<br>';
ECHO 'Hello Framework!<br>';
?>

<?php
$color = 'red';
echo 'My car is '. $color. "<br>";
echo 'My house is '. $COLOR. "<br>";
echo 'My boat is '. $COlor. "<br>";
?>

<?php
//Declaring variables
$txt = 'PHP!';
$x = 5;
$y = 10.5;
echo 'Answer is: ' ; 
echo $z = $x + $y; 
echo '<br>';
echo $x + $y;
echo '<br>';

echo "I love $txt!";	
echo 'I love ' . $txt . '!';
?>

<?php
//function sample
$x = 5; // global scope
$z = 10;

function myTest() {
	//using x inside this function will generate an error
	$y = 5; // local scope
	echo "<p> Variable x inside function is: $x</p>";
	echo "<p> Variable y inside function is: $y</p>"; // error if outside
	//GLOBAL Keyword
	global $x, $z;		
	$z = $x + $z;
	//GLOBALS[index]
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['z'];

}
myTest();
echo "<p> Varible x outside functions is: $x</p>";
echo $z;
?>

<?php
function myTest2() {
	//static keyword
	static $a = 0;
	echo "<br>";
	echo $a;
	$a++;
}
myTest2();
myTest2();
myTest2();
?>

</body>
</html>



