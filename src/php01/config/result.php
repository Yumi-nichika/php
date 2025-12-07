<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$count = htmlspecialchars($_POST['count'], ENT_QUOTES);

echo "私の名前は、" . $name;
echo '<br>';
echo "ご希望の商品は、" . $product;
echo '<br>';
echo "注文数は、" . $count;