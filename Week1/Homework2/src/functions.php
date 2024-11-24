<?php

function task1(array $strings, bool $return = true)
{
  $result = implode("\n", array_map(function (string $str) {
    return "<p>$str</p>";
  }, $strings));

  if ($return) {
    return $result;
  }
  echo $result;
}

function task2(string $action, ...$args) {
  foreach ($args as $n => $arg) {
    if (!is_int($arg) && !is_float($arg)) {
      trigger_error('argument #' . $n . 'is not integer or float');
      return "ERROR: wrong argument type";
    }
  }
  switch ($action) {
    case '+':
      return array_sum($args);
    case '-':
      return array_shift($args) - array_sum($args);
    case '*':
      $result = 1;
      foreach ($args as $arg) {
        $result *= $arg;
      }
      return $result;
    case '/':
      $result = array_shift($args);
      foreach ($args as $n => $arg) {
        if ($arg == 0) {
          trigger_error('division by zero');
          return 'ERROR: division by zero';
        }
        $result /= $arg;
      }
      return $result;

      default:
      return 'ERROR, unknown action';
  }
}

function task3($a, $b) {
  if (!is_int($a)) {
    trigger_error('a is not integer');
    return false;
  }

  if (!is_int($b)) {
    trigger_error('b is not integer');
    return false;
  }

  if ($a < 0 || $b < 0) {
    trigger_error('both a and b must be positive');
    return false;
  }

  $result = "<table>";
  for ($i = 1; $i <= $a; $i++) {
    $result .= "<tr>";
    for ($j = 1; $j <= $b; $j++) {
      $result .= "<td>" . $i * $j . "</td>";
    }
    $result .= "</tr>";
  }
  $result .= "</table>";
  echo $result;
}

function task4() {
  date_default_timezone_set('Europe/Moscow');
  date('d.m.Y H:i:s');
  echo '<br>';
  echo strtotime('24.02.2016 00:00:00');
  echo '<br>';
  echo date('d-m-Y H:i:s', 1456261200);
}

function task5() {
  $string = 'Карл у Клары украл Кораллы';
  echo str_replace('К', '', $string);

  $string = 'Две бутылки лимонада';
  echo str_replace('Две', 'Три', $string);
}

function task6() {
  $fp = fopen('test.txt', 'r');
  if (!$fp) {
    return false;
  }
  $str = '';
  while(!feof($fp)) {
    $str .= fgets($fp, 1024);
  }
  echo $str;
}