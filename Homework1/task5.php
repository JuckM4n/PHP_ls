<?php
$bmw = [
  'model' => 'X5',
  'speed' => 120,
  'doors' => 5,
  'year' => 2015
];
$toyota = [
  'model' = 'Gaia',
  'speed' = 135,
  'doors' = 5,
  'year' = 2001
];
$opel = [
  'model' = 'Corsa',
  'speed' = 85,
  'doors' = 3,
  'year' = 2012
];

$cars = ['BMW' => $bmw, 'Toyota' => $toyota, 'Opel' => $opel];

foreach($cars as $name => $car) {
  echo "$CAR $name<br>";
  echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";
}

?>