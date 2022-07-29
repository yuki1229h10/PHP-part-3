<?php

$movie = [
  'name' => 'Hayato',
];
$movie['year'] = 1988;

$movie2 = [
  'director' => 'Raou',
];
$movie3 = array_merge($movie, $movie2);
// var_dump($movie);
var_dump(count($movie3));
