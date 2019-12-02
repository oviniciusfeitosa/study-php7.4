<?php
$tamanho = 1000000;
$inicio = microtime(true);
$array = [];

for ($i=0; $i < $tamanho; $i++) {
  $array[] = null;
}

echo (microtime(true) - $inicio) . PHP_EOL; // 0.043247938156128
var_dump(memory_get_peak_usage()); // 33950192