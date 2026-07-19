<?php 
$temperature = 32;

if ($temperature > 30) {
	echo "It's Sunny Day"; 
}
?>   
<br><br>


<?php
$age = 20;

if ($age >= 18) {
	echo "You are eligible to vote!";
} else {
	echo "You are not eligible to vote!";
}
?>
<br><br>


<?php
$grade = 22;

if ($grade >= 90) {
	echo "Excellent!";
} elseif ($grade >= 75) {
	echo "Good job";
} elseif ($grade >= 50) {
	echo "You passed";
} else {
	echo "You failed";
}
?>
<br><br>


<?php
$age = 15;

if ($age >= 0 && $age <= 19) {
	echo "You are a child";
} elseif ($age >= 13 && $age <= 19) {
	echo "You are a teenager";
} elseif ($age >= 20 && $age <= 64) {
	echo "You are a adult";
} else {
	echo "You are a senior";
}
?>