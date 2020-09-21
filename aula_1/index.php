<?php

include_once 'autoloader.php';

$discountCalculator = new DiscountCalculatorTest();
echo $discountCalculator->apply(120) . PHP_EOL;


