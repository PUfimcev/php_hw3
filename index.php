<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_HW3</title>
</head>
<body style="padding: 0; margin: 0px 10px; box-sizing: border-box;">

    <?php
echo "<hr>";
/*1. Сделайте функцию, которая возвращает куб числа. Число передается параметром.*/
echo "<p style=\"font-weight: bold;\">Task 1</p><p></p>";

function numCube($num)
{

    if(empty($num) || $num === 0) return "<p>Enter number differetn from 0!</p>";

    return "$num Cube is ".pow($num, 3);

}

echo numCube(2);
echo "<hr>";

/*2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.*/
echo "<p style=\"font-weight: bold;\">Task 2 </p><p></p>";

function sum($num1 = 0, $num2 = 0)
{
    if(empty($num1) || empty($num2)) return "<p>Enter number!</p>";
    $result = $num1 + $num2;
    return " $num1 + $num2 = $result";
}
echo sum(-1, 5);
echo "<hr>";

/*3. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке. */
echo "<p style=\"font-weight: bold;\">Task 3</p><p></p>";

function getDay(int $num)
{
    if(empty($num) || ($num < 1 || $num > 7)) return "<p>Enter number from 1 till 7!</p>";
    switch((int)$num){
        case 1:
            return "Monday";
        break;
        case 2:
            return "Tuesday";
        break;
        case 3:
            return "Wednesday";
        break;
        case 4:
            return "Thursday";
        break;
        case 5:
            return "Friday";
        break;
        case 6:
            return "Saturday";
        break;
        case 7:
            return "Sunday";
        break;
        default;
    }
}

echo getDay(2);
echo "<hr>";

/*4. Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.*/
echo "<p style=\"font-weight: bold;\">Task 4 </p><p></p>";

function numSign($num = null)
{
    
    if(!isset($num)) return "<p>Enter number!</p>";
    if($num === 0) return "<p>Number is 0</p>";
    return ($num < 0) ? "false" : "true";
}

echo numSign(-1);
echo "<hr>";

/*5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.*/
echo "<p style=\"font-weight: bold;\">Task 5 </p><p></p>";

// $getDigitsSum = function($num = null)
function getDigitsSum($num = null)
{
    if(!isset($num) || !is_numeric($num) || is_float($num)) return "<p>Enter integer number!</p>";
    $num .= "";
    $sum = null;
    for($i = 0; $i < strlen($num); $i++){
        $sum += $num[$i];

    }
    // return "<p>Sum number of $num is $sum </p>";
    
    return "$sum";
};

echo getDigitsSum(645);
// echo $getDigitsSum(645);
echo "<hr>";

/*6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.*/
echo "<p style=\"font-weight: bold;\">Task 6 </p><p></p>";

function getYear(array $arg, $func)
{
    $result = [];
    foreach($arg as $k => $v){
        $v = $func($v);
        if ($v === "13") array_push($result, $k);
    }

    $str = implode(", Year: ", $result);

    echo str_pad($str, strlen($str) + 6, "Year: ", STR_PAD_LEFT);
}

getYear(range(0, 2020), "getDigitsSum");
// getYear(range(0, 2020), $getDigitsSum);
echo "<hr>";

/*7. Сделайте функцию isEven() (even - это четный), которая параметром 
принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false. */
echo "<p style=\"font-weight: bold;\">Task 7 </p><p></p>";
function isEven($num = null)
{
    if(!isset($num)) return "<p>Enter number!</p>";
    return ($num % 2 == 0) ? "true" : "false";
}

echo isEven(-2);
echo "<hr>";

/*8. Сделайте функцию, которая принимает строку на русском языке, а 
возвращает ее транслит. */
echo "<p style=\"font-weight: bold;\">Task 8 </p><p></p>";

function translit($str) 
{
    $russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    
   $translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');

   return str_replace($russian, $translit, $str);
}
echo translit("Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит");
echo "<hr>";

/*9. Сделайте функцию, которая возвращает множественное или единственное
число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок'). */
echo "<p style=\"font-weight: bold;\">Task 9 </p><p></p>";

function getApple($quant, array $apple)
{
    if(!isset($quant) || !is_numeric($quant) || is_float($quant) || $quant < 0) return "<p>Enter integer number!</p>";
    if($quant <= 20){
        switch(true){
            case ($quant === 1):
                return "<p> $quant $apple[0]</p>";
            break;
            case ($quant > 1 && $quant <= 4):
                return "<p> $quant $apple[1]</p>";
            break;
            case ($quant === 0 || $quant > 4):
                return "<p> $quant $apple[2]</p>";
            break;
        } 
    } else {
        $quant .= "";
        $lastElem = $quant[strlen($quant)-1];
        switch(true){
            case ($lastElem === "1"):
                return "<p> $quant $apple[0]</p>";
            break;
            case ($lastElem > "1" && $lastElem <= "4"):
                return "<p> $quant $apple[1]</p>";
            break;
            case ($lastElem === "0" || $lastElem > "4"):
                return "<p> $quant $apple[2]</p>";
            break;
        } 
    }

}
echo getApple(10, ['яблоко', 'яблока', 'яблок']);
echo "<hr>";

