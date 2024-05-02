<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }

        td{
            border:1px solid gray;
            padding: 3px 6px;
            font-size:18px;
        }
    </style>
</head>
<body>
<a href="index.html">回首頁</a>
<h1>九九乘法表進階版</h1>   
<?php 
echo " 使用 for 迴圈印出九九乘法表外加表格。";
echo "<br>";
echo "<table>";
for($i=1; $i<=9; $i++){
    echo "<tr>";
  for($j=1; $j<=9; $j++){
    echo "<td>";
    echo $i*$j."&nbsp&nbsp&nbsp";
    echo "</td>";
}
    echo "</tr>";
}
echo "</table>";




?>

</body>
</html>