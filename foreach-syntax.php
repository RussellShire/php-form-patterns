<?php
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];

echo "- foreach with values only:\n";

foreach ($scores as $score) {
  echo "Someone received a score of {$score}.\n";
}

echo "\n";

echo "- foreach with keys and values:\n";

foreach ($scores as $student => $score) {
  echo "{$student} received a score of {$score}.\n";
}
