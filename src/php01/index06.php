<?php
for ($i = 1; $i < 12; $i++) {
    if ($i % 2 == 0) {
        echo $i;
        echo '<br>';
    }
}

echo '<br>';

$count = 0;
while ($count < 20) {
    $count++;
    echo $count;
    echo '<br>';
}

echo '<br>';

$count = 0;
while ($count < 100) {
    $count++;
    if ($count % 3 == 0) {
        continue;
    }
    elseif ($count >= 20) {
        break;
    }
    echo $count . '<br>';
}

echo '<br>';

$num = 0;
do {
    echo "num = " . $num . '<br>';
    $num++;
}while ($num < 3);

echo '<br>';

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . '<br>';
    }
    elseif ($i % 3 == 0) {
        echo "Fizz" . '<br>';
    }
    elseif ($i % 5 == 0) {
        echo "Buzz" . '<br>';
 
    }
    else {
        echo $i . '<br>';
    }
}

echo '<br>';

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "●";
    }
    echo '<br>';
}