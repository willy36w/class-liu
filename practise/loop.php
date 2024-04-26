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
// 努力搞懂阿阿阿
for($i=1; $i<=6; $i++){
   for($j=1; $j<$i; $j++){
    echo "*";
   }
    echo"<br>";
}
?>

</body>
</html>