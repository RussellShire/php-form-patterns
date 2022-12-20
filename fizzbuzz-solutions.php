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
