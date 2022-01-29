<?php
// echo uniqid();

echo rand();

echo '<hr>';

for ($i=0;$i<100;$i++){
  echo 'EP-'.str_pad($i+1,6,'0',STR_PAD_LEFT)."<br>";
}
?>