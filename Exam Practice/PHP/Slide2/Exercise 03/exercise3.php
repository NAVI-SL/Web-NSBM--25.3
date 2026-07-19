<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pwd = $_REQUEST["password"];
$cpwd = $_REQUEST["confirmpassword"];
$gender = $_REQUEST["gender"];
$terms = $_REQUEST["terms"];

echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Password: $pwd <br>";
echo "Confirm Password: $cpwd <br>";
echo "Gender: $gender <br>";
echo "Terms and Conditions: $terms <br>";
?>