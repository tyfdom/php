<?php
echo "hello world";
?>

<?php

$x=5;
$y=6;
$z=$x+$y;
echo $z;

?>

<?php 
 $x=5; // 全局变量 

function myTest() 
{ 
     
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为:".$GLOBALS['x']; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  

myTest(); 

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 

?>
<?php 
//如何使用 echo 命令输出变量和字符串：
$text1="study php";
$cars=array("Volvo","BMW","Toyota");
    
 
echo  $text1;
print   "ds  {[$cars[0]]}";
echo "<br>";
echo  "-----------------";

?>
<?php 
//var_dump() 函数返回变量的数据类型和值：
print "<br>";
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);

?>





