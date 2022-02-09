<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/flex_grid.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header><img class="image" src="img/hamster.png" alt="#">
    <div class="table"><a class="color_link" href="table.html">Таблица Менделеева</a></div>
</header>
<main>
    <section class="info_block">
        <aside class="photo">Фото</aside>
        <div class="text">
            <div class="name">Имя</div>
            <div class="text_1">
                <div class="info">Информация</div>
                <div class="opinion">Мнение</div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="main">
                <div class="block block__media_4">
                    <div class="img img__1"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/263531/">Мстители</a></div>
                </div>
                <div class="block block__media_4">
                    <div class="img img__2"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/679830/">Мстители: Эра альтрона</a></div>
                </div>
                <div class="block block__media_4">
                    <div class="img img__3"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/843649/">Мстители: Война Бесконечности</a></div>
                </div>
                <div class="block block__media_4">
                    <div class="img img__4"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/843650/">Мстители: Финал</a></div>
                </div>
        </div>
    </section>

    <section class="container_grid">
        <div class="main_grid">
            <div class="block_grid">
                <div class="img_grid img__grid_1"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Тигр">Тигр</a></div>
            </div>
            <div class="block_grid">
                <div class="img_grid img__grid_2"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Лев">Лев</a></div>
            </div>
            <div class="block_grid block__grid_1">
                <div class="img_grid img__grid_3"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Леопард">Леопард</a></div>
            </div>
            <div class="block_grid block__grid_1">
                <div class="img_grid img__grid_4"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Пума">Пума</a></div>
            </div>
        </div>
    </section>
</main>
<?
date_default_timezone_set("Asia/Yekaterinburg");
$date = new DateTime('NOW');
$hour = $date->format('G');
if ( ($hour > 8) && ($hour < 20) ) {
    echo  <<<HTML
    <style>
    body{
    background-color: darkgray;
    }
</style>
HTML;
} else{
    echo  <<<HTML
    <style>
    body{
    background-color: black;
    }
    .container{
    border-bottom: 5px solid darkgray;
    }
    .img{
    border: 3px solid white;
    }
</style>
HTML;
}
?>
</body>
</html>