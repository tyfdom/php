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
 $x=5; // ȫ�ֱ��� 

function myTest() 
{ 
     
    $y=10; // �ֲ����� 
    echo "<p>���Ժ����ڱ���:<p>"; 
    echo "���� x Ϊ:".$GLOBALS['x']; 
    echo "<br>"; 
    echo "���� y Ϊ: $y"; 
}  

myTest(); 

echo "<p>���Ժ��������:<p>"; 
echo "���� x Ϊ: $x"; 
echo "<br>"; 
echo "���� y Ϊ: $y"; 

?>
<?php 
//���ʹ�� echo ��������������ַ�����
$text1="study php";
$cars=array("Volvo","BMW","Toyota");
    
 
echo  $text1;
print   "ds  {[$cars[0]]}";
echo "<br>";
echo  "-----------------";

?>
<?php 
//var_dump() �������ر������������ͺ�ֵ��
print "<br>";
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // ����
var_dump($x);
echo "<br>";
$x = 0x8C; // ʮ��������
var_dump($x);
echo "<br>";
$x = 047; // �˽�����
var_dump($x);

?>





