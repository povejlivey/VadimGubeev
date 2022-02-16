
<?php
require 'header.php';
?>

<main>
    <section class="info_block">
        <aside class="photo"><?php $all_text2[] = 'Фото'; echo $all_text2[2] ?></aside>
        <div class="text">
            <div class="name"><?php $all_text2[] = 'Имя'; echo $all_text2[3] ?></div>
            <div class="text_1">
                <div class="info">
                    <div>
                        <?php
                        $all_text2[] = 'Тут будет какая то информация обо мне, а может и не будет.';
                        function firstWord()
                        {
                            global $all_text2;
                            $mass = explode(" ", $all_text2[4]);
                            $zam = "<span style='color: red;'>$mass[0]</span>";
                            $str_info = str_replace($mass[0]/*что меням*/, /*на что меням*/ $zam, /*где меням*/ $mass);
                            $str_info = implode(" ", $str_info);
                            print_r($str_info);
                        }
                        firstWord();
                        ?>
                    </div>
                </div>
                <div class="opinion">
                    <div>
                    <?php
                    $all_text2[] = 'Абсолютно не интересная информация';
                    function evenOdd(){
                        global $all_text2;
                        $mass1 = explode(" ", $all_text2[5]);
                        for ($i = 0; $i < count($mass1); $i++) {
                            if ($i % 2 === 0) {
                                $even = "<span style='color: blue'>$mass1[$i]</span> ";
                                print_r($even);
                            } elseif ($i % 2 !== 0) {
                                $odd = "<span style='color: yellowgreen'>$mass1[$i]</span> ";
                                print_r($odd);
                            }
                        }
                    }
                    evenOdd();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="main">
                <div class="block block__media_4">
                    <div class="img img__1"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/263531/"><?php $all_text2[] = 'Мстители'; echo $all_text2[6] ?></a></div>
                </div>
                <div class="block block__media_4">
                    <div class="img img__2"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/679830/"><?php $all_text2[] = 'Мстители: Эра Альтрона'; echo $all_text2[7] ?></a></div>
                </div>
                <div class="block block__media_4 block_wrap">
                    <div class="img img__3"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/843649/"><?php $all_text2[] = 'Мстители: Война Бесконечности'; echo $all_text2[8] ?></a></div>
                </div>
                <div class="block block__media_4 block_wrap">
                    <div class="img img__4"></div>
                    <div class="text_flex"><a target="_blank" href="https://www.kinopoisk.ru/film/843650/"><?php $all_text2[] = 'Мстители: Финал'; echo $all_text2[9] ?></a></div>
                </div>
        </div>
    </section>

    <section class="container_grid">
        <div class="main_grid">
            <div class="block_grid">
                <div class="img_grid img__grid_1"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Тигр"><?php $all_text2[] = 'Игорь'; echo $all_text2[10] ?></a></div>
            </div>
            <div class="block_grid">
                <div class="img_grid img__grid_2"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Лев"><?php $all_text2[] = 'Олег'; echo $all_text2[11] ?></a></div>
            </div>
            <div class="block_grid block__grid_1">
                <div class="img_grid img__grid_3"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Леопард"><?php $all_text2[] = 'Валера'; echo $all_text2[12] ?></a></div>
            </div>
            <div class="block_grid block__grid_1">
                <div class="img_grid img__grid_4"></div>
                <div class="text_grid"><a target="_blank" href="https://ru.wikipedia.org/wiki/Пума"><?php $all_text2[] = 'Коля'; echo $all_text2[13] ?></a></div>
            </div>
        </div>
    </section>
</main>
<?
require 'Time_style.php';
require "footer.php";

$all_text2[] = "";
function numberOfLetters(){
    global $all_text2;
    $ar = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    $Ar = ['А', 'Е', 'Ё', 'И', 'О', 'У', 'Ы', 'Э', 'Ю', 'Я'];
    for ($i = 0; $i < count($all_text2); $i++) {
        for ($j = 0; $j < strlen($all_text2[$i]) / 2 + 1; $j++) {
            if (in_array(mb_substr($all_text2[$i], $j, 1), $ar)) {
                $count++;
            } elseif (in_array(mb_substr($all_text2[$i], $j, 1), $Ar)) {
                $count++;
            } else {
                continue;
            }
        }
    }echo "Количество букв на странице - $count<br>";
}
numberOfLetters();


function numberOfWords()
{
    global $all_text2;
    for ($i = 0; $i < count($all_text2); $i++) {
        $word_count += count(explode(' ', $all_text2[$i]));
    }
    echo "Количество слов на странице - $word_count";
}
numberOfWords();


function days(){
    $myBirthday = date_create("03.03.1994");
    $date = date_create(date("now"));
    $interval = date_diff($myBirthday, $date);
    echo $interval->format('<br>Прожил %a дней');
}
days();
?>
</body>
</html>

