<?php
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_POST['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/santize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">

    <title>世界時計アプリ_結果</title>
</head>
<body>
    <!-- ヘッダー -->
     <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
     </header>
     <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo["img"]; ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">東京</p>
                        <p class="result-card__time"><?php echo $tokyo["time"]; ?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison["img"]; ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $city; ?></p>
                        <p class="result-card__time"><?php echo $comparison["time"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>