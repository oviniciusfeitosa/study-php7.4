<?php
$tamanho = 1000000;
$inicio = microtime(true);
$fixedArray = new SplFixedArray($tamanho);

for ($i=0; $i < $tamanho; $i++) {
  $fixedArray[$i] = null;
}

echo (microtime(true) - $inicio) . PHP_EOL; // 0.041646957397461
var_dump(memory_get_peak_usage()); // 16394864