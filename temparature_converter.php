<?php

define("F_2_C", 5/9);
define("C_2_F", 9/5);


echo "Select the conversion type:\n";
echo "1. Fahrenheit to Celsius\n";
echo "2. Celsius to Fahrenheit\n";
$choice = (int) readline();

echo "Enter the temperature:";
$temperature = (float) readline();

switch ($choice) {
    case 1:
        $converted_temperature = ($temperature - 32) * F_2_C;
        echo "The temperature in Celsius is $converted_temperature\n";
        break;
    case 2:
        $converted_temperature = ($temperature * C_2_F) + 32;
        echo "The temperature in Fahrenheit is $converted_temperature\n";
        break;
    default:
        echo "Invalid choice\n";
}