<?php
$numbers = array(1, 2, 3, 4);
$total = count($numbers);
$sum = 0;
$output = "";
$loop = 0;

foreach ($numbers as $number) {
  $loop = $loop + 1;
  if ($loop < $total) {
    $output = $output . $number;
  }
}
echo $output;
