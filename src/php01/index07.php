<?php
function output($num1,$num2) {
    $value = $num1 + $num2;
    return $value;
}

$result = output(2,3);
echo $result;

echo '<br>';
echo '<br>';

function scoreChk($score1,$score2,$score3) {
    $total = $score1 + $score2 + $score3;
    
    if ($total > 210) {
        echo "合計点は" . $total . "なので合格です";
    }
    else {
        echo "合計点は" . $total . "なので不合格です";
    }
}

scoreChk(80,90,70);

echo '<br>';
echo '<br>';

function sankaku($teihen,$takasa) {
    $menseki = $teihen * $takasa /2;
    return $menseki;
}

function shikaku($teihen,$takasa) {
    $menseki = $teihen * $takasa;
    return $menseki;
}

function daikei($joutei,$katei,$takasa) {
    $menseki = ($joutei + $katei) * $takasa /2;
    return $menseki;
}

echo sankaku(20,10);
echo '<br>';
echo shikaku(20,10);
echo '<br>';
echo daikei(10,20,10);
echo '<br>';