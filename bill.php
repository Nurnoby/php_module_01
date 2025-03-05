<?php

echo "Enter your units consumed:";
$units = (int) readline();

if($units >= 1 && $units <= 100){
    $bill = $units * 5;
}elseif($units >= 101 && $units <=200){
    $bill = $units * 10;
}else{
    $bill = $units * 15;
}
echo "Your bill is $$bill\n";