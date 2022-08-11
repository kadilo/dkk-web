<?
require 'service/db.php';

$stmt = $mysqli->prepare("SELECT * FROM `news` ORDER BY id DESC LIMIT 3 ");
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
                    <a class="header-btn" href="#">Дом Культуры</a>
                    <div class="nav">
                        <a class="header-btn" href="#news">Новости</a>
                        <a class="header-btn" href="#gallery">Галерея</a>
                        <a class="header-btn" href="#services">Услуги</a>
                    </div>
                </div>
            </div>
            <div class="welcome-text">
                <h2>Добро пожаловать<br>в<br>Куркинский районный центр культуры!</h2>
                <a href="#about-us" class="welcome-btn">О нас</a>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <div id="about-us">
                    <h2>Наша история</h2>
                    <p>В 20-е годы, прошлого века, на старой площади построили Комсомольский клуб или Народный дом. В воспоминаниях старых комсомольцев содержатся сведения о том, что в 1918 году при Народном доме впервые организован культпросветкружок. Кружковцы ставили пьесы Мольера, Фонвизина, Островского.<br>
                        В Куркинском Народном доме проводили комсомольские собрания, обучали неграмотных, проводили и вечера.<br>
                        В 20-е годы было принято решение о строительстве дома крестьянина, но средств и стройматериалов не было. Силами комсомольцев и молодежи разбирали стены церквей и перевозили на повозках в поселок. Более пяти лет велось строительство.              
                        В конце 1932 года завершилось строительство одной части здания, в таком варианте оно и осталось. В зрительном зале потолок имел форму купола, обтянутого материей. Имелись специальные крепления для исполнения цирковых номеров воздушных гимнастов, канатоходцев. После сдачи клуба в эксплуатацию, его планировалось называть Домом крестьянина, но он, как и прежде, стал именоваться Народным домом.  концу 1930-х годов Народный дом все чаще называют просто клубом или районным Домом культуры. Здесь проходят концерты, ставятся пьесы русских классиков и в 1936 году была даже осуществлена постановка оперы А. Даргомыжского "Русалка".<br>
                        Художественная самодеятельность и культурная жизнь не замирала в ДК даже в грозные годы войны. Так, в 1943 году в ДК состоялось 18 киносеансов, хотя электричества не было, проекционный аппарат приводили в движение ручным способом с перерывом после каждой части. Приезжали областные концертные бригады, ими было дано десять концертов, семь раз выступали участники художественной самодеятельности ДК.<br>
                        В 50-е годы при ДК, сельских клубах и избах-читальнях создаются агитбригады. Так в 1952 году районная агитбригада обслужила тридцать три колхоза во время весенне-осенних полевых работ.<br>
                        История районного Дома культуры, история развития нашей культуры неотделима от истории развития нашего района и поселка, его взлетов и падений, печалей и радостей.<br>
                        В 2012 году Дом культуры отметил свое 80-ти летие.<br>
                        С 2014 года Муниципальное казенное учреждение культуры Куркинский районный центр культуры (Постановление Администрации МО Куркинский район №668) объединяет Михайловский и Самарский филиалы, а также Районный Дом культуры и Парк культуры  и отдыха им.600-летия Куликовской битвы.</p>
                    <? require 'service/slider.php';?>
                </div>
                
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
                    <div style="display: flex; justify-content: end; padding: 4rem 0 0 0"><a style="" href="news.php">Больше новостей...</a></div>
                </div>

                <div id="gallery">
                    <h2>Галерея</h2>
                    <div class="gallery-table">
                        <div class="gallery-img" id="gallery-img-1" onclick="scale(1)" style="grid-area: a; background-image: url(../img/gallery/1.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-2" onclick="scale(2)" style="grid-area: b; background-image: url(../img/gallery/3.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-3" onclick="scale(3)" style="grid-area: c; background-image: url(../img/gallery/2.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-4" onclick="scale(4)" style="grid-area: d; background-image: url(../img/gallery/4.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-5" onclick="scale(5)" style="grid-area: e; background-image: url(../img/gallery/5.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-6" onclick="scale(6)" style="grid-area: f; background-image: url(../img/gallery/6.jpeg)"></div>
                        <div class="gallery-img" id="gallery-img-7" onclick="scale(7)" style="grid-area: g; background-image: url(../img/gallery/7.jpeg)"></div>
                        <div class="gallery-img" id="gallery-img-8" onclick="scale(8)" style="grid-area: h; background-image: url(../img/gallery/8.jpeg)"></div>
                        <div class="gallery-img" id="gallery-img-9" onclick="scale(9)" style="grid-area: i; background-image: url(../img/gallery/9.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-10" onclick="scale(10)" style="grid-area: j; background-image: url(../img/gallery/10.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-11" onclick="scale(11)" style="grid-area: k; background-image: url(../img/gallery/11.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-12" onclick="scale(12)" style="grid-area: l; background-image: url(../img/gallery/12.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-13" onclick="scale(13)" style="grid-area: m; background-image: url(../img/gallery/13.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-14" onclick="scale(14)" style="grid-area: n; background-image: url(../img/gallery/14.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-15" onclick="scale(15)" style="grid-area: o; background-image: url(../img/gallery/15.jpeg)"></div>
                        <div class="gallery-img" id="gallery-img-16" onclick="scale(16)" style="grid-area: p; background-image: url(../img/gallery/16.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-17" onclick="scale(17)" style="grid-area: q; background-image: url(../img/gallery/17.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-18" onclick="scale(18)" style="grid-area: r; background-image: url(../img/gallery/18.jpg)"></div>
                        <div class="gallery-img" id="gallery-img-19" onclick="scale(19)" style="grid-area: s; background-image: url(../img/gallery/19.jpg)"></div>
                        <div class="dark-bg" id="dark-bg"></div>
                    </div>
                </div>

                <div id="services">
                    <h2>Услуги</h2>
                    <div class="services-list">
                        <ul>
                            <li>организация  и проведение культурно-досуговых мероприятий: фестивалей, концертов, смотров, конкурсов, детских утренников, викторин, выставок, ярмарок, театральных представлений, спектаклей, спортивно-оздоровительных мероприятий, вечеров, обрядов и ритуалов в соответствии с местными обычаями и традициями (гражданских, национальных, профессиональных и др.);</li>
                            <li>организация и проведение информационно-просветительских мероприятий: форумов, конференций, круглых столов, семинаров, мастер-классов, лекционных мероприятий, презентаций, встреч с деятелями культуры, науки, литературы;</li>
                            <li>организация работы любительских объединений, групп, клубов по интересам, художественных (вокальных, театральных, хореографических, вокально-инструментальных и др.), декоративно-прикладных, изобразительных, молодежных, ветеранов и др.;</li>
                            <li>организация деятельности кружков, творческих коллективов, студий любительского художественного, декоративно-прикладного, изобразительного, творчества;</li>
                            <li>организация выездного культурного обслуживания (жителей отдаленных населенных пунктом, граждан с ограниченными возможностями, пожилых граждан и др.);</li>
                            <li>осуществление деятельности по кинообслуживанию населения (кинозал) муниципального образования Куркинский район.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require 'service/footer.php'?>
</body>
</html>