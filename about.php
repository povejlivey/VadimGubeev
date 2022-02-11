<?php
    echo "<a href='index.php'>Главная</a>";
    echo '<br><br><br>';
    //Задача 1
for ($i = 5; $i <=13; $i++){
    echo $i . "<br>";
}
$j = 0;

//Задача 2. Цикл for
for ($i = 1000; $i > 50; ) {
    $i/=2;
    $j++;
}
echo "<br>$i<br>";
echo  "Количество итераций - $j <br>" ;

echo  '<br>';

//Задача 2. Цикл while
$a = 1000;
$b= 0 ;
while($a > 50){
    $a /=2;
    $b++;
}
echo $a . '<br>' ;
echo "Количество итераций - $b";

echo '<br><br>';
//Задача 3.
$k = 5;
for ($j = 0; $j <=$i = 10 -$k; $j ++){
    echo $j;
}
?>