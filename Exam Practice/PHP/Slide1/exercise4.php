<?php
function calculateDifference($num_mangoes_shop1, $price_per_mango_shop1,
$num_mangoes_shop2, $price_per_mango_shop2) {
	$total_value_shop1 = $num_mangoes_shop1 * $price_per_mango_shop1;
	$total_value_shop2 = $num_mangoes_shop2 * $price_per_mango_shop2;
	
	$difference = $total_value_shop1 - $total_value_shop2;
	
	return $difference;
}

$num_mangoes_shop1 = 8;
$price_per_mango_shop1 = 75;

$num_mangoes_shop2 = 5;
$price_per_mango_shop2 = 60;

$difference_value = calculateDifference($num_mangoes_shop1, $price_per_mango_shop1,
$num_mangoes_shop2, $price_per_mango_shop2);

echo "The difference in value between the two shops is: $difference_value rupees."
?>