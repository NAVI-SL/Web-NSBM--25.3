<!DOCTYPE html>
<html>
<head>
    <title>Exercise 04</title>
</head>
<body>

<h1>Enter Your Marks</h1>

<form method="GET" action="">
    <label>Name:</label>
    <input type="text" name="sname" required>

    <br><br>

    <label>Marks:</label>
    <input type="number" name="marks" min="0" max="100" required>

    <br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Cancel">
</form>

<h2>Your Results:</h2>

<?php
if (isset($_GET["sname"]) && isset($_GET["marks"])) {

    $name = $_GET["sname"];
    $marks = $_GET["marks"];

    echo "Name: $name <br>";
    echo "Marks: $marks <br>";

    if ($marks >= 50) {
        echo "Result: You have Passed";
    } else {
        echo "Result: You have Failed";
    }
}
?>

</body>
</html>