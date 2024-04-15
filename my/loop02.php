<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    font-family:'courier new',courier,monospace;
}
    </style>
</head>
<body>
<a href="index01.html">回首頁</a><br>

<h3>以 * 符號為基礎在網頁上排列出下列圖形:</h3>

<ul>
    <li>直角三角型</li>
    <li>倒直角三角型</li>
    <li>正三角型</li>
    <li>菱型</li>
    <li>矩形</li>
    <li>內含對角線的矩形</li>
</ul>
<h3>直角三角形</h3>
<?php
// $stars決定行數
$stars=7;
for($i=0; $i<$stars; $i++){
    for($j=0; $j<=$i; $j++){
    echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h3>倒直角三角形</h3>
<?php

for($i=$stars; $i>0; $i--){
    for($j=0; $j<$i; $j++){
    echo "*";
    }
    echo "<br>";
}

?>

<hr>

<h3>正三角形</h3>

<?php

for($i=0; $i<$stars; $i++){
   for($k=0; $k<$stars-1-$i;$k++){
       echo "&nbsp";
}

    for($j=0; $j<$i*2+1; $j++){
       echo "*";
    }
       echo "<br>";
}

?>

<hr>

<h3>菱形</h3>

<?php

$odd=($stars%2==0)?$stars+1:$stars;
$mid=(($odd+1)/2)-1;


for($i=0;$i<$stars;$i++){

if($i<=$mid){
    $tmp=$i;
}else{
    // $tmp--，遞減的關鍵因子;
    $tmp=$tmp-1;
}

for($k=0; $k<$mid-$tmp;$k++){
        echo "&nbsp";
}
 
for($j=0;$j<$tmp*2+1; $j++){
   echo "*";
}
   echo "<br>";
}
 
//  for($i=$stars-1; $i>0; $i--){
//     for($k=0; $k<$stars-$i;$k++){
//         echo "&nbsp";
//  }
 
//      for($j=0; $j<$i*2-1; $j++){
//         echo "*";
//      }
//         echo "<br>";
//  }

?>

</body>
</html>