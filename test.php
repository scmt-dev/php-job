<?php

function showName($name) {
   echo "My name is " . $name;
}

function sum($num1, $num2) {
   $sum = $num1 + $num2;
   return $sum;
}
date_default_timezone_set("Asia/Bangkok");
echo date("Y-m-d H:i:s") . "<br>";

?>