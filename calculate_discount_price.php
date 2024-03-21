<?php


// Func to calculate discount price.
function calculate_discount_price(  $price, $discount_percentage ) 
{
    
    if ( $price == "" || $discount_percentage == "") {
        return "Invalid Parameter Passed!";
    }

    $discount_amt = ( $price * $discount_percentage) / 100;

    return $price - $discount_amt;
}

// Example use of Func calculate_discount_price
$price = 200;
$discount_percentage = 10;

$discount_amt = calculate_discount_price( $price, $discount_percentage );

echo "Task 1 : Func to calculate discount price \n";

echo " Price is 200 \n Discount is of 10% \n";

echo "The discounted price is " . $discount_amt;


?>