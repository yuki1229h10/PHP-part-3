<?php

const TAX = 0.1;
$price = 100 * (1 + TAX);
echo $price . PHP_EOL;

TAX = 0.2;
$price = 100 * (1 + TAX);
echo $price;
