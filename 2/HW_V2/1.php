<?
echo "<pre><hr>
    1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
    Затем написать скрипт, который работает по следующему принципу:
    если $a и $b положительные, вывести их разность;
    если $а и $b отрицательные, вывести их произведение;
    если $а и $b разных знаков, вывести их сумму;
    ноль можно считать положительным числом.
</pre>";
$a = -32;
$b = 15;
if ($a >= 0 AND $b >= 0) {
    echo $a - $b;
} 
elseif ($a < 0 AND $b < 0) {
    echo $a * $b;
}
elseif ( ($a < 0 AND $b > 0) || ($a > 0 AND $b < 0) ) {
    echo $a + $b;
}
////////////////////////////////////////////////////////////////////////////////
