<html>
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
?>

<!-- Shorthand syntax examples -->

<h1>Shoe Shop</h1>
<?php
$footwear = [
    "sandals" => 4,
    "sneakers" => 7,
    "boots" => 3
];
?>

<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands): // : replaces {
?>
<p>We sell <?=$brands?> brands of <?=$type?></p> // <?=$foo?> // allows php to be accessed within html 
<?php
endforeach; // endforeach replaces }
?>
</html>
