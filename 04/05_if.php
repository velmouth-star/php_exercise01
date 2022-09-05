<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

if ($num == 1) {
    echo "{$num}は素数ではありません。";
} elseif ($num == 2) {
    echo "{$num}は素数です。";
} elseif ($num % 2 == 0) {
    echo "{$num}は素数ではありません。";
} else {
    echo "{$num}は素数です。";
}
