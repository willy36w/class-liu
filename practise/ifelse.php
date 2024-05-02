<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.html">回首頁</a>
    <h2>if else迴圈</h2>
<hr>
    <?php
echo "寫一個PHP程序，判斷一個整數是否為偶數，如果是偶數則輸出偶數，否則輸出奇數";
echo "<br>";
$score=11;
if($score % 2==0){
echo $score,"是","偶數";
}else{
echo $score,"是","奇數";
}
echo "<hr>";

echo "寫一個PHP程序，判斷一個學生的成績等級並輸出相應的等級描述。
成績範圍：90分及以上为 A 等，80-89 分為B等，70-79分為C等，60-69分為D等，60分以下為F等";
echo "<br>";

$score=91;
if($score>=90){
    echo $score,"是A等";
}else if($score>=80){
    echo $score,"是B等";
}else if($score>=70){
    echo $score,"是C等";
}else if($score>=60){
    echo $score,"是D等";
}else{
    echo $score,"是F等";
}
echo "<hr>";
echo "寫一個PHP程式，判斷一個年份是否為閏年，如果是閏年則輸出 是閏年 ，否則輸出 不是閏年。
閏年的判斷規則是:能被4整除但是不能被100整除的年份為閏年，或者能被400整除的年份也是閏年。";
echo "<br>";

$year=2032;
if(($year%4==0 && $year%100!=0) || $year%400==0){
    echo $year,"是閏年";
}else{
    echo $year,"不是閏年";
}
echo "<hr>";

echo "寫一個PHP程式，根據用戶的年齡判斷他/她的就讀等級(學前班、小學、初中、高中、大學等)，
並輸出相應的就讀階段名稱，年齡範圍可以自行設置。";

echo "<br>";
$age = 25;

if ($age < 6) {
    echo $age,"歲是學前班";
} else if ($age >= 6 && $age <= 11) {
    echo $age,"歲是小學";
} else if ($age >= 12 && $age <= 14) {
    echo $age,"歲是初中";
} else if ($age >= 15 && $age <= 17) {
    echo $age,"歲是高中";
} else if($age >= 18 && $age <= 21) {
    echo $age,"歲是大學";
} else{
    echo $age,"歲是社會人士";
}

echo "<hr>";
echo "編寫一個PHP程式，判斷一個數字是否為正數、負數或零，並輸出對應的信息。";
echo "<br>";


$score=99;

if ($score>0){
    echo $score,"這是一個正數";
} else if($score<0){
    echo $score,"這是一個負數";
} else {
    echo $score,"這是零";
}
echo "<br>";

echo "編寫一個PHP程序，根據用户的年齡判斷他/她的成年狀態（未成年、成年)
並輸出相應的提示信息。成年的判斷標準可以自行設置。";
echo "<br>";

$age=17;
if($age<18){
    echo $age,"是未成年";
}else {
    echo $age,"是成年";
}

echo "<hr>";
echo "寫一個 PHP 程式，接受一個整數作為輸入，如果該數字大於等於 0，輸出 Positive，如果該數字小於 0，輸出 Negative，如果該數字等於 0，輸出 Zero";
echo "<br>";
$score=10;
if($score>0){
    echo "Positive";
}else if($score<0){
    echo "Negative";
}else{
    echo "Zero";
}

echo "<hr>";
echo "寫一個 PHP 程式，判斷一個年份是否為閏年。如果是閏年，輸出 Leap year，否則輸出 Not a leap year";
echo "<br>";
$year=2012;
if(($year%4==0 && $year%100!=0) || ($year%400==0)){
    echo "Leap year";
}else{
    echo "Not a leap year";
}

echo "<hr>";
echo "寫一個 PHP 程式，判斷一個字串是否為空。如果字串為空，輸出 Empty string，否則輸出 Non-empty string。";
echo "<br>";
$string="";
if(empty($string)){
    echo "Empty string";
}else{
    echo "Non-empty string";
}

echo "<hr>";
echo "寫一個 PHP 程式，判斷一個數字是否為奇數還是偶數。如果是奇數，輸出 Odd，如果是偶數，輸出 Even。";
echo "<br>";
$score=112;
if($score%2==0){
    echo "Even";
}else{
    echo "Odd";
}

?>
</body>
</html>