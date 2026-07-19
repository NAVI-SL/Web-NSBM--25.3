<?php
function calculateTotalValue($num_apples, $price_per_apple) {
	$total_value = $num_apples * $price_per_apple;
	return $total_value;
}

$num_apples = 5;
$price_per_apple = 100;

$total_value = calculateTotalValue($num_apples, $price_per_apple);

echo "The total value of apples in the shp is: $total_value rupees.";

?>