/*10. Дан массив с числами. Выведите последовательно его элементы 
// используя рекурсию и не используя цикл.*/
echo "<p style=\"font-weight: bold;\">Task 10 </p><p></p>";
function showArr($arr, $i = 0)
{
    if(!isset($arr[$i])) return;
    echo $arr[$i]."</br>";
    $i++;
    return showArr($arr, $i);
}

showArr(range(1,5));
echo "<hr>";

/*11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, 
опять сложите его цифры. И так, пока сумма не станет однозначным числом 
// (9 и менее).*/
echo "<p style=\"font-weight: bold;\">Task 11 </p><p></p>";
$number = 586;
$sum9 = function ($num = null) use ($number, &$sum9)
{
    if(!isset($num) || !is_numeric($num) || is_float($num)) return "<p>Enter integer number!</p>";

    $num .= "";
    $sum = 0;
    for($i = 0; $i < strlen($num); $i++){
        $sum += +$num[$i];
    }
    if($sum > 9) {
        return $sum9($sum);
    } else {
        return "<p>Sum of numbers $number is $sum";
    }
};

echo $sum9($number);

echo "<hr>";

/*12. Рассчитать скорость движения машины и выведите её в удобочитаемом 
виде. Осуществить возможность вывода в км/ч, м/c. Представить решение 
// задачи с помощью одной функции*/
echo "<p style=\"font-weight: bold;\">Task 12 </p><p></p>";

echo '<form action="/PHP_HW3/" method="get">
     <p>Enter a passed distance:</p>
     <input type="number" name="distance" step="any" placeholder="Enter distance"> км</br>
     <p>Enter time on way:</p>
     <input type="number" name="time" step="any" placeholder="Enter time"> ч</br>
     <p>How to depict:</p>
     <p><select name="depict">
        <option selected value="km/h">km/h</option>
        <option value="m/s">m/s</option>
     </select></p>

     <button>Enter</button>
     </form>';
echo "</br>";

function getSpeed(array $data)
{
    $distance = $data["distance"];
    $time = $data["time"];
    $depict = $data["depict"];
    $speed = null;

    if(empty($distance) || empty($time)) return "<p>Enter data!</p>";
    if($depict == "km/h") {
        $speed = round((+$distance / +$time), 1);
        return "<p><b>Speed is $speed km/h</b></p>";
        exit;
    } else {
        $speed = round((+$distance * 1000) / (+$time * 3600), 1);
        return "<p><b>Speed is $speed m/c</b></p>";
        exit;
    }
    
}
echo getSpeed($_GET);
echo "<hr>";

/*13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при условии что каждую букву из строки 1 можно использовать только один раз.*/
echo "<p style=\"font-weight: bold;\">Task 13 </p><p></p>";

function checkWord(...$words)
{
    if(!isset($words[0]) || !isset($words[1]) || empty($words[0]) || empty($words[1])) return;
    $word1 = null;
    $word2 = null;
    $letter = '';
    $pos = 0;

    if(mb_strlen($words[0]) > mb_strlen($words[1])) {
        $word1 = $words[0];
        $word2 = $words[1];
    } else if (mb_strlen($words[0]) < mb_strlen($words[1])) {
        $word1 = $words[1];
        $word2 = $words[0];
    } else {
        $word1 = $words[0];
        $word2 = $words[1];
    }

    $arrWord2 = mb_str_split(mb_strtolower($word2));

    for($i = 0; $i < mb_strlen($word1); $i++){
        $letter = mb_substr(mb_strtolower($word1), $i, 1);
        $pos = array_search($letter, $arrWord2);
        if ($pos === false) continue;
        array_splice($arrWord2, $pos, 1);
    }

    return (count($arrWord2) === 0) ? "<p>It's possible to make up <b>$word2</b> from the letters of <b>$word1</b></p>" : "<p>It's impossible to make up <b>$word2</b> from the letters of <b>$word1</b></p>";

}

echo checkWord("Кокон", "окно");
echo "<hr>";

/*14. Палиндромом называют последовательность символов, которая читается как слева направо, так и справа налево. Напишите функцию по определению палиндрома по переданному параметру.*/
echo "<p style=\"font-weight: bold;\">Task 14 </p><p></p>";

