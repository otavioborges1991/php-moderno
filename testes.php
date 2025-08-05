<?php
// cada um desses exemplos imprime um valor diferente
echo 10 / 3 + 2 ** 2 . "\n";
echo (10 / 3) + 2 ** 2 . "\n";
echo 10 / 3 + (2 ** 2) . "\n";
echo (10 / 3) + (2 ** 2) . "\n";
// os quatro exemplos acima imprimem o mesmo valor
echo 10 / (3 + 2) ** 2 . "\n";
echo (10 / 3 + 2) ** 2 . "\n";
echo (10 / (3 + 2)) ** 2 . "\n";
