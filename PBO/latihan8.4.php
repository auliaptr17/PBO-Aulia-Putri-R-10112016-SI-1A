<?php

echo "Dari mana anda berasal: ";
$input = fopen("php://stdin", "r");
$asal = trim(fgets($input));
echo "Oh, dari $asal ya\n";

?>