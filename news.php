<?
require 'service/db.php';

$stmt = $mysqli->prepare("SELECT * FROM `news` ORDER BY id DESC");
$stmt->execute();
$result = $stmt->get_result();
$result = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Куркинский ДК</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
    <div class="page">
        <div class="bg"></div>
        <div class="welcome">
            <div class="header-wrapper">
                <div class="header">
                    <a class="header-btn" href="/index.php">Дом Культуры</a>
                    <div class="nav">
                        <a class="header-btn" href="#news">Новости</a>
                        <a class="header-btn" href="#gallery">Галерея</a>
                        <a class="header-btn" href="#services">Услуги</a>
                    </div>
                </div>
            </div>
            <div class="welcome-text">
                <h2>Добро пожаловать<br>в<br>Куркинский районный центр культуры!</h2>
                <a href="index.php#about-us" class="welcome-btn">О нас</a>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
     
                <div id="news">
                    <h2>Новости</h2>
                    <div class="news">
                        <div class="news-list">
                            <? foreach($result as $res): ?>
                            <div id="news-<?=$res["id"];?>" class="news-container">
                                <div class="title"><h3><?=$res["title"]?></h3></div>
                                <div class="time"><time><?=$res["time"]?></time></div>
                                <div class="desc">
                                    <p>
                                        <div class="pic" style="background-image: url(/img/news/<?=$res["pic"]?>)"></div>
                                        <?=$res["dsc"]?>
                                    </p>
                                </div>
                            </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require 'service/footer.php'?>
</body>
</html>