<?php

// While Loop
$counter = 100;
while ($counter > 0) {
  if ($counter % 15 === 0) {
    echo "FizzBuzz\n";
  } elseif ($counter % 5 === 0) {
    echo "Fizz\n";
  } elseif ($counter % 3 === 0) {
    echo "Buzz\n";
  } else {
    echo "{$counter}\n";
  }
  $counter -= 1;
}

// For Loop
$output = [];

for ($i = 100; $i > 0; $i--) {
    if ($i % 15 === 0) {
      array_push($output, "FizzBuzz");
    } elseif ($i % 5 === 0) {
      array_push($output, "Fizz");
    } elseif ($i % 3 === 0) {
      array_push($output, "Buzz");
    } else {
      array_push($output, $i);
    }
  }

// Printing For Loop with a foreach
foreach ($output as $value) {
    echo "{$value}\n";
}
