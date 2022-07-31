<?php

const SPLIT_LENGTH = 2;
const TAX = 10;
const BREADS = [
  1 => 100,
  2 => 120,
  3 => 150,
  4 => 250,
  5 => 80,
  6 => 120,
  7 => 100,
  8 => 180,
  9 => 50,
  10 => 300
];

function getInput(): array
{
  $argument = array_slice($_SERVER['argv'], 1);
  $args = array_chunk($argument, SPLIT_LENGTH);
  $sales = [];
  foreach ($args as $arg) {
    $sales[$arg[0]] = (int) $arg[1];
  }
  return $sales;
}

function calculateSales(array $sales): int
{
  $sum = 0;

  foreach ($sales as $number => $unitsSold) {
    $sum += BREADS[$number] * (int)$unitsSold;
  }

  return (int) $sum * (100 + TAX) / 100;
}

function getNumbersOfMaxUnitsSold(array $sales): array
{
  $max = max(array_values($sales));
  return array_keys($sales, $max);
}

function getNUmbersOfMinUnitsSold(array $sales): array
{
  $min = min(array_values($sales));
  return array_keys($sales, $min);
}

function display(array ...$results): void
{
  foreach ($results as $result) {
    echo implode(' ', $result) . PHP_EOL;
  }
}

$sales = getInput();
$salesAmount = calculateSales($sales);
$numbersOfMaxUnitsSold = getNumbersOfMaxUnitsSold($sales);
$numbersOfMinUnitsSold = getNUmbersOfMinUnitsSold($sales);
display([$salesAmount], $numbersOfMaxUnitsSold, $numbersOfMinUnitsSold);
