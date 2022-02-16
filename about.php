<?php
    echo "<a href='index.php'>Главная</a>";
    echo '<br><br><br>';
    //Задача 1
/*for ($i = 5; $i <=13; $i++){
    echo $i . "<br>";
}
$j = 0;*/

//Задача 2. Цикл for
/*for ($i = 1000; $i > 50; ) {
    $i/=2;
    $j++;
}
echo "<br>$i<br>";
echo  "Количество итераций - $j <br>" ;*/

/*echo  '<br>';*/

//Задача 2. Цикл while
/*$a = 1000;
$b= 0 ;
while($a > 50){
    $a /=2;
    $b++;
}
echo $a . '<br>' ;
echo "Количество итераций - $b";*/

echo '<br><br>';
//Задача 3.
/*$k = 5;
for ($j = 0; $j <= $i = 10 - $k; $j ++){
    echo $j;
}
echo '<br><br><br><br>';
*/?><!--

--><?php
/*echo "Массивы<br><br>";
$result = 0;
$arr = [50, 45, 40, 35];
foreach ($arr as $value){
    $result += $value;
}
echo $result . '<br>';*/





//echo "<br>";

/*echo "Задача 2<br><br>";

$k = 6;
for($i=0; $i<$k ;$i++){
    $mas[]=rand(0,5);
}

for($i=0; $i<$k ;$i++){
    print$mas[$i];
    print"<br>";
}
echo '<br>';



for ($i = count($mas) - 1; $i >= 0; $i--) {
    echo $mas[$i] . '<br>';
}
echo '<br>';*/


function arrayRand($x){
    for ($i = 0; $i < $x; $i++){
        $massiv[] = rand(0, 5);
    }
    return $massiv;
}
echo "Задание 1<br>";
print_r(arrayRand(3));



$someBody = 'HTML, CSS, PHP, BITRIX';

function numberOfWord(){
    global $someBody;
    echo 'Количество слов - ' . count((explode(' ', $someBody)));
}
echo "<br><br>Задание 2<br>";
numberOfWord();


function reverse(){
    global $someBody;
    echo strrev($someBody);
}
echo "<br><br>Задание 3<br>";
reverse();

echo '<br><br>';

function length(){
    global $someBody;
    echo strlen($someBody);
}
echo "Задание 4<br>";
length();

echo '<br><br>';

function newStringForEveryChar() {
    global $someBody;
    for ($i = 0; $i < strlen($someBody); $i++){
        echo $someBody[$i]. '<br>';
    }
}
echo "Задание 5<br>";
newStringForEveryChar();
?>
