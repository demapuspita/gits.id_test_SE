<?php

function input() {
    return fgets(STDIN);
}
echo "Masukkan jumlah bilangan: " . PHP_EOL;
$jmlblgn = input();
for ($i = 0; $i <= $jmlblgn - 1; $i++) {
    $p = $i * ($i + 1) / 2 + 1;
    echo $p . PHP_EOL;
}
?>
