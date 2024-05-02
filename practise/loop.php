<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.html">回首頁</a>
<h2>loop迴圈練習</h2>

<?php
echo "編寫一個PHP程序，使用for循環輸出從1到10的數字";
echo "<br>";
for($i=1; $i<=10; $i++){
    echo $i,",";  
}

echo "<hr>";
echo "編寫一個PHP程序，使用for循環輸出從1到10之間的偶數";
echo "<br>";

for($i=2; $i<=10; $i+=2){
    echo $i,",";
}

echo "<hr>";
echo "編寫一個PHP程序，使用for循環輸出從10到1的倒敘數字";
echo "<br>";

for($i=10; $i>=1; $i--){
    echo $i,",";
}

echo "<hr>";
echo "編寫一個PHP程序，使用for循環輸出一個*的直角三角形";
echo "<br>";

for($i=1; $i<=6; $i++){
   for($j=1; $j<$i; $j++){
    echo "*";
   }
    echo"<br>";
}

echo "<hr>";
echo "使用 for 迴圈印出數字 1 到 10";
echo "<br>";
for($i=1; $i<=10; $i++){
    echo $i.",";
}
    echo "<br>";

echo "<hr>";
echo "使用 for 迴圈印出 10 到 1 的倒序數字";
echo "<br>";
for($i=10; $i>=1; $i--){
    echo $i.",";
}
    echo "<br>";

echo "<hr>";
echo "使用 for 迴圈印出前 10 個偶數";
echo "<br>";
for($i=2; $i<=20; $i+=2){
    echo $i.",";
}
    echo "<br>";

echo "<hr>";
echo " 使用 for 迴圈印出九九乘法表。";
echo "<br>";
for($i=1; $i<=9; $i++){
  for($j=1; $j<=9; $j++){
    echo $i."x".$j."=".($i*$j)."&nbsp&nbsp&nbsp";
}
    echo "<br>";
}

echo "<hr>";
echo "使用 for 迴圈計算並輸出前 10 個自然數的總和";
echo "<br>";
$tmp = 0;
for ($i = 1; $i <= 10; $i++) {
    $tmp += $i;
}
echo "前 10 個自然數的總和為：$tmp";

echo "<hr>";
echo "使用 for 迴圈印出九九乘法表中的偶數行";
echo "<br>";
for($i=2; $i<=9; $i+=2){
    for($j=1; $j<=9; $j++){
      echo $i."x".$j."=".($i*$j)."&nbsp&nbsp&nbsp";
  }
      echo "<br>";
  }

echo "<hr>";
echo "使用 for 迴圈印出 1 到 20 之間的所有奇數。";
echo "<br>";
for($i=1; $i<=20; $i+=2){
    echo $i.",";
}

echo "<hr>";
echo "使用 for 迴圈計算並印出 1 到 100 之間所有數字的總和";
echo "<br>";
$tmp=0;
for($i=1; $i<=100; $i++){
    echo $tmp += $i;
}
    echo " 1 到 100 之間所有數字的總和是".$tmp;

echo "<hr>";
echo "使用 for 迴圈印出 5 到 1 的倒序數字。";
echo "<br>";
for($i=5; $i>=1; $i--){
    echo $i." ";
}

echo "<hr>";
echo "使用 for 迴圈印出一個直角三角形的星星圖案，共有 5 行。";
echo "<br>";
for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}


?>

<hr>
<style>
.item{
    width:50px;
    height:50px;
    border:1px solid red;
}
</style>
<?php
echo "<div class='item'>";
for($i=0; $i<42; $i++){

}
echo "</div>";

?>


</body>
</html>