<?php

$poket_money = 1000;
$fund_rasing = 101;

echo 'あなたの所持金は' . $poket_money . '円です。' . PHP_EOL;

do {
    echo $fund_rasing . '円募金しました。';
    echo PHP_EOL;
    $poket_money -= $fund_rasing;
    echo '残り残高は' . $poket_money . '円です。' . PHP_EOL;
} while ($poket_money >= $fund_rasing);

echo 'あなたはこれ以上募金できません。';
