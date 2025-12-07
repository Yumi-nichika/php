<?php
// $a = 5;
$a = 7;

if ($a == 5) {
    echo '$aは5です';
}
elseif ($a == 7) {
    echo '$aは7です';
}
else {
    echo "\$aはそれ以外です";
}

echo '<br>';
echo '<br>';

$prople = "Saburo";
switch($prople) {
    case "Saburo":
        echo "三郎です";
        break;
    default:
        echo "その他";
        break;
}

echo '<br>';
echo '<br>';

$result = ($a == 7) ? "TRUE" : "FALSE";
echo $result;