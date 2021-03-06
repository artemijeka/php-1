<?php
////////////////////////////////////////////////////////////////////////////////
echo "<pre><hr>
    7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
    22 часа 15 минут
    21 час 43 минуты
<br>";
/**
 * 1 час   * 21 час
 * 2 часа  * 3 часа  * 4 часа  * 22 часа * 23 часа * 24 часа
 * 0 часов * 5 часов * 6 часов * 7 часов * 8 часов * 9 часов * 10 часов * 11 часов * 12 часов
 * 13 часов * 14 часов * 15 часов * 16 часов * 17 часов * 18 часов * 19 часов * 20 часов
 * --------------------------------------------------
 * С окончанием на 0,5,6,7,8,9 и 11,12,13,14 - часов.
 * С окончание на 1 - час. Исключение 11.
 * С окончанием на 2,3,4 - часа. Исключение 12,13,14.
 * --------------------------------------------------
 * 1 минута * 21 минута * ...
 * 2 минуты  * 3 минуты * 4 минуты * 22 минуты * 23 минуты * 24 минуты * ...
 * 0 минут * 5 минут  * 6 минут * 7 минут * 8 минут * 9 минут * 10 минут * 11 минут * 12 минут * 13 минут * 14 минут * ...
 * 15 минут * 16 минут * 17 минут * 18 минут * 19 минут * 20 минут * 25 минут * 26 минут * 27 минут * 28 минут * 29 минут * 30 минут
 * --------------------------------------------------------
 * С окончанием на 0,5,6,7,8,9 и 11,12,13,14 - минут.
 * С окончанием на 1 - минута. Исключение 11 выше.
 * С окончанием на 2,3,4 - минуты. Исключение 12, 13, 14 выше.
 * --------------------------------------------------------
 */
////////////////////////////////////////////////////////////////////////////////
function nowTime() {
	$hour  = date("G")+2;
    $minut = date("i");
// var_dump( $hour % 10 );
// var_dump( $minut % 10 );
    /**
     * Часы:
     */
    switch ($hour): // деление на 10 чтобы узнать крайнюю цифру числа.
        case $hour%10==0:
        case $hour%10==5:
        case $hour%10==6:
        case $hour%10==7: 
        case $hour%10==8:
        case $hour%10==9:
        case 11:
        case 12:
        case 13:
        case 14:
            $hour_str = "часов";
            break;
        case $hour%10==1: // Исключение 11 оно уже должно было сработать выше.
            $hour_str = "час";
            break;
        case $hour%10==2:
        case $hour%10==3:
        case $hour%10==4: // Исключение 12, 13, 14 они уже должны были сработать выше.
            $hour_str = "часа";
            break;
        default:
            "DEFAULT SWITCH CASE VALUE";
            break;
    endswitch;
    /**
     * Минуты:
     */
    switch ($minut) { // деление на 10 чтобы узнать крайнюю цифру числа.
        case $minut%10==0:
        case $minut%10==5:
        case $minut%10==6:
        case $minut%10==7: 
        case $minut%10==8:
        case $minut%10==9:
        case 11:
        case 12:
        case 13:
        case 14:
            $minut_str = "минут";
            break;
        case $minut%10==1: // Исключение 11 оно уже должно было сработать выше.
            $minut_str = "минута";
            break;
        case $minut%10==2:
        case $minut%10==3:
        case $minut%10==4: // Исключение 12, 13, 14 они уже должны были сработать выше.
            $minut_str = "минуты";
            break;
        default:
            "DEFAULT SWITCH CASE VALUE";
            break;
    }
	return "Сейчас: $hour $hour_str : $minut $minut_str";
}
echo nowTime();
////////////////////////////////////////////////////////////////////////////////
echo "</pre><hr>";
////////////////////////////////////////////////////////////////////////////////