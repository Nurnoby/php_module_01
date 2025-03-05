<?php
// Prompt user for input
echo "Enter the number:";
$number = (int) readline();

// Check if the number is positive, negative, or zero
if ($number > 0) {
    echo "The number $number is Positive.\n";
} elseif ($number < 0) {
    echo "The number $number is Negative.\n";
} else {
    echo "The number $number is Zero.\n";
}
?>