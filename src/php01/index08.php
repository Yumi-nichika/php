<?php
$a = "aaa";
var_dump($a);

echo '<br>';
echo '<br>';

$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);

echo '<br>';
echo '<br>';

echo $people[0];

echo '<br>';
echo '<br>';

$people2 = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people2);

echo '<br>';
echo '<br>';

$peoples = [
    [
        "name" => "Taro",
        "age" => 25,
        "gender" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => 20,
        "gender" => "men"
    ],
    [
        "name" => "hanako",
        "age" => 16,
        "gender" => "women"
    ]
];

foreach ($peoples as $pe) {
    echo $pe["name"] . "(" . $pe["age"] . "歳" . $pe["gender"] . ")" . '<br>';
}