function palindr($str = null)
{
    if(!isset($str)) return;
    echo $str;
    if(is_numeric($str)) {
        $str .= '';
        $str2 = strrev($str);
        return ($str2 === $str) ? "<p>Полиндром.</p>" : "<p>Не полиндром.</p>";
    } else if (is_string($str) && !is_numeric($str)){
        $str = mb_strtolower($str);
        $str  = mb_ereg_replace("[\?\!,\.\-]","",$str);
        $str2 = explode(" ", $str);
        if(count($str2) === 1) {
            $str2 = join($str2);
            $str2 = mb_str_split($str2);
            $str2 = array_reverse($str2);
            $str2 = join($str2);
            
            return ($str2 === $str) ? "<p>Полиндром.</p>" : "<p>Не полиндром.</p>";
        } else {
            $str2 = join($str2);
            $str2 = mb_str_split($str2);
            $str2 = array_reverse($str2);
            $str2 = join($str2);

            $str = explode(" ", $str);
            $str = join($str);

            return ($str2 === $str) ? "<p>Полиндром.</p>" : "<p>Не полиндром.</p>";
        }
    }
}
echo palindr('Я иду с мечем судия.');
echo palindr('шалаш');
echo palindr('Калаш');
echo palindr('Was it a car or, a cat I saw?');
echo palindr('1234');
echo "<hr>";

/*15. Создание функцию создания таблицы умножения в HTML-документе в 
виде таблицы с использованием соотв. тегов.*/
echo "<p style=\"font-weight: bold;\">Task 15 </p><p></p>";

function gerTableMult()
{
    $str = '';
    $result = 0;
    static $count = 1;
    for($i = 1; $i <= 10; $i++){
        $result = $i * $count;
        $str .= "<li>$count * $i = $result</li>";
    }
    $count++;

    return "<ul style=\" list-style: none; padding: 10px 0px; margin: 0; width: 20%;\">$str</ul>";
}

echo "<div style=\"display: flex; flex-wrap: wrap; justify-content: space-evenly; width: 100%;\">".gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult().gerTableMult()."</div>";

echo "<hr>";

/*16. Дана строка с текстом. Напишите функцию определения самого длинного слова.*/
echo "<p style=\"font-weight: bold;\">Task 16 </p><p></p>";

function getMaxStr($str = null)
{
    if(!isset($str) || empty($str)) return;
    echo $str."</br>";
    $str = str_replace(".", "", $str);
    $str = trim($str);
    $arrStr = explode(" ", $str);
    $arrStrLen = array_map(function($v){
        return mb_strlen($v);
    }, $arrStr); 
    $maxLen = max(...$arrStrLen);

    $arrWord = array_filter($arrStr, function ($v) use ($maxLen) {
        if (mb_strlen($v) == $maxLen) return $v;
    });

    if(count($arrWord) === 1){
        $maxWord = implode($arrWord);
        return "<p>Word with maxlength is <b>$maxWord</b>.</p>";
    } else {
        $maxWord = implode(", ", $arrWord);
        return "<p>Words with maxlength are <b>$maxWord</b>.</p>";

    }
}

echo getMaxStr("Создание функцию создания таблицы умножения в HTML-документе в виде таблицы c использованием соотв. тегов");
echo "<hr>";

/*17. Напишите функцию определения суммарного количества единиц в числах
от 1 до 100.*/
echo "<p style=\"font-weight: bold;\">Task 17 </p><p></p>";

function quanNum(){
    $strNum = "";
    $count = 0;
    for($i = 0; $i <= 100; $i++){
        $i .="";
        $strNum .= $i;
    }
    for($j = 0; $j < strlen($strNum); $j++){
        if($strNum[$j] === "1") $count++;
    }
    echo $count;
}
quanNum();
echo "</br>";

function quanNum2(){
    $strNum = implode(range(1,100));
    $arrNum = array_filter(str_split($strNum), function ($v) {
        return $v === "1";
    });
    echo count($arrNum);
}

quanNum2();
echo "<hr>";

/*18. Напишите функцию, которая разбивает длинную строку тегами <br> так, чтобы длина каждой подстроки была не более N символов. Новая подстрока не должна начинаться с пробела.*/
echo "<p style=\"font-weight: bold;\">Task 18 </p><p></p>";

function getSubStr(string $str, int $len) :string
{
    if(!isset($str) || empty($str)) return "Enter string!";
    echo $str."</br></br>";
    $newStr = '';
    $chunk = '';
    // $newStr = array();

    $i = 0;
    if($len <= mb_strlen($str)) {
        while($i < mb_strlen($str)){
            $chunk = mb_substr($str, $i, $len);
            // array_push($newStr, mb_substr($str, $i, $len));
            if($chunk[0] === " ") $chunk = mb_substr($str, $i+1, $len);
            $newStr .= "$chunk </br>";
            $i += $len;
        }
        // $newStr = implode("</br>", $newStr);
        return $newStr;

    } else {
        return "<p>Useless action</p>";
    }

}

echo getSubStr("Напишите функцию, которая разбивает длинную строку тегами так, чтобы длина каждой подстроки была не более N символов. Новая подстрока не должна начинаться с пробела.", 15);
echo "<hr>";

?>

</body>
</